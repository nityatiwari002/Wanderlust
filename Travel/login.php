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
                        <a href="index.php">Home</a>
                    </button>
                    <?php 
                       session_start();
                       include ('conf.php');
                        

                        if(isset($_SESSION['is_logged_in'])){
                            echo '<button class="topbuts">
                                <a href="logout.php">Logout</a>
                            </button>
                            <button class="topbuts">
                                <a href="mybookings.php">My Bookings</a>
                            </button>';
                        } else{
                            echo "<button class='topbuts'>
                                    <a href='login.php'>Login</a>
                                </button>
                                <button class='topbuts'>
                                    <a href='signup.php'>Sign up</a>
                                </button>";
                        }
                    ?>
                    
                </div>
            </div>
            <div class="content">
                <div class="page">
                    <div class="login-head">
                        <p class="head2">
                            Already have an account?
                        </p>
                        
                        <h3 class="head1">
                            Login 
                        </h3>
                        <p class="head3">Don't have an account? <a href="signup.php" class="links">click here</a></p>
                        <?php
                            if(isset($_SESSION['error'])){
                                echo '<p class="head3 error">'.$_SESSION['error'].'</p>';
                                unset($_SESSION['error']);
                            }
                        ?>
                    </div>

                    <div class="login-body">
                        <?php
                        
                        if(isset($_SESSION['is_logged_in'])){
                            echo '<p class="head3">You are already logged in.</p>';
                        }
                        else{
                    echo
                        '<div class="login-l">
                            <img src="./assets/login.jpg" alt="login" class="login-img">
                        </div>
                        <div class="login-r log-r">
                            <form action="login_check.php" method="post">
                                <div class="form-div">
                                    <div class="label-box"><label for="uname" class="labels">Username</label></div>
                                    <div class="form-box"><input type="text" name="uname" id="uname" class="inp-box" placeholder="Username"></div>
                                </div>
                                <div class="form-div">
                                    <div class="label-box"><label for="pw" class="labels">Password</label></div>
                                    <div class="form-box"><input type="password" name="pw" id="pw" class="inp-box" placeholder="Password"></div>
                                </div>
                                <div class="form-div">
                                    <div><button class="but-log"><input type="submit" value="Login" class="login-but"></button></div>
                                </div>
                            </form>
                        </div>';
                        }
                        ?>
                    </div>
                </div>   
            </div> 
        </div>
        

    
</body>
</html>