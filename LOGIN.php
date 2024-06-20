<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    body{
        background-color: #405654;
    }
</style>
<body>
    <div class="re">
        <div class="container">
            <div class="other-side">
                <img src="pics/Capture.PNG" alt="" style="width:650px;height:650px;border-radius:50px">
            </div>

            <div class="form">
                <form method="post">
                    <p style="font-size:50px;color:#826C6C;font-weight: bold;">LOGIN</p>
                    <input type="email" name="email" class="acc" placeholder="Userrname"> <br>
                    <input type="password" name="pass" placeholder="Password"> <br>
                    <p><a href="" style="text-decoration:none;color:#826C6C">Forgot Password?</a></p>
                    <button type="submit" name="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>



<?php
$conn = mysqli_connect("localhost", "root", "" , "DB");
if(isset($_POST["submit"])){
    if(isset($_POST["email"]) && isset($_POST["pass"])){
        $Email = $_POST["email"];
        $Password = $_POST["pass"];

        $confirm = "SELECT email FROM accounts WHERE email='$Email' && Em_AD = 'Admin'";

        $query = mysqli_query($conn,$confirm);

        if(mysqli_num_rows($query) > 0){

            header ("Location: application.php");
        }else{
            //header("Location: Dashboard.php");
        }
    }
}

?>