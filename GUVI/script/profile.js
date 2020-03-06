$(document).ready(function(){
    checksession();
    $.ajax({
        url: "php/session.php",
        type: "post",
        success: function(result){
            var name=result;
            if (result!='Failed'){
            alert("Welcome " + name);
            $('#name').html(name).val();
            }
            else{
                alert("Check username and Password");
            }          

        }
    })
    $("#update").click(function () { 
        jsondata = {};
        jsondata["name1"]= $("#name").html();
        jsondata["dob1"] = $("#dob").html();
        jsondata["college1"] = $("#college").html();
        jsondata["dept1"] = $("#dept").html();
        jsondata["year1"] = $("#year").html();
        jsondata["contact1"] = $("#contact").html();
        
        
        $.ajax({
            type: "POST",
            url: "php/profile.php",
            data: {
                object : jsondata,
                username : $("#name").text()
            },
            success: function (response) {
                if(response == 'goahead'){
                    alert("Successfully Updated!!")
                    
                    displaydata();
                }else if(response == "waithere"){
                    alert("Please Login");
                    location.replace("index.html");
                }
                else{
                    alert("Error on Updation");
                }
            }
        });
    });

    $('#logout').click(function(e){
        e.preventDefault();
        $.ajax({
            url: "php/logout.php",
            type: "post",
            success: function(response){
                if (response=='true'){
                    alert("Thank You");
                    location.replace("index.html");
                }
            }
        })
        
    })

    function displaydata(e){
        e.preventDefault();
        checksession();
        $.ajax({
            type: "POST",
            url: "php/profile.php",
            success: function (response) {
                if(response!="failed") {
                    resp = response.split('**sep**');
                    obj = JSON.parse(resp[1]);
                    $("#name").text(resp[0]);
                    $("#email").text(obj["email1"]);
                    $("#college").text(obj["college1"]);
                    $("#dob").text(obj["dob1"]);
                    $("#dept").text(obj["dept1"]);
                    $("#contact").text(obj["contact1"]);
                    $("#year").text(obj["year1"]);
                   
                }else{
                    location.replace("index.html");
                    alert("OOPS! Login!");
                }
            }
        });
    }

    function checksession(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "php/findata.php",
            success: function(response){
                if(response=="true"){
                    window.location.href("profile.php");
                }
                else{
                    window.location.href("logout.php");
                    replace.location("index.html");
                }
            }

        })
    }
})

