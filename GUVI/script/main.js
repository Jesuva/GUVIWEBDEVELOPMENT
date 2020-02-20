function myFunction() {
    var name = document.getElementById("userName").value;
    var email = document.getElementById("userMail").value;
    var password = document.getElementById("userPassword").value;

    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'name1=' + name + '&email1=' + email + '&password1=' + password;
    if (name == '' || email == '' || password == '') {
        alert("Please Fill All Fields");
    } else {
        // AJAX code to submit form.
        $.ajax({
            type: "POST",
            url: "signup.php",
            data: dataString,
            cache: false,
            success: function(html) {
                alert(html);
            }
        });
    }
    return false;
}

