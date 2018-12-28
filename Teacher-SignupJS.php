<html>
    <head>
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
</html>