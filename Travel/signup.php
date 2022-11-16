<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust-Sign Up</title>
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
                    <button class="topbuts">
                        <a href="login.php">Login</a>
                    </button>
                    <button class="topbuts">
                        <a href="signup.php">Sign up</a>
                    </button>
                </div>
            </div>
            <div class="content">
                <div class="page">
                    <div class="login-head">
                        <p class="head2">
                            Not registered yet? 
                        </p>
                        <h3 class="head1">
                            Register yourself
                        </h3>
                        <p class="head3">Already have an account? <a href="login.php" class="links">click here</a></p>
                        
                    </div>

                    <div class="login-body">
                        <div class="login-l">
                            <img src="./assets/login.jpg" alt="login" class="login-img">
                        </div>
                        <div class="login-r">
                            <form action="signup_db.php" method="post">
                                <div class="form-div">
                                    <div class="label-box"><label for="name" class="labels">Name</label></div>
                                    <div class="form-box"><input type="text" name="name" id="name" class="inp-box" placeholder="NAME here"></div>
                                </div>
                                <div class="form-div">
                                    <div class="label-box"><label for="uname" class="labels">Username</label></div>
                                    <div class="form-box"><input type="text" name="uname" id="uname" class="inp-box" placeholder="Username"></div>
                                </div>
                                <div class="form-div">
                                    <div class="label-box"><label for="pw" class="labels">Password</label></div>
                                    <div class="form-box"><input type="password" name="pw" id="pw" class="inp-box" placeholder="Password"></div>
                                </div>
                                <div class="form-div">
                                    <div class="label-box"><label for="email" class="labels">Email id</label></div>
                                    <div class="form-box"><input type="email" name="email" id="email" class="inp-box" placeholder="Email id"></div>
                                </div>
                                <div class="form-div">
                                    <div class="label-box"><label for="phn" class="labels">Phone no.</label></div>
                                    <div class="form-box"><input type="tel" name="phn" id="phn" class="inp-box" placeholder="Phone no."></div>
                                </div>
                                <div class="form-div">
                                    <div class="label-box"><label for="addr" class="labels">Address</label></div>
                                    <div  class="form-box"><textarea name="addr" id="addr" class="inp-box" form="signup_db.php" placeholder="Enter yout address here"></textarea></div>
                                </div>
                                <div class="form-div">
                                    <div><button class="but-log"><input type="submit" value="Sign up" class="login-but"></button></div>
                                </div>
                            </form>
                            
                            
                        </div>
                    </div>
                </div>   
            </div> 
        </div>
        

    
</body>
</html>