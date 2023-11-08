<?php 

    include('../config/constants.php');


    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_users WHERE user_id=$id";


    $res = mysqli_query($conn, $sql);

    if($res==true)
    {

        $_SESSION['delete'] = "<div class='success'>User deleted successfully.</div>";

        header('location:'.SITEURL.'admin/evaluator.php');
    }
    else
    {
        $_SESSION['delete'] = "<div class='error'>Failed to delete user. Try again later.</div>";
        header('location:'.SITEURL.'admin/evaluator.php');
    }
?>