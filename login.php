<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login  Pet Rescue and Rehome Management System</title>
    <style>
        body {
            font-family:'Segoe UI Semibold';
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;

        }


        .loginbox {
        
            background-color: #fff;
            padding: 0px;
            padding-top: 100px;
            border-radius: 8px;
            width: 50%;
            height: 100%;
            text-align: center;
        }

        .loginbox h1 {
            color: #333;
            margin-bottom: 10px;
        }


        .loginbox input[type="email"],
        .loginbox input[type="password"] {
            width: 100%;
            padding: 0px;
            margin: 0;
            border:none;
            border-radius: 4px;
            font-size: 16px;
            border-style: none;
            background-color: #f9f9f9;         


        }
        input:focus {
         outline: none;
        }



        #f1,#f2{  
            background-color: #f9f9f9;         
            font-size: 12px;
            padding:none;
            text-align: left;
            padding-left: 1px;
            color: grey;
            border-color: grey;
            border-width: 1px;
            width: 40%;
            height: 50%;
            margin: auto;
            border-radius: 4px;
            transition: all .1s  ;

        }
        .loginbox input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            width: 40%;
        }

        .loginbox input[type="submit"]:hover {
            background-color: #218838;
        }

        .loginbox a {
            display: block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .loginbox a:hover {
            text-decoration: underline;
        }

        .signup {
            margin-top: 20px;
            font-size: 14px;
        }

        .signup a {
            color: #007bff;
        }

        .signup a:hover {
            text-decoration: underline;
        }

        .img1 {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

            width: 50%;
            height:100%;
        }
        .img2{
            margin-top: 0px;
            width: 20%;

        }
    </style>
    <script>
        function embd(){
            document.getElementById("f1").style.color="#007bff";
            document.getElementById("f1").style.borderColor="#007bff";  
            document.getElementById("f1").style.borderWidth="2px"; 
            document.getElementById("f1").style.boxShadow="0px 0px 8px rgba(0, 123, 255, .5)";  
 

          }
          function pwbd(){
            document.getElementById("f2").style.color="#007bff";
            document.getElementById("f2").style.borderColor="#007bff";  
            document.getElementById("f2").style.borderWidth="2px";  
            document.getElementById("f2").style.boxShadow="0px 0px 8px rgba(0, 123, 255, .5)";  

          }
          function embdo(){
            document.getElementById("f1").style.color="grey";
            document.getElementById("f1").style.borderColor="grey";  
            document.getElementById("f1").style.borderWidth="1px";  
            document.getElementById("f1").style.boxShadow="none";  

          }
          function pwbdo(){
            document.getElementById("f2").style.color="grey";
            document.getElementById("f2").style.borderColor="grey"; 
            document.getElementById("f2").style.borderWidth="1px";  
            document.getElementById("f2").style.boxShadow="none";  

          }
    </script>
</head>

<body>
 
    <img src=./images/loginpage.jpg class="img1">

            <div class="loginbox">
                <img src="./images/logo.jpg" class="img2">
               <h1 >Welcome to PetHouse! </h1><div class="tex">Please enter the Login details below <br><br></div>
                                <form action="/login" method="POST">
                    <fieldset id="f1">
                    <legend>E-mail</legend>
                    <input type="email" name="email"  onfocus="embd()" onfocusout="embdo()" required>
                </fieldset><br>
                    <fieldset id="f2">
                    <legend>password</legend>
                    <input type="password" name="password" onfocus="pwbd()" onfocusout="pwbdo()" required>
                    </fieldset><br>
                    <input type="submit" value="Login">
                </form>
                <a href="#">Forgot Password?</a>
                <div class="signup">
                    Don't have an account? <a href="creatacc.php">Create Account</a>
                </div>
            </div>



</body>

</html>