<?php
    session_start();
    include('conn.php'); 
    echo $userid=$_POST['uname']; 
    echo $passwd =$_POST['pw'];
               
    $sql="select * from login_table where username='$userid' and pass='$passwd' "; 
    $res=mysqli_query($conn,$sql);
    if($result=mysqli_fetch_assoc($res))
    {
        $_SESSION['userid']=$result['userid']; 
        echo "A";
        header('location: dashboard.php');
    } else{
        echo "A";
        header('location: form2.html');
    }
    print_r($res);
?>