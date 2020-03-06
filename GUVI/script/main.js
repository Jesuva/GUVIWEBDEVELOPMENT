$(document).ready(function() {
    
    $("#signup").click(function(e) {
        e.preventDefault();        
        var name = $("#uname").val();
        var password = $("#upassword").val();
        var email = $("#uemail").val();
        var datastring = "name1=" + name + "&password1=" + password + "&email1=" + email;
    
        if (name == '' || password == '' ) {
            alert("Insertion Failed Some Fields are Blank....!!");
        }
        else {
    
            $.ajax({
                type: "POST",
                url: "php/signup.php",
                data: datastring,
                cache: false,
                success: function(result){
                    alert("Welcome  "+result);
                    location.replace("profile.php");
                    
                } 
            })
            }
    });
    $("#signin").click(function(e) {
        e.preventDefault();
        var name = $("#name").val();
        var password = $("#password").val();
        var datastring = "name1=" + name + "&password1=" + password;       

        if (name == '' || password == '' ) {
            alert("Insertion Failed Some Fields are Blank....!!");
        }
        else {
        
            $.ajax({
                type: "POST",
                url: "php/signin.php",
                data: datastring,
                cache: false,
                success: function(result){
                   if (result){
                       window.location="profile.php";
                   }   
                    else{
                        alert("Invaild Login Details!");
                        window.location="index.html";
                    }
                } 
            })

            
            }
    });
});





