<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <link rel="stylesheet" href="loginStyle11.css" />
  <script src="app.js" defer></script>
</head>

<body>
  <div class="login_container">
    <form method="post" class="form_container">
    <?php
                include 'db_conn.php';
                    if(isset($_POST['login'])) {
                        if(!empty($_POST['Uname']) && !empty($_POST['Pass']) ){
                        $email = $_POST['Uname'];
                        $password = $_POST['Pass'];
                        $select = "select * from detail where email='$email' && password='$password'";
                        $run = mysqli_query($con,$select);
                        $row_user = mysqli_fetch_array($run);
                        $db_email = isset($row_user['email']);
                        $db_password = isset($row_user['password']);
	                      $admin = "admin@gmail.com";
                        $ad_pass ="admin12345";
                        if($password == $db_password && $email == $db_email){
                          header("Location:user.php");  
                        }
	                    elseif($email == $admin && $password == $ad_pass){
                            header("Location:Admin.php"); 
                        }
                        elseif($password !== $db_password){
                            echo "Invalid email or password";
                        }
                        else{
                            echo "Error";
                        }
                    }
                }
                ?>
      <img  class="logo_img" src="logo.jpg" alt="logo_image">

      <div class="login">
        <input type="text" name="Uname" id="username" placeholder="Unername" required />
      </div>
      <div class="login">
        <input type="password" name="Pass" id="password" placeholder="Password" required />
      </div>
      <div class="login_button">
        <input type="submit"  name="login" class="login_btn btn_btn"></button>
        
      </div>
    </form>
    <div class="forget_pass">
      <h3 >Forget Password? <a href="change.php">Change Password</a> </h3>
    </div>
  </div>
</body>

</html>