<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust-Browse</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="browse-body">  
    <div class="main">
        <div class="opq-bg">
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
                                <a href="booking.php">My Bookings</a>
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
        </div>
        <div class="browse-page">
            <div class="browse-l-wrapper">
                <div class="browse-l">
                    <div class="easy-ac-head cen">
                        EASY ACCESS
                    </div>
                    <div class="easy-ac-body">
                        <div class="tile">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                    
                        <div class="tile">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                        <div class="tile">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                        <div class="tile">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                        <div class="tile">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="browse-r-wrapper">
                <div class="browse-r">
                    <div class="browse-r-body">
                        <div class="tile2">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                        <div class="tile2">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                        <div class="tile2">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                        <div class="tile2">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                        <div class="tile2">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                        <div class="tile2">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                        <div class="tile2">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                        <div class="tile2">
                            <div class="tile-img">
                                <img src="tile-hotel.jpeg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                    
            </div>
        </div>
        
    </div>

            

   

    
</body>
</html>