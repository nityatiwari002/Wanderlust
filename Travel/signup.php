<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust-Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        <div class="outer outerb">
            <div class ="topnav">
                <div class="topdiva">
                    <h3 class="tophead">Wanderlust</h3>
                </div>
                <div class="topdivb">
                    <button class="topbuts">
                        <a href="index.html">Home</a>
                    </button>
                    <button class="topbuts">
                        <a href="login.html">Login</a>
                    </button>
                    <button class="topbuts">
                        <a href="signup.html">Sign up</a>
                    </button>
                </div>
            </div>

            <?php
            session_start();
            include('conn.php'); 
            $name=$_POST['name'];
            $addr=$_POST['Address'];
            $city=$_POST['City'];
            $userid=$_POST['Uname'];
            $pass=$_POST['pword'];
            $sql="INSERT INTO login_table (username, pass) VALUES('$userid','$pass')";
            $sql1="INSERT INTO customer(customer_name,customer_street,customer_city) VALUES('$name','$addr','$city')";
            $results = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            $results = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
            ?>
                    <div class="content">
                <div class="page">
                    <h3 class="head">Already have an accout?</h3>
                    <h1 class="head2">LOGIN HERE</h1>
                    <p class="desc"> If you do not have an account, 
                        <a href="signup.html" class="links">CLICK HERE</a>
                    </p>
                    <div class="login-here">
                        <div class="login-img">
                            <img src="login.png" alt="login" class="img">
                        </div>
                        <div class="login-form">
                            <p class="desc">

                            </p>
                        </div>

                    </div>
                    
                </div>
            </div> 
        </div>
        

    
</body>
</html>