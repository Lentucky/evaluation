
<?php include('partials/menu.php'); ?>


        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>List of Questions</h1>

                <br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add']; //Displaying Session Message
                        unset($_SESSION['add']); //REmoving Session Message
                    }

                ?>
                <br><br><br>


                <br /><br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>S.N</th>
                        <th>Partcipant</th>
                        <th>Evaluator</th>
                        <th>Q1</th>
                        <th>Q2</th>
                        <th>Q3</th>
                        <th>Q4</th>
                        <th>Q5</th>
                        <th>Q6</th>
                        <th>Q7</th>
                        <th>Q8</th>
                        <th>Q9</th>
                        <th>Q10</th>
                        <th>Q11</th>
                        <th>Q12</th>
                        <th>Q13</th>
                        <th>Q14</th>
                        <th>Q15</th>
                        <th>Q16</th>
                        <th>Q17</th>
                        <th>Comment</th>
                        <th>Date taken</th>
                    </tr>

                    
                    <?php 

                        //Query to Get all Admin
                        $sql = "SELECT * FROM tbl_questionnaire";
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

                                    $userId=$rows['user_id'];
                                    $evalId=$rows['evaluator_id'];
                                    $Q1=$rows['Q1'];
                                    $Q2=$rows['Q2'];
                                    $Q3=$rows['Q3'];
                                    $Q4=$rows['Q4'];
                                    $Q5=$rows['Q5'];
                                    $Q6=$rows['Q6'];
                                    $Q7=$rows['Q7'];
                                    $Q8=$rows['Q8'];
                                    $Q9=$rows['Q9'];
                                    $Q10=$rows['Q10'];
                                    $Q11=$rows['Q11'];
                                    $Q12=$rows['Q12'];
                                    $Q13=$rows['Q13'];
                                    $Q14=$rows['Q14'];
                                    $Q15=$rows['Q15'];
                                    $Q16=$rows['Q16'];
                                    $Q17=$rows['Q17'];
                                    $comment=$rows['comment'];
                                    $date_taken=$rows['date_taken'];

                                    //grab the participant name
                                    $userSql = "SELECT full_name FROM tbl_users WHERE user_id='$userId' ";
                                    $userRes = $conn->query($userSql);
            
                                    if($userRes){
                                        $userRow = $userRes->fetch_assoc();
            
                                        // Store the column value in a PHP variable
                                        $part_name = $userRow['full_name'];
                                    }
                                    //grab the evaluator name
                                    //grab the username
                                    $evalSql = "SELECT full_name FROM tbl_users WHERE user_id='$evalId' ";
                                    $evalRes = $conn->query($evalSql);
            
                                    if($evalRes){
                                        $evalRow = $evalRes->fetch_assoc();
            
                                        // Store the column value in a PHP variable
                                        $eval_name = $evalRow['full_name'];
                                    }

                                    //Display the Values in our Table
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $part_name; ?></td>
                                        <td><?php echo $eval_name; ?></td>
                                        <td><?php echo $Q1; ?></td>
                                        <td><?php echo $Q2; ?></td>
                                        <td><?php echo $Q3; ?></td>
                                        <td><?php echo $Q4; ?></td>
                                        <td><?php echo $Q5; ?></td>
                                        <td><?php echo $Q6; ?></td>
                                        <td><?php echo $Q7; ?></td>
                                        <td><?php echo $Q8; ?></td>
                                        <td><?php echo $Q9; ?></td>
                                        <td><?php echo $Q10; ?></td>
                                        <td><?php echo $Q11; ?></td>
                                        <td><?php echo $Q12; ?></td>
                                        <td><?php echo $Q13; ?></td>
                                        <td><?php echo $Q14; ?></td>
                                        <td><?php echo $Q15; ?></td>
                                        <td><?php echo $Q16; ?></td>
                                        <td><?php echo $Q17; ?></td>
                                        <td><?php echo $comment; ?></td>
                                        <td><?php echo $date_taken; ?></td>
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

<?php include('partials/footer.php') ?>