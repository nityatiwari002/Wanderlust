<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="outer">
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
             <div class="content contenta cen">
                <h1 class="mid marg whi">Planning a vacation? There you go!!</h1>
                <p class="desca marg whi">We are here to help you plan your trip in the easiest way.</p>
                <p><button class="topbuts but-browse marg"><a href="browse.php" class="link-browse">Browse content</a></button></p>
            </div> 
        </div>  
        
                        
    </div>
    
    
</body>
</html>