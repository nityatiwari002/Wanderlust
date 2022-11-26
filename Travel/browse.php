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
                        <div class="top-tile tile2">
                            <div class="tile-top-head">
                                <div class="tile2-head">
                                    Cities you can visit
                                </div>
                                <div class="tile-footer">
                                    <center><button class="but-tile">
                                        <a href="places.php" class="links">Explore more cities here</a>
                                    </button></center>
                                </div>
                            </div>
                            <div class="subtile">
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/mumbai-one.jpg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Mumbai
                                        </div>
                                        <div class="subtile-desc">
                                        Mumbai, the city where dreams are made and fulfilled! From jam-packed railway 
                                        platforms to the famous Dabbawalas, multi-millionaires to suburban slums, the 
                                        dazzling Bollywood to the quintessential vada pav, the uniqueness of Mumbai is 
                                        beyond words. If you are planning a trip to Mumbai, make sure you visit the right 
                                        places to imbibe the dynamic effervescence of this city. 
                                        </div>
                                        <div class="subtile-link">
                                            <button class="but-subtile">
                                                <a href="mumbai.php" class="links">Explore</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/delhi-one.jpg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Delhi
                                        </div>
                                        <div class="subtile-desc">
                                        A unique blend of history and modernity, traditions and culture, commerce and 
                                        fashion and beyond all of these, a place where all religions prevail with equality. 
                                        Delhi is unique in its culture and lifestyle. While in areas like Chandni Chowk 
                                        and old Delhi, you will find the traditional ways of living, places like Vasant 
                                        Kunj and South Extension will give you a sense of modern-day Delhi.
                                        </div>
                                        <div class="subtile-link">
                                            <button class="but-subtile">
                                                <a href="delhi.php" class="links">Explore</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="tile2">
                        <div class="tile-top-head">
                                <div class="tile2-head">
                                    Places you must see
                                </div>
                                <div class="tile-footer">
                                    <center><button class="but-tile">
                                        <a href="places.php" class="links">Explore more places here</a>
                                    </button></center>
                                </div>
                            </div>
                            <div class="subtile">
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/bhopal-one.jpg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Sanchi Stupa
                                        </div>
                                        <div class="subtile-desc">
                                        The Great Stupa at Sanchi has been the focal point of the Buddhist faith in the region 
                                        since it was built by Emperor Ashoka in the 3rd century BC. The grand structure still 
                                        inspires awe today and sits at the top of a hill, surrounded by the remains of smaller 
                                        stupas, monasteries, and temples that were built as the religious community grew in the 
                                        centuries after the site was founded.
                                        </div>
                                        <div class="subtile-link">
                                            <button class="but-subtile">
                                                <a href="bhopal.php" class="links">View More</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/delhi-two.jpg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Lotus Temple
                                        </div>
                                        <div class="subtile-desc">
                                        A unique blend of history and modernity, traditions and culture, commerce and fashion
                                        and beyond all of these, a place where all religions prevail with equality. Delhi is 
                                        unique in its culture and lifestyle. While in areas like Chandni Chowk and old Delhi,
                                        you will find the traditional ways of living, places like Vasant Kunj and South Extension
                                        will give you a sense of modern-day Delhi. With more than 10000 visitors daily it is undoubtedly
                                        one of the most visited tourist attractions in India.
                                        </div>
                                        <div class="subtile-link">
                                            <button class="but-subtile">
                                                <a href="delhi.php" class="links">View More</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                               

                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
        
    </div>

            

   

    
</body>
</html>