<?php
    session_start() ;
    include 'Teacher-SignupCSS.php';
    include 'Teacher-SignupJS.php' ;
?>
<html>
<head>
    <title>Teacher Sign up Form</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">
    <link rel="stylesheet" href="Classroom.css">
    <link rel="stylesheet" href="Teacher-Signup.css">
    
    
    <script>
            function formValidation()
            {
                
                var name = document.forms["regForm"]["Name"];
                var email = document.forms["regForm"]["Email"];
                var password = document.forms["regForm"]["Password"];
                var confpass = document.forms["regForm"]["ConfPassword"];
                if(name.value == "" ){
                       window.alert("Please Enter Your Name...");
                        name.focus();
                    
                        return false;
                }
                
                if(email.value == ""){
                       window.alert("Please Enter Your Email...");
                        email.focus();
                        return false;
                }
                
                if(confpass.value == ""){
                       window.alert("Please Confirm Your Password...");
                        confpass.focus();
                        return false;
                }
                
                if(email.value.indexOf("@", 0) < 0){
                    window.alert("Please enter a valid e-mail address.");
                    email.focus();    
                    return false;
                }
                
                if(email.value.indexOf(".", 0) < 0){
                    window.alert("Please enter a valid e-mail address.");
                    email.focus();
                    return false;
                }
                
                if (password.value == "")                        
                { 
                    window.alert("Please enter your password"); 
                    password.focus(); 
                    return flase; 
                } 
                if(confpass.value == ""){
                    window.alert("Please Confirm Password");
                    return false;
                }
                
                if(confpass.value != password.value){
                    window.alert("Password Confirmation is wrong");
                    return false;
                }
            }
        </script>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid" style="background-color: green">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="font-family: 'Gamja Flower', cursive; font-size: 40px;">Classroom</a>
            </div>
            <ul class="nav navbar-nav">
                <!--<li class="active"><a href="#">Home</a></li>-->
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Student Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Teacher Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    <h1 class="head-title">Welcome! Please Fill-in Your Account Info</h1>
    
    <form action="Teacher-SignupPHP.php" name = "regForm" onsubmit="return formValidation()" method="POST" >
        <div class="form-group">
            <label><b>Username</b></label>
            <input type="text" class="form-control" name="Name" id="Name">
        </div>
        
        <div class="form-group">
            <label ><b>Email</b></label>
            <input type="email" class="form-control" name="Email" id="Email">
            <small id="emailNote" class="form-text text-muted">An email will be sent to you in order to confirm your email address.</small>
        </div>

        <div class="form-group ">
            <label for="definition "><b>Password</b></label>
            <input type="password" class="form-control " name = "Password" id="Password">
        </div>

        <div class="form-group">
            <label for="url"><b>Confirm Password</b></label>
            <input type="password" class="form-control" name = "ConfPassword" id="ConfPassword">
            

        </div>

        <button onclick=" " type="submit" class="btn btn-primary" >Submit and Sign-up</button>
        
    </form>
    <?php
    echo $_SESSION['teacherName'] ;
    ?>
    
    
</body>
    
</html>