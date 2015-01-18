
#include <iostream>
#include <vector>
#include <string>
#include <cmath>

using namespace std;

struct Lecture{
    
    Lecture(double start_, double end_){
        start_time = time(start_);
        end_time = time(end_);
    }
    
    double time(double in) //convert 12h to 24h
    {
        if(in <= 12 && in >=8) return in;
        else return in+12;
    }
    
    double start_time;  // TODO add day (M/Tu/W/Th/F)
    double end_time;
//    string location;

};

struct Course{
    Course(int credit_, string name_)
    {
        credit = credit_;
        name = name_;
        lectures.clear();
    }
    
    void add(Lecture & l){
        lectures.push_back(l);
    }
    
    int credit;
    string name;
    
    vector<Lecture> lectures;
};


vector<Course> potential_courses;
//import potential_courses from user's input


vector<vector<Course>> solutions; //containing all the possibility of selections

const int ALLOW_DIFF = 1;

void find_course_combination(const vector<Course>& potential_courses, int curr_index,
                             int credits,
                             vector<Course>& selected)
// credits = number of remaining credits we could take. This value could be negative.
// curr_index should be -1 when first called. it represents the courses we already took
// into consideration in potential_courses
{
    if( abs(credits) <= ALLOW_DIFF ){
        solutions.push_back(selected);
        return;
    }
    
    if(credits < 0) return; // this combination fails
    
    for(int i=curr_index + 1; i<potential_courses.size(); i++){
        
        selected.push_back(potential_courses[i]);
        
        find_course_combination(potential_courses, i, credits - potential_courses[i].credit, selected);
        
        selected.pop_back();
    }
    
}

bool hasConflict(Lecture l1, Lecture l2)
// return true iff l1 and l2 has time conflict
{
    if(l1.start_time >= l2.start_time && l1.start_time < l2.end_time ) return true;
    
    if(l2.start_time >= l1.start_time && l2.start_time < l1.end_time ) return true;
    
    return false;
}

vector<vector<Lecture>> schedule; // the final solutions


bool hasConflictWithList(Lecture l, vector<Lecture> v)
// return true iff l has a conflict with some lectures in v.
{
    if(v.empty()) return false;
    
    for(int i=0; i<v.size(); i++){
        if( hasConflict(l, v[i]) ) return true;
    }
    
    return false;
}

void find_time(vector<Course>& course_list, int curr_index,
                          vector<Lecture>& curr_result)
//curr_index means: in course_list, we already consider courses before curr_index
{
//    if(curr_index == course_list.size()-1){
//        schedule.push_back(curr_result);
//        return;
//    }
    if(course_list.size() == curr_result.size()){
        schedule.push_back(curr_result);
        return;
    }
    
    for(int i=curr_index+1; i<course_list.size(); i++){
        Course temp = course_list[i];
        
        for(int j=0; j<temp.lectures.size(); j++){
            
            if(hasConflictWithList(temp.lectures[j], curr_result)) continue;
            
            //no conflict
            curr_result.push_back(temp.lectures[j]);
            find_time(course_list, i, curr_result);
            curr_result.pop_back();
        }
    }
}


void debug_solutions()
{
//    vector<vector<Course>> solutions; //containing all the possibility of selections

    for(int i=0; i<solutions.size(); i++){
        int total_credit = 0;
        for(int j=0; j<solutions[i].size(); j++){
            cout << solutions[i][j].name << " " ;
            total_credit += solutions[i][j].credit;
        }
        cout << "total: " << total_credit << endl;
    }
}

void debug_schedule()
{
//    vector<vector<Lecture>> schedule; // the final solutions

    cout << "Here is the sections:" << endl;

    for(int i=0; i<schedule.size(); i++){
        cout << "Schedule: ";
        for(int j=0; j<schedule[i].size(); j++){
            cout << schedule[i][j].start_time << " ";
        }
        cout << endl;
    }
    
    cout << endl ;
}


void course_selection_debug()
{
    Lecture l1(8, 10);
    Lecture l2(9, 10);
    Lecture l3(9.5, 11);
    Lecture l4(10, 11);
    Lecture l5(11, 12);
    Lecture l6(11.5, 1);
    Lecture l7(12, 2);
    Lecture l8(1, 3);
    Lecture l9(2,3);
    
    
    Course c1{4, "EECS280"};
    c1.add(l1);
    c1.add(l2);
    
    Course c2{4, "EECS376"};
    c2.add(l4);
    c2.add(l3);
    
    Course c3{3, "Stats412"};
    c3.add(l7);
    c3.add(l2);
    c3.add(l9);
    
    Course c4{3, "MATH425"};
    c4.add(l5);
    
    Course c5{4, "EECS477"};
    c5.add(l8);

    
    
    
    vector<Course> courses{ c1,  c2, c3, c4, c5 };
    
    vector<Course> temp_sol;
    
    find_course_combination(courses, -1, 12, temp_sol);
    
//    debug_solutions();
//    cout << endl << endl;
    
    
    for(int i=0; i<solutions.size(); i++){
        //require solutions are not changed
        int total_credit = 0;
        for(int j=0; j<solutions[i].size(); j++){
            cout << solutions[i][j].name << " " ;
            total_credit += solutions[i][j].credit;
        }
        cout << "total: " << total_credit << endl;
        
        vector<Lecture> dumb;
        schedule.clear();
        find_time(solutions[i], -1, dumb);
        
        debug_schedule();
        
    }
    
}

int main()
{
    course_selection_debug();

    
}
