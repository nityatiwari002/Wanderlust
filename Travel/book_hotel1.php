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
                            Book a Hotel 
                        </h3>
                        
                    </div>

                        <?php
                        
                            if(!isset($_SESSION['is_logged_in'])){
                                $_SESSION['error'] = "You need to login to book a hotel";
                                header('Location: login.php');
                            }
                            
                                
                        ?>
                    <div class="login-body">
                        <?php
                            $hotel=$_POST['hotel'];
                            echo $hotel;
                            $sql="SELECT hotel_id FROM hotel WHERE hotel_name='$hotel'";
                           
                            $result=mysqli_query($conn,$sql);
                            echp 
                            $row=mysqli_fetch_assoc($result);
                            $hotel_id=$row['hotel_id'];
                            $sql1="SELECT room_type from rooms WHERE hotel_id='$hotel_id'";
                            $result1=mysqli_query($conn,$sql1);
                            
                        
                        ?>
                        <form action="book_hotel2.php" method="post">
                                <div class="label-box"><label for="romm_type" class="labels">Choose room type: </label></div>
                                <div class="form-box">          
                                    <select name="room_type" id="room_type" required>   
                                        <option value="">--- Select ---</option>  
                                        <?php
                                        $list = mysqli_query($conn, "SELECT DISTINCT hotel_name FROM hotel");
                                        while($row1 = mysqli_fetch_assoc($result1)){
                                            echo '<option value="'.$row_list['room_type'].'">'.$row_list['room_type'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>   
            </div> 
        </div>
        
</body>
</html>