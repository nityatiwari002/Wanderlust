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
                                Places you must see - Mumbai
                                </div>
                                
                            </div>
                            <div class="subtile">
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/elephanta.jpeg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Elephanta Caves
                                        </div>
                                        <div class="subtile-desc">
                                        The Elephanta Caves are a collection of cave temples predominantly dedicated to the Hindu god Shiva.
                                         They are on Elephanta Island, or Gharapuri, in Mumbai Harbour, 10 kilometres east of Mumbai in the Indian state of Mahārāshtra.
                                         The 'City of Caves', on an island in the Sea of Oman close to Bombay, contains a collection of rock art linked to the cult of Shiva.
                                          Here, Indian art has found one of its most perfect expressions, particularly the huge high reliefs in the main cave.

                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/gateway.jpeg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Gateway of India
                                        </div>
                                        <div class="subtile-desc">
                                        The Gateway of India is an arch-monument built in the early 20th century in the city of Bombay (Mumbai), India.
                                         It was erected to commemorate the landing of King-Emperor George V, the first British monarch to visit India, in December 1911 at Strand Road near Wellington Fountain.
                                         The foundation stone was laid in March 1913 for a monument built in the Indo-Islamic style, inspiring by elements of 16th-century Gujarati architecture. 
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
                                        <img src="./assets/wax-museum.jpeg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Red Carpet Wax Museum
                                        </div>
                                        <div class="subtile-desc">
                                        As the name suggests, the Red Carpet Wax Museum is one of those tourist places in Mumbai that one simply cannot miss because the museum showcases lifelike statues of celebrities and prominent people from all walks of life. The statues are made to be completely alike the person they have been constructed after, giving a very authentic feel to the statue.
                                        Each statue is surrounded by the necessary ambience to give the statue and its theme a complete look and feel. The wax museum is one of a kind monument in the city of Mumbai, so make sure you drop by and catch a glimpse of it.
                                        Location: 1st Floor, R City Mall, Lal Bahadur Shastri Marg,
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/siddhivinayak.jpeg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Siddhivinayak Temple
                                        </div>
                                        <div class="subtile-desc">
                                        The Shree Siddhivinayak Ganapati Mandir is a Hindu temple dedicated to Lord Shri Ganesh. It is located in Prabhadevi, Mumbai, Maharashtra, India. It was originally built by Laxman Vithu and Deubai Patil on 19 November 1801.
                                         It is one of the richest temples in India.
                                         There are two Gates from which devotees can enter in Temple premises. The Siddhi Gate allows you a free Darshan.
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