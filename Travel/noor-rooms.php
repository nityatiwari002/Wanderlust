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

                    <?php
                        include('conf.php');
                        $query1 = "SELECT * FROM rooms WHERE hotel_id = '101' and type_id = '01'";
                        $query2 = "SELECT * FROM rooms WHERE hotel_id = '101' and type_id = '02'";
                        $query3 = "SELECT * FROM rooms WHERE hotel_id = '101' and type_id = '03'";
                        $res1 = mysqli_query($conn,$query1);
                        $res2 = mysqli_query($conn,$query2);
                        $res3 = mysqli_query($conn,$query3);

                         $noor1=mysqli_fetch_assoc($res1);
                         $noor2=mysqli_fetch_assoc($res2);
                         $noor3=mysqli_fetch_assoc($res3);
                    ?>
                               
                            <div class="top">
                                <div class="tleft">
                                   <h1><?php 
                                   if(isset($noor1['room_type']))
                                   echo $noor1['room_type'];
                                   ?></h1>
                                  <img src="assets\hotels\club_suite.jpg" alt="the-bastion img">
                               </div>
                               <div class="tright2">
                              <ul>
                                <li>
                                    Rent :  <?php 
                                   if(isset($noor1['rent']))
                                   echo $noor1['rent'] . ' /-';
                                   ?>
                                </li>
                                <li>
                                    <!-- 480 sq.ft -->
                                    Number of rooms : <?php 
                                   if(isset($noor1['no_of_rooms']))
                                   echo $noor1['no_of_rooms'];
                                   ?>
                                </li>
                                <li>
                                    <!-- King Bed -->
                                    Availability : <?php 
                                   if(isset($noor1['availability']))
                                   echo $noor1['availability'];
                                   ?>
                                </li>
                              </ul>
                               </div>

                            </div>
                            <div class="middle">
                                <div class="mleft">
                                    <h1><?php 
                                   if(isset($noor2['room_type']))
                                   echo $noor2['room_type'];
                                   ?></h1>
                                    <div class="mleft2">
                                    <ul>
                                        <li>
                                        Rent :  <?php 
                                   if(isset($noor2['rent']))
                                   echo $noor2['rent'] . ' /-'; ?>
                                        </li>
                                        <li>
                                            <!-- 416 sq.ft -->
                                            Number of rooms : <?php 
                                   if(isset($noor2['no_of_rooms']))
                                   echo $noor2['no_of_rooms'];
                                   ?>
                                        </li>
                                        <li>
                                        Availability : <?php 
                                   if(isset($noor2['availability']))
                                   echo $noor2['availability'];
                                   ?>
                                            <!-- King Bed -->
                                        </li>
                                    </ul>
                                    </div>
                                    
                                    
                                   
                                </div>
                                <div class="mright2">
                                    <img src="assets\hotels\lake_view.jpg" alt="room-img">
                                </div>

                
                            </div>
                            <div class="bottom">
                                <div class="bleft">
                                    <h1><?php 
                                   if(isset($noor3['room_type']))
                                   echo $noor3['room_type'];
                                   ?></h1>
                                    <img src="assets\hotels\standard-room.jpg" alt="reach">
                                </div>
                                <div class="bright2">
                                    <ul>
                                        <li>
                                        Rent :  <?php 
                                   if(isset($noor3['rent']))
                                   echo $noor3['rent'] . ' /-'; ?>
                                        </li>
                                        <li>
                                        Number of rooms : <?php 
                                   if(isset($noor3['no_of_rooms']))
                                   echo $noor3['no_of_rooms'];
                                   ?>
                                        </li>
                                        <li>
                                        Availability : <?php 
                                   if(isset($noor3['availability']))
                                   echo $noor3['availability'];
                                   ?>
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