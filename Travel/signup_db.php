<?php
            session_start();
            include('conf.php'); 
            $name=$_POST['name'];
            $userid=$_POST['uname'];
            $pass=$_POST['pw'];
            $email=$_POST['email'];
            $phone=$_POST['phn'];
            $addr=$_POST['addr'];
            $er=1;

            // if(empty($name) || empty($userid) || empty($pass)|| empty($email) || empty($phone) || empty($addr)){
            //     echo "Please fill all the fields";
            //     $er=0;
            // }

            if($er == 1){
                $unameQu = "SELECT * FROM users WHERE user_id ='$userid'";
                $unameRes = mysqli_query($conn, $unameQu);
                if(mysqli_num_rows($unameRes) > 0){
                    echo "Username already exists";
                    $er=0;
                    echo "<br>";

                }
                
                $phnQu = "SELECT * FROM users WHERE user_mob ='$phone'";
                $phnRes = mysqli_query($conn, $phnQu);
                if(mysqli_num_rows($phnRes) > 0){
                    echo "An account with that number already exists";
                    $er=0;
                    echo "<br>";
                }
                
                
                $emailQu = "SELECT * FROM users WHERE user_email='$email'";
                $emailRes = mysqli_query($conn, $emailQu);
                if(mysqli_num_rows($emailRes) > 0){
                    echo "An account with that email already exists";
                    $er=0;
                    echo "<br>";
                }
            }


            if($er==1){
                $sql = "INSERT INTO users VALUES ('$userid','$name', '$phone','$email','$pass','$addr')";
                $results = mysqli_query($conn,$sql);
                if ($results) {
                    echo "New record created successfully";
                    header("Location: login.php");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }else{
                echo '<a href="signup.php" class="but-log">Try again</a>';
            }
?>