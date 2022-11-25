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
                                        <a href="cities.php" class="links">Explore</a>
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
                                    Bookings
                                </div>
                                <div class="tile-footer">
                                    <center><button class="but-tile">
                                        <a href="choose_city.php" class="links">Book more rooms</a>
                                    </button></center>
                                </div>
                            </div>
                            <?php
                                $sql1="SELECT * FROM booking WHERE user_id = '".$_SESSION['userid']."'";
                                $result1 = mysqli_query($conn, $sql1);
                                while($row=mysqli_fetch_assoc($result1)){
                                    $sql2="SELECT * FROM hotel WHERE hotel_id = '".$row['hotel_id']."'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $row2=mysqli_fetch_assoc($result2);
                                    $sql3="SELECT * FROM rooms where type_id = '".$row['type_id']."'";
                                    $result3 = mysqli_query($conn, $sql3);
                                    $row3=mysqli_fetch_assoc($result3);
                                    echo '<div class="book-tile">
                                    
                                    <div class="subtile-cont">
                                    <div class="subtile-head">'.$row2['hotel_name'].'</div>
                                        <div class="bookshow">
                                            <div class="labels"> Room type: </div>
                                            <div class="bookings-tile">'.$row3['room_type'].'</div>
                                        </div>
                                        <div class="bookshow">
                                            <div class="labels"> Price per night: </div>
                                            <div class="bookings-tile">'.$row3['rent'].'</div>
                                        </div>
                                        <div class="bookshow">
                                            <div class="labels"> Checkin: </div>
                                            <div class="bookings-tile">'.$row['checkin'].'</div>
                                        </div>
                                        <div class="bookshow">
                                            <div class="labels"> Checkout: </div>
                                            <div class="bookings-tile">'.$row['checkout'].'</div>
                                        </div>
                                        <div class="bookshow">
                                            <div class="labels"> Number of rooms: </div>
                                            <div class="bookings-tile">'.$row['no_of_rooms'].'</div>
                                        </div>
                                        <div class="bookshow">
                                            <div class="labels"> Booking id: </div>
                                            <div class="bookings-tile">'.$row['book_id'].'</div>
                                        </div>
                                    </div>
                                </div>';
                                }
                                    
                            ?>
                        </div>
                    </div>
                </div>        
            </div>
        </div>   
    </div>   
</body>
</html>