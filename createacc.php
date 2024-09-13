<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login  Pet Rescue and Rehome Management System</title>
    <style>
        body {
            font-family:'Segoe UI Semibold';
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }


        .loginbox {
            background-color: #fff;
            padding: 150px;
            border-radius: 8px;
            width: 50%;
            height: 100%;
            text-align: center;
        }

        .loginbox h1 {
            color: #333;
            margin-bottom: 10px;
        }


        .loginbox input{
            width: 300px;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: all 0.1s ease;
            
        }
        input:focus {
         outline:none;
         border-color: #007bff;
         border-width: 2px;
         box-shadow: 0px 0px 8px rgba(0, 123, 255, 0.2);

        }



        .loginbox button{
            background-color: #007bff;
            color: white;
            border: none;
            padding: 15px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 40%;
            transition: background-color 0.3s ease;
        }

        .loginbox button:hover {
            background-color: #0056b3;
        }

        .loginbox a {
            display: block;
            color: #007bff;
            text-decoration: none;
        }

        .loginbox a:hover {
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
   
</head>

<body>
 
    <img src=./images/loginpage.jpg class="img1">
            <div class="loginbox">
               <h1 >Join to PetHouse! </h1>
               <div class="tex">Please enter the details below <br><br></div>
                  <form action="" method="POST">
                    <input type="text" name="username" placeholder="Username"  required><br>
                    <input type="email" name="email"  placeholder="E-mail" required><br>
                    <input type="text" name="number"  placeholder="Phone Number" required><br>
                    <input type="date" name="dob"  placeholder="Date of Birth" required><br>
                    <input type="text" name="gender"  placeholder="Gender" required><br>
                    <input type="password" name="password" placeholder="Password"  required><br>
                    <input type="password" name="password2" placeholder="Confirm password"  required><br>


                    <button type="submit" name="create" >Create</button>
                </form>
               
            </div>
        </body>

            <?php
            if(isset($_POST['create'])){
                if($_POST['password']!=$_POST['password2']){echo "<script>alert('Password not match') </script>";}

            $sql = "INSERT INTO customer () 
        VALUES (". $_POST['id'] .")";
        
        
            $result = mysqli_query($connection,$sql);
            if($result)echo"<script> alert('Registered Sucessfully') </script>";
            else echo"failed";

            }       

    
    
?>        

</html>