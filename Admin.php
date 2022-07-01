<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="Admin13.css">
    <script src="app.js" defer></script>
</head>

<body style="background-color: aqua;">
    <div class="user_container" id="user_main_container">
        <nav class="navbar">
            <div class="navbar_nav" style="margin-right: 105px;">
                <div class="list_option">
                    <ul class="lists">
                        <a href="Admin.php"><img  class="logo_img" src="logo.jpg" alt="logo_image" style="width:50px;height:50px;margin-bottom: -10px;margin-right:55px;"></a>
                        <li><a href="Admin.php">Home</a></li>
                        <li><a href="addemployee.php">Add detail</a></li>
                        <li><a href="viewdetail.php">View details</a></li>
                        <li><a href="viewbill.php">View Bill</a></li>
                        <li><a href="viewpayment.php">Payment details</a></li>
                    </ul>
                    <a href="Login.php"><input type="button" name="Log in" id="logButton" value="Logout" style="width:100px;height:40px;margin-top:-4px;"></a>
                    
                </div>
            </div>
        </nav>
        <section class="main">
            <div class="box">
                <h3 class="para">Add detail</h3>
                <a href="addemployee.php"><button class="btn" id="btn">Add</button></a>

            </div>
            <div class="box1">
                <h3 class="para">View detail</h3>
                <a href="viewdetail.php"><button class="btn" id="btn">View</button></a>
            </div>
            <div class="box" style="background-color: rgb(0, 66, 0);">
                <h3 class="para">View Bill</h3>
                <a href="viewbill.php"><button class="btn" id="btn">View</button></a>
            </div>
            <div class="box1" style="background-color: rgb(91, 11, 11);">
                <h3 class="para">Payment detail</h3>
                <a href="viewpayment.php"><button class="btn" id="btn">View</button></a>
            </div>
            

        </section>

    </div>
</body>

</html>