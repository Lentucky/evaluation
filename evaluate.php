<?php include('partials-front/menu.php'); ?>


        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">

                <br />

                <?php 

                    
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                    if(isset($_SESSION['user-not-found']))
                    {
                        echo $_SESSION['user-not-found'];
                        unset($_SESSION['user-not-found']);
                    }


                ?>
                <br><br><br>


                

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <section>
<table class="form-box2">
   
                    <tr>
                        <th class = "special-header2">S.N.</th>
                        <th class = "special-header">Full Name</th>
                        <th class = "special-header2">Username</th>
                        <th class = "special-header2">Email</th>
                    </tr>
                </section>  
                          
</body>
</html>

                    
                    <?php 
                        //Query to Get all Admin
                        $sql = "SELECT * FROM tbl_users WHERE evaluator='No' ";
                        //Execute the Query
                        $res = mysqli_query($conn, $sql);

                        //CHeck whether the Query is Executed of Not
                        if($res==TRUE)
                        {
                            // Count Rows to CHeck whether we have data in database or not
                            $count = mysqli_num_rows($res); // Function to get all the rows in database

                            $sn=1; //Create a Variable and Assign the value

                            //CHeck the num of rows
                            if($count>0)
                            {
                                //WE HAve data in database
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    //Using While loop to get all the data from database.
                                    //And while loop will run as long as we have data in database

                                    //Get individual DAta
                                    $user_id=$rows['user_id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];
                                    $email=$rows['email'];

                                    //Display the Values in our Table
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>questionnaire.php?id=<?php echo $user_id; ?>" class="button">Evaluate</a>

                                        </td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {
                                //We Do not Have Data in Database
                            }
                        }

                    ?>


                    
                </table>

            </div>
        </div>
        <!-- Main Content Setion Ends -->

        <?php include('partials-front/footer.php') ?>

