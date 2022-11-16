<?php
    session_start();
    $_SESSION['is_logged_in']=false;
    include('conf.php'); 
    $userid=$_POST['uname']; 
    $pass =$_POST['pw'];
               
    $sql="SELECT * FROM users where user_id='$userid' and user_pass='$pass'"; 
    $res=mysqli_query($conn,$sql);
    if($result=mysqli_fetch_assoc($res))
    {
        $_SESSION['userid']=$result['user_id'];
        $_SESSION['is_logged_in']=1; 
        header('location: index.php');
    } else{
        unset($_SESSION['is_logged_in']);
        header('location: login.php');
    }
    print_r($res);
?>