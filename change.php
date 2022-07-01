<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
    <link rel="stylesheet" href="loginStyle11.css">
    <script src="app.js" defer></script>
</head>

<body>
    <div class="chagepass_container login_container">
        <form method="POST" class="form_container">
            <div class="login change_pass">
                <label for="password">Enter your email</label>
                <input type="email" name="email" id="password" required />
                <br>
                <label for="password">Enter your new password</label>
                <input type="text" name="password" id="password" required />

                <input type="submit" name="submit" class="chage_pass_btn btn_btn" onclick="" value="OK"></button>
                
            </div>
        </form>
    </div>
</body>
</html>
<?php 
include("db_conn.php");
if(isset($_POST['submit'])){
    echo $email = $_POST['email'];
    echo $pass = $_POST['password'];
$sql = "update `detail` set email='$email',password='$pass' where email='$email'";
$data = mysqli_query($con,$sql);
if($data){
    echo"<script>alert('Changed')</script>";
}
else{
    echo"Failed";
}
}
?>