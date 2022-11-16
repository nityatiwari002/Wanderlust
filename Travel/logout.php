<?php
session_start();
unset($_SESSION['is_logged_in']);
header("Location: index.php");
?>