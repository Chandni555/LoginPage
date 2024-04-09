<?php   
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login with session</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    h3 {
        margin: 25px 40px;
        font-size: 30px;

    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: #ff80bf;
    }

    form {
        background: #fff;
        border-radius: 10px;
    }

    .box1 {
        margin: 25px 40px;
    }

    .box1 input {
        font-size: 17px;
        font-weight: 600;
        border: none;
        outline: none;
        background: none;

    }

    .box1 .underline {
        height: 2px;
        width: 350px;
        background-color: black;

    }

    .box1 i {
        color: grey;
        padding-right: 10px;
    }

    .box2 i {
        color: grey;
        padding-right: 10px;
    }

    .box2 {
        margin: 25px 40px;
    }

    .box2 input {
        font-size: 17px;
        font-weight: 600;
        border: none;
        outline: none;
        background: none;

    }

    .box2 .underline {
        height: 2px;
        width: 350px;
        background-color: black;

    }

    .box3 input {
        height: 40px;
        width: 350px;
        font-size: 20px;
        color: white;
        background-color: #ff80bf;
        border: none;
        outline: none;
    }

    .box3 {
        margin: 35px 40px;
    }

    .box4 {
        text-align: center;
        font-weight: 570;
    }

    .twitter {
        height: 40px;
        width: 350px;
        border: none;
        outline: none;
        background-color: blue;
        opacity: 0.7;
        margin: 20px 40px;
        font-size: 18px;


    }

    .twitter a {
        text-decoration: none;
        color: white;
        line-height: 40px;
    }

    .twitter i {
        padding: 15px;
    }

    .facebook {
        height: 40px;
        width: 350px;
        border: none;
        outline: none;
        background-color: midnightblue;
        opacity: 0.9;
        margin: 40px 40px;
        font-size: 18px;



    }

    .facebook a {
        text-decoration: none;
        color: white;
        line-height: 40px;
    }

    .facebook i {
        padding: 15px;

    }
    </style>
</head>

<body>

    <div class="container">
        <form method="post">
            <h3>Login</h3>
            <div class="box1">
                <i class="bi bi-envelope-fill"></i>
                <input type="email" placeholder="Email" name="user">

                <div class="underline"></div>
            </div>
            <div class="box2">
                <i class="bi bi-lock-fill"></i>
                <input type="password" placeholder="Password" name="pass">
                <div class="underline"></div>
            </div>
            <div class="box3">
                <input type="submit" value="Continue" name="Save">
            </div>
            <div class="box4">or Connect With Social Media</div>
            <div class="twitter">
                <a href="#"><i class="bi bi-twitter"></i>Sign in With Twitter</a>
            </div>
            <div class="facebook">
                <a href="#"><i class="bi bi-facebook"></i>Sign in With Facebook</a>
            </div>
        </form>
    </div>



</body>

</html>
<?php 
if(isset ($_POST["Save"]))  {
    $a = $_POST["user"];
    $b = $_POST["pass"];
    
    if($a =="" || $b ==""){
        echo"<script>alert('Fill the form!')</script>";
    }else if($a=="chandnichandra@123" && $b == "12345"){
        $_SESSION["name"] = $a;
        echo"<script>alert('Login Successful!')</script>";
        
        header("Refresh:0;url=http://localhost/Testing/four.php");

    }
    else{
        echo"<script>alert('email or password is wrong!')</script>";
    }
}
?>