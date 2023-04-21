function createTable() {
    document.getElementById("enter_index_rows").value = "";
    document.getElementById("enter_index_cols").value = "";
    // Dung de xoa het cac gia tri trong textbox khi tao bang moi
    var old_table = document.getElementById("main_table");
    var new_table = document.createElement("table");
    new_table.setAttribute("id", "edit_table")  /*thuoc tinh id , gia tri edit_table.*/
    for (var i = 0; i < 2; i++) {
        var row = new_table.insertRow(i);
        for (var j = 0; j < 2; j++) {
            var col = row.insertCell(j);
            var text = document.createTextNode(i + "-" + j);
            col.appendChild(text);
            row.appendChild(col)
        }
        new_table.appendChild(row);
    }
    old_table.appendChild(new_table);
    document.getElementById("button-create").setAttribute('disabled','disabled');
    
}
function AddRow() {
    var temp = document.getElementById("edit_table");
    var cout_column = temp.rows[1].cells.length;
    // var count_rows = temp.rows.length;   
    var count_rows = temp.rows.length;
    var row = temp.insertRow(2);
    // Tim bao nhieu o trong hang dau tien cua bang
    for (var j = 0; j < cout_column; j++) {
        var col = row.insertCell(j);
        var text = document.createTextNode(count_rows + "-" + j);
        col.appendChild(text);
        row.appendChild(col);
    }
    temp.appendChild(row);
}
function AddColumn() {
    // col: cot
    var temp_table = document.getElementById("edit_table");
    var count_column = temp_table.rows[0].cells.length;
    var cout_rows = temp_table.rows.length;            // dem hang
    for (var i = 0; i < cout_rows; i++) {
        var insert = temp_table.rows[i].insertCell(count_column);
        var text = document.createTextNode(i + "-" + count_column);
        insert.appendChild(text);
    }
    // count_column++;
}
function Delete() {
    let text = "Do you want to delete all boards??\nEither YES or CANCEL.";
    if (confirm(text) == true) {
        document.getElementById("enter_index_rows").value = "";
        document.getElementById("enter_index_cols").value = "";
        let element = document.getElementById("edit_table");
        let element2 = document.getElementById("main_table");
        while (element.firstChild) {
            element.removeChild(element.firstChild);
        }
        while (element2.firstChild) {
            element2.removeChild(element2.firstChild);
        }
        document.getElementById("button-create").disabled=false;
    } else {
        return true;
    }
    // alert("Da xoa het");

}

function DeleteRow() {
    var temp_table = document.getElementById("edit_table");
    var value_index_row = document.getElementById("enter_index_rows").value;
    if (value_index_row == "") {
        alert("Please enter the index of the row you want to delete");
        return false;
    }
    // var count_column = temp_table.rows[0].cells.length;
    var cout_rows = temp_table.rows.length;
    if (value_index_row > cout_rows || value_index_row < 0) {
        alert("Invalid input value, please re-enter with value between [0, max rows]");
        return false;
    }
    if (value_index_row > cout_rows - 1) {
        alert("Invalid input value, Note that the index starts at 0");
        return false;
    }
    if (value_index_row != "") {
        if (cout_rows == 1 && value_index_row == 0) {
            let element2 = document.getElementById("main_table");
            while (element2.firstChild) {
                element2.removeChild(element2.firstChild);
            }
            document.getElementById("enter_index_rows").value = "";
            document.getElementById("enter_index_cols").value = "";
            // document.getElementById("button-create").setAttribute('disabled', 'null');
            document.getElementById("button-create").disabled=false;
            return true;
        }
        document.getElementById("edit_table").deleteRow(value_index_row);
    }
}
function DeleteCol() {
    var temp_table = document.getElementById("edit_table");
    var value_index_column = document.getElementById("enter_index_cols").value;
    if (value_index_column == "") {
        alert("Please enter the index of the column you want to delete");
        return false;
    }
    var count_column = temp_table.rows[0].cells.length;
    var cout_rows = temp_table.rows.length;
    if (value_index_column < 0 || value_index_column > count_column) {
        alert("Invalid input value, please re-enter with value between [0, max columns]");
        return false;
    }
    if (value_index_column > count_column - 1) {
        alert("Invalid input value, Note that the index starts at 0");
        return false;
    }
    if (value_index_column != "") {
        if (count_column == 1 && value_index_column == 0) {
            let element2 = document.getElementById("main_table");
            while (element2.firstChild) {
                element2.removeChild(element2.firstChild);
            }
            document.getElementById("enter_index_cols").value = "";
            document.getElementById("enter_index_rows").value = "";
            document.getElementById("button-create").disabled=false;
            return true;
        }
        for (var i = 0; i < cout_rows; i++) {
            document.getElementById("edit_table").rows[i].deleteCell(value_index_column);
        }
    }
}