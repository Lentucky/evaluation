<?php 

    include('config/constants.php'); 
    include('partials-front/login-check.php');
?>


<html>
    <head>
        <title>Evaluation</title>

        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    
                    <?php
                        // //Sql Query 
                        // $eval = "SELECT * FROM tbl_users WHERE evaluator='Yes' ";
                        // //Execute Query
                        // $res = mysqli_query($conn, $sql);
                        // //Count Rows

                        if (isset($_SESSION['evaluator']) && $_SESSION['evaluator'] == 'Yes') {
                            echo "<li><a href='evaluate.php'>Evaluate</a></li>";

                        }
                    ?>

                    <li><a href="manage-admin.php">Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->