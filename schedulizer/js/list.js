var arr = [];
    stringArray = arr;
    for (var i = 0; i < arr.length; i++) {
        cell = document.createElement("td");
        xButton = document.createElement("input");
        xButton.type = 'image';
        xButton.src = 'x.png';
        xButton.id = arr[i] + '_delete';
        cell.appendChild(xButton);
        newRow = document.createElement("tr");
        newCell = document.createElement("td");
        newRow.appendChild(newCell);
        newRow.appendChild(cell);
        newCell.innerHTML = arr[i];
        var list = document.getElementById("course_table");
        list.appendChild(newRow);
    }


    window.onload = function storeWord(dept, num) {
        document.getElementById("addbar").onsubmit = function (e) {
            var newRow, i;
            e = e || window.event;
            if (e.preventDefault) {
                e.preventDefault();
                e.stopPropagation();
            }
            e.returnValue = false;
            e.cancelBubble = true;
            newRow = "<tr>";
            for (i = 0; i < this.elements.length; i++) {
                if (this.elements[i].tagName.toLowerCase() === "input" && this.elements[i].type === "text") {
                    newRow += "<td>" + this.elements[i].value + "</td>";
                }
            }
            document.getElementById("course_table").innerHTML += newRow + "</tr>";
            return false;
        };
    }
   /*
function storeWord(dept,num) {
        dept = dept.trim();
        num = num.trim();
        var name = dept + num;
        for (var i = 0; i < arr.length; ++i) {
            if (name == arr[i]) {
                alert("This course is already in the list.");
                return;
            }
        }
        arr.push(name);
        location.reload();
        
}
*/

$(document).ready(function () {
    $("#add_button").click(function () {
        var dept = document.getElementById("dept_in").value;
        var num = document.getElementById("num_in").value;
        storeWord(dept,num);
        document.getElementById("dept_in").value = "";
        document.getElementById("num_in").value = "";
    });
    $("#schedule_button").click(function () {
        updateFilter(stringArray);
    });
    $(document).on('click', "input[id$='_delete']", function () {
        var string = event.target.id;
        string = string.replace("_delete", "");
        removeWord(string);
    });

    function removeWord(e) {
        var array = [];
            array = result['searchterms'];
            for (var i = 0; i < array.length; ++i) {
                if (e == array[i]) {
                    array.splice(i, 1);
                    location.reload();
                    return;
                }
            }
    }
});

function generateCombination() {

}

function changeValueDept() {
    document.getElementById("dept_in").value = "";
    document.getElementById("dept_in").style.color="black";
             }
function changeValueNum() {
                 document.getElementById("num_in").value = "";
                 document.getElementById("num_in").style.color="black";
}