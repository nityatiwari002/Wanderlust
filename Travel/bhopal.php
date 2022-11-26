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
                                    Explore the most beautiful places to see! - Bhopal
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
                                Places you must see
                                </div>
                                
                            </div>
                            <div class="subtile">
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/dbmall.jpeg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            DB Mall
                                        </div>
                                        <div class="subtile-desc">
                                        The DB City Mall is a shopping complex located in the city of Bhopal, Madhya Pradesh, India. It is situated
            near Maharana Pratap Nagar.
            It is one of the largest shopping centers in central India.
            It is the first shopping mall in Bhopal & city has witnessed its opening in Aug, 2010.
            An outstanding place to shop all needs of fashion & lifestyle,
            accessories for all age groups, varieties of cuisines, multiplex, game zones, pubs & bars, fast
            food restaurant, quick service restaurants, book store, kids stores, gadgets and much more..

                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/sanchi.jpeg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Sanchi Stupa
                                        </div>
                                        <div class="subtile-desc">
                                        Sanchi is a Buddhist complex, famous for its Great Stupa, on a hilltop at Sanchi Town in Raisen District.
            The "Great Stupa" at Sanchi is the oldest structure and was originally commissioned by the emperor Ashoka
            the Great of the Maurya Empire in the 3rd century BCE.
            It is the location of several Buddhist monuments dating from the 3rd century BC to the 12th CE and is one of
            the important places of Buddhist pilgrimage.
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
                                        <img src="./assets/van.jpeg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Van Vihar
                                        </div>
                                        <div class="subtile-desc">
                                        Set along Upper Lake, Van Vihar National Park is home to grassy meadows, wetlands, and bamboo
            plants, along with tigers and spotted deer. The best time of the year to visit the Van Vihar National Park
            is between the months of July and September.It is an amazing world of winged creatures, free
            ranging ungulates and captive carnivores in the midst of greenery and a must to go place. The park and zoo
            is one of the most revered National Park and Zoo of Central India and is a shining beacon in the field of
            conservation.
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="subtile-2">
                                    <div class="subtile-img">
                                        <img src="./assets/upperlake.jpeg" alt="tile2-1" class="subtile-icon">
                                    </div>
                                    <div class="subtile-cont">
                                        <div class="subtile-head">
                                            Upper Lake
                                        </div>
                                        <div class="subtile-desc">
                                        One of the most famous places in Bhopal, the Upper Lake, locally referred to as 'Bhojtaal' or 'Bada Talab',
            is the oldest man-made lake in India. Dating back to the 11th century, the lake is believed to have been
            built by Raja Bhoj.The lake is overlooked by a grand royal garden called Kamla Park, which is
            another tourist magnet, tempting tourists into its serene folds every year. The ambience and setting of the
            two places are too remarkable to be ignored, and warrants a top spot in your Bhopal tour itinerary, without
            any doubt
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