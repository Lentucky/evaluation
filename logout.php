<?php 
    include('config/constants.php');
    //1. Destory the Session
    session_destroy(); 

    header('location:'.SITEURL.'login.php');

?>