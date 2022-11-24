<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust-Login</title>
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
            <div class="content">
                <div class="page">
                    <div class="login-head">
                        
                        <h3 class="head1">
                            Choose room type 
                        </h3>
                        
                    </div>

                        <?php
                        
                            if(!isset($_SESSION['is_logged_in'])){
                                $_SESSION['error'] = "You need to login to book a hotel";
                                header('Location: login.php');
                            }
                            
                                
                        ?>
                    
                        <?php
                            $hotel=$_POST['hotel'];
                            $sql="SELECT hotel_id FROM hotel WHERE hotel_name='$hotel'";   
                            $result=mysqli_query($conn,$sql);
                            $row=mysqli_fetch_assoc($result);
                            $hotel_id=$row['hotel_id'];
                            $_SESSION['hotelId']=$hotel_id;
                                     
                        ?>
                        <form action="mybookings.php" method="post">
                                    <?php
                                        $sql1="SELECT * FROM rooms WHERE hotel_id='$hotel_id'";
                                        $result1=mysqli_query($conn,$sql1);
                                    ?>
                                   
                                   <div class="book-form">
                                        <div class="select-box">
                                        <center><select name="room_type" id="room_type" required class="form-select">   
                                            <option value="">--- Select ---</option>  
                                            <?php  
                                                echo 'hello';
                                                while($row1 = mysqli_fetch_array($result1))  
                                                {  
                                                    echo '<option value="'.$row1["room_type"].'">'.$row1["room_type"].'</option>';  
                                                }
                                            ?>

                                        </select></center>
                                        </div>
                                        <div>
                                            <center><input type="submit" name="submit" id="submit" value="move forward" class="book-submit"></center>
                                        </div>
                                </div>
                        </form>

                    </div>
                </div>   
            </div> 
        </div>
        
</body>
</html>