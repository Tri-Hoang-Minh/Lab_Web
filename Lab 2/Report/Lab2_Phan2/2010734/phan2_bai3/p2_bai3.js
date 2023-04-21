
function CheckErrorForFrom() {

    let alert1 = "";
    let alert2 = "";
    let alert3 = "";
    let alert4 = "";
    let alert5 = "";
    let alert6 = "";
    let alert7 = "";
    let alert8 = "";
    let alert9 = "";
    let alert10 = "";
    let alert11 = "";

    
    let firstname = document.getElementById("firstname").value;
    if (firstname.length < 2 || firstname.length > 30) {
        alert1 = "First name: You must enter from 2 to 30 characters!";
        // return false;
    }

    let lastname = document.getElementById("lastname").value;
    if (lastname.length < 2 || lastname.length > 30) {
        alert2 = "Last name: You must enter from 2 to 30 characters!";
        // return false;
    }

    let password = document.getElementById("password").value;
    if (password.length < 2 || password.length > 30) {
        alert3 = "Password: You must enter from 2 to 30 characters!";
    }

    // let email=document.getElementById("email").value;
    let day = document.getElementById("day").value;
    let month = document.getElementById("month").value;
    let year = document.getElementById("year").value;
    if (day == "") {
        alert4 = "Birthday: Please select your day!";
        // return false;
    }

    if (month == "") {
        alert5 = "Birthday: Please select your month!";
        // return false;
    }

    if (year == "") {
        alert6 = "Birthday: Please select your year!";
        // return false;
    }




    let country = document.getElementById("country").value;
    if (country == "") {
        alert7 = "Country: Please select your area!";
        // return false;
    }
    let about = document.getElementById("about").value;
    let length_string = about.length;
    if (about == "") {
        alert8 = "If you have nothing to write, write 'NO' ";
        // return false;
    }
    if (length_string > 10000) {
        alert9 = "Can't exceed 10000 characters";
        // return false;
    }

    let email = document.getElementById("email").value;
    if (email.length <= 1) {
        alert10 = "Email: Please enter your email has lenght greater 5 characters and follow format email of form!";
        // return false;
    }
    let email_length = email.length;
    let flag_1 = 0;
    let flag_2 = 0;
    let count = 0;
    for (let i = 0; i < email_length; i++) {
        if (email[i] == '@' && i > 0) {
            count = count + 1;
            flag_1 = 1;
        }
        if (flag_1 == 1 && count == 1 && email[i] == '.' && i < email_length) {
            flag_2 = 1;
        }
    }
    if (flag_1 == 0 || flag_2 == 0) {
        alert11 = "Email: Invalid, Please re-enter your email.";
        // return false;
    }


    if (alert1=="" && alert2==""&& alert3==""&& alert4==""&& alert5==""&& alert6==""&& alert7==""&& alert8==""&& alert9==""&& alert10==""&& alert11=="") {
        alert("Complete!");
        return true;
    }
    let total = (alert1 + '\n' + alert2 + '\n' + alert3 + '\n' + alert4 + '\n' + alert5 + '\n' + alert6 + '\n' + alert7 + '\n' + alert8 + '\n' + alert9 + '\n' + alert10
        + '\n' + alert11);
    alert(total);
    return false;
}
