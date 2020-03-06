<html>
    <?php session_start();
    
    ?>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="script/main.js"></script>
    <script src="script/profile.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>GUVI</title>
</head>
        
<body>
    <header>
        <h2>
            Guvi<span>Learn to Code</span>
        </h2>
    </header>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form  name="form" id= "updateform">
                <h3>Update Profile</h3>

                <span></span>
                <input type="text" id ="name" name="name" readonly/>
                <input type="date" id="dob" name="dob" placeholder="Date of Birth" required/>
                <input type="text" id="college" name="college" placeholder="College Name"  required/>
                <input type="text" id="dept" name="dept" placeholder="Department" required/>
                <select  id="year" name="year" required>
                    <option value="1">First</option>
                    <option value="2">Second</option>
                    <option value="3" selected>Third</option>
                    <option value="4">Final</option>
                </select>
                <input type="tel" id="contact" name="contact" placeholder="Mobile Number"/>
                <input  type="submit" value="Update" id="update" >
            </form>
        </div>
        <div class="form-container sign-in-container">
            <div class="portfoliocard">
                <div class="coverphoto"></div>
                    <div class="profile_picture"></div>
                        <div class="left_col">
                            <div class="followers">
                                <div class="follow_count">18,541</div>
                                    GeekCoins
                            </div>
                            <div class="following">
                                <div class="follow_count">181</div>
                                    Rank
                            </div>
                        </div>
                    <div class="right_col">
                        <h2 class="name" id="name"></h2>
                        <h3 class="college" id="college"></h3>
                        <ul class="contact_information">
                            <li class="study" id="dept"></li>
                            <li class="website" id="year"></li>
                            <li class="mail" id="dob"></li>
                            <li class="phone" id="contact"></li>                                            
                        </ul>
                    </div>
            </div> 
                  
        
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">

                    <h1>Raise and shine!</h1>
                    <p>Have a look at your Profile!</p>
                    <button class="ghost" id="signIn">View Profile</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <!--<?php
                        if ($contact==null){
                            echo '<div class="alert alert-info"><strong>Please Update your profile</strong></div>';
                            
                        }
                    ?>-->
                    <h1>Hello, Guvian!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Update</button>
                </div>
            </div>
        </div>
    </div>
    <input type="button" value="logout" id="logout">
    <script src="script/overlay.js"></script>
    </script>
    
    
    
</body>

</html>


