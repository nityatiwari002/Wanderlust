<?php
session_start();
include ('conf.php');
$hid=$_SESSION['hotelId'];
$roomtype=$_POST['room_type'];
$sql="SELECT * FROM rooms where hotel_id='$hid' and room_type='$roomtype'";
$result=mysqli_query($conn,$sql);   
$row=mysqli_fetch_assoc($result);
$room_id=$row['type_id'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
if($checkin>$checkout){
    $_SESSION['error']="Checkin date cannot be greater than checkout date";
    header('Location: choose_room.php');
}
$uid=$_SESSION['userid'];
$bookid=$uid.$hid.$room_id;
$n=$_POST['num'];
echo $n;
$sql1="SELECT * FROM booking WHERE book_id='$bookid'";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
    $bookid=$bookid.random_int(1, 100);
}
echo $bookid;
$sql1="INSERT INTO booking VALUES ('$uid','$hid','$room_id', '$n', '$checkin','$checkout', '$bookid')";
$result1=mysqli_query($conn,$sql1);
if($result1){
    $_SESSION['success']="Booking successful";
    header('Location: mybookings.php');
}
else{
    $_SESSION['error']="Booking unsuccessful";
    header('Location: choose_city.php');
}

?>