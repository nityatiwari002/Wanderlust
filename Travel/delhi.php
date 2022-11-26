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
                                <img src="./assets/tile-cities.png" alt="tile-cities" class="tile-icon">
                            </div>
                            <div class="tile-cont">
                                <div class="tile-head"> 
                                     Cities
                                </div>
                                <div class="tile-desc">
                                    Plan your trip to any city of your choice!
                                </div>
                                <div class="tile-link">
                                    <button class="but-tile">
                                        <a href="places.php" class="links">Explore</a>
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
                                Places you must see - Delhi
                                </div>
                                
                            </div>
                            <div class="subtile">
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/chandni.jpeg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Chandni Chowk
                                        </div>
                                        <div class="subtile-desc">
                                            In the heart of Old Delhi, Chandni Chowk is a busy shopping area with markets full of
                                            spices, dried fruit, silver jewelry and vivid saris, while the narrow side streets are crowded with tiny
                                            shops selling essential oils, stationery and traditional Indian sweets. Nearby, the vast Mughal-era
                                            Red Fort now houses a museum complex, and the 17th-century Jama Masjid is a huge red-sandstone mosque with
                                            towering minarets. The place is famous for clothes, electronic items, Indian spices and street
                                            food. Do be aware that most shops in Chandni Chowk are closed on Sundays.

                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/jantar.jpeg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Jantar Mantar
                                        </div>
                                        <div class="subtile-desc">
                                            Jantar Mantar is located in the modern city of New Delhi. “Jantar Mantar” literally means
                                            “instruments for measuring the harmony of the heavens”. It consists of 13 architectural astronomy
                                            instruments. The site is one of five built by Maharaja Jai Singh II of Jaipur, from 1723 onwards, revising
                                            the calendar and astronomical tables. Jantar Mantar is located in Connaught place. “Jantar Mantar”
                                            literally means “instruments for measuring the harmony of the heavens”. Its magical construction to see. Kids will love watching & experiencing moving around on step. The place is not very well maintained thus not too attractive to see.
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
                                
                            </div>
                            <div class="subtile">
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/lotus.jpeg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Lotus Temple
                                        </div>
                                        <div class="subtile-desc">
                                        The Lotus Temple, located in Delhi, India, is a Baháʼí House of Worship that was dedicated in December 1986. Notable for its flowerlike shape, it has become a prominent attraction in the city.
                                         Like all other Bahá’í Houses of Worship, the Lotus Temple is open to all, regardless of religion or any other qualification.
                                         The temple's shape has symbolic and inter-religious significance because the lotus is often associated with the Hindu goddess Lakshmi. 
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/qutub.jpeg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Qutub Minar
                                        </div>
                                        <div class="subtile-desc">
                                        The Qutb Minar, also spelled Qutub Minar and Qutab Minar, is a minaret and "victory tower" that forms part of the Qutb complex, which lies at the site of Delhi’s oldest fortified city, Lal Kot, founded by the Tomar Rajputs.
                                         It is a UNESCO World Heritage Site in the Mehrauli area of South Delhi, India. 
                                         The tower has five distinct storeys. 
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