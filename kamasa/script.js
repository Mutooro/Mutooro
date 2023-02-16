function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    if (name == "") {
        alert("Name must be filled out");
        return false;
    }

    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    

    if (password != confirm_password) {
        alert("Passwords do not match");
        return false;
    }
    if (password.length < 6 || password.length >10) {
                 alert("Password must between 6 and 10 characters long");
               return false;
}
}