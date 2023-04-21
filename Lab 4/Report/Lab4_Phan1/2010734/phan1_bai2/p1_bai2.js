var cookieValue_Save_temp_cookie;
function DeleteTable() {
    var table = document.getElementById("table_monitor");
    var cookies = cookieValue_Save_temp_cookie.split(";");
    console.log(cookies);
    console.log(table.rows.length);
    if (cookies.length == 0) {
        alert("No cookie is saved, you can't delete table!");
    }
    else {
        for (var i = table.rows.length - 1; i > 0; i--) {
            table.deleteRow(i);
        }
    }
}
function AddCookie() {
    if (document.getElementById('namevalue').value == '' && document.getElementById('idvalue').value == '') {
        alert("You must provide your name and id value!!!");
    }
    else {
        var name = document.getElementById('namevalue').value;
        var value = document.getElementById('idvalue').value;
        document.cookie = name + "=" + value + ";" + "path=/;";
        cookieValue_Save_temp_cookie = document.cookie;
        document.getElementById("my_form").reset();
        console.log(cookieValue_Save_temp_cookie);
        alert("Add Cookie is successful !!!");
    }
}

// Method Delete cookie
function DeleteCookie() {
    if (cookieValue_Save_temp_cookie == "") {
        alert("No cookie is stored, you can't delete list cookie, you mus provide your name and id value by method add cookie, before use method delete cookie!!!")
    }
    else {
        DeleteTable();
    }
}
// Method View cookie
function ViewCookie() {
    if (document.cookie.length == 0) {
        alert("No cookie is stored, you can't view list cookie!!!")
    }
    else {
        CreateTable();
    }
}
// Method Edit cookie
function EditCookie() {
    var name = document.getElementById('namevalue').value;
    var value = document.getElementById('idvalue').value;
    if (name === '' || value === '') {
        alert("You must provide your name and id value!!!");
    } else {
        var cookieExists = false;
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();
            var cookieName = cookie.split('=')[0];
            if (cookieName === name) {
                cookieExists = true;
                break;
            }
        }
        if (cookieExists) {
            document.cookie = name + "=" + value + ";" + "path=/;";
            cookieValue_Save_temp_cookie = document.cookie;
            document.getElementById("my_form").reset();
            console.log(cookieValue_Save_temp_cookie);
            alert("Edit Cookie is successful !!!");
        } else {
            alert("Cookie with name " + name + " does not exist.");
        }
    }
}
function CreateTable() {
    var table = document.getElementById("table_monitor");
    var cookies = cookieValue_Save_temp_cookie.split(";");
    if (cookies.length === 0) {
        alert("No cookie is saved");
    } else {
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].split("=");
            var cookieName = cookie[0];
            var cookieValue = cookie[1];
            var row = document.createElement("tr");
            var cell1 = document.createElement("td");
            var cell2 = document.createElement("td");
            cell1.textContent = cookieName;
            cell2.textContent = cookieValue;
            row.appendChild(cell1);
            row.appendChild(cell2);
            table.appendChild(row);
        }
    }
}
function ResetCookie() {
    var cookies = document.cookie.split(";"); // Lấy danh sách các cookies hiện có
    DeleteTable();
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].split("=");
        var cookieName = cookie[0];
        var cookieValue = cookie[1];
        document.cookie = cookieName + "=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
        document.cookie = cookieValue + "=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
    }
    alert("All cookies are removed!");
}

var button = document.getElementById('addbutton');
var noteBox = document.getElementById('noteBox');
button.addEventListener('mouseover', function() {
  noteBox.style.display = 'block';
});
button.addEventListener('mouseout', function() {
  noteBox.style.display = 'none';
});
