<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust-Browse</title>
    <link rel="stylesheet" href="style2.css">
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
                                <img src="./assets/tile-hotel.jpg" alt="tile-hotel" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                <div class="tile-head"> 
                                     Hotels
                                </div>
                                <div class="tile-desc">
                                    Explore the most luxurious hotels at the best prices with us!
                                </div>
                                <div class="tile-link">
                                    <button class="but-tile">
                                        <a href="hotels.php" class="links">Explore</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tile">
                            <div class="tile-img">
                                <img src="./assets/tile-book.png" alt="tile-book" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                <div class="tile-head"> 
                                     Book hotel
                                </div>
                                <div class="tile-desc">
                                    Make hotel bookings at affordable prices!
                                </div>
                                <div class="tile-link">
                                    <button class="but-tile">
                                        <a href="choose_city.php" class="links">Explore</a>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="tile">
                            <div class="tile-img">
                                <img src="./assets/tile-places.png" alt="tile-places" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                <div class="tile-head"> 
                                     Places
                                </div>
                                <div class="tile-desc">
                                    Explore the most beautiful places to see!
                                </div>
                                <div class="tile-link">
                                    <button class="but-tile">
                                        <a href="places.php" class="links">Explore</a>
                                    </button>
                                </div>
                            </div>

                        </div>

                        
                        <?php
                            if(isset($_SESSION['is_logged_in'])){
                                echo '<div class="tile">
                                    <div class="tile-img">
                                        <img src="./assets/tile-booking.jpg" alt="tile-booking" class="tile-icon">
                                    </div>
                                    <div class="tile-cont">
                                        <div class="tile-head"> 
                                            My Bookings
                                        </div>
                                        <div class="tile-desc">
                                            View your bookings and manage them!
                                        </div>
                                        <div class="tile-link">
                                            <button class="but-tile">
                                                <a href="mybookings.php" class="links">Explore</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>';
                            }
                        ?>

                    </div>
                </div>
            </div>
            <div class="browse-r-wrapper">
                <div class="browse-r">
                    <div class="browse-r-body">
                               
                            <div class="top">
                                <div class="tleft">
                                   <h1>Sun-N-Sand</h1>
                                  <img src="assets\hotels\sun-and-sand.jpg" alt="the-bastion img">
                               </div>
                               <div class="tright">
                               Located on the scenic Juhu Beach, this lavish property
                                features well-appointed rooms, multiple eateries, an 
                                exclusive spa and a wide range of amenities.
                               </div>

                            </div>
                            <div class="middle">
                                <div class="mleft">
                                    <h1>The Rooms</h1>
                                    <div class = "text">
                                    Click below to check for the different rooms available!
                                    <div class="but">
                                        <button class="click">
                                        <a href="sun-rooms.php">Click here</a>
                                        </button>
                                    </div>
                                    </div>
                                    
                                   
                                </div>
                                <div class="mright">
                                    <img src="assets\hotels\grande-room.webp" alt="room-img">
                                </div>

                
                            </div>
                            <div class="bottom">
                                <div class="bleft">
                                    <h1>How to Reach</h1>
                                    <img src="assets\destination\dest1.jpg" alt="reach">
                                </div>
                                <div class="bright">
                                    <ul>
                                        <li>
                                        Chakala Metro Station is at a distance of 5.6 km from the hotel.
                                        </li>
                                        <li>
                                        Mumbai Andheri Station is at a distance of 3.6 km from the hotel.
                                        </li>
                                        <li>
                                        Chhatrapati Shivaji Maharaj International Airport is 7.6 km away from the property.
                                        </li>
                                    </ul>
                                
                                </div>
                                
                               
                            </div>



                    </div>
                </div>
                    
            </div>
        </div>
        
    </div>

            

   

    
</body>
</html>