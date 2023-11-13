<?php include('partials/menu.php'); ?>

    <?php 
        //Category id is set and get the id
        // $qis_id = $_GET['category_id'];
        // Get the CAtegory Title Based on Category ID
        $sql = "SELECT title FROM tbl_questionnaire WHERE questionnaire_id=2";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Get the value from Database
        $row = mysqli_fetch_assoc($res);
        //Get the TItle
        $questionnaire_title = $row['title'];
    ?>


    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2><?php echo $questionnaire_title; ?></h2>

        </div>
    </section>

    <table class="tbl-full">
        <tr>
            <th>Question ID</th>
            <th>Question</th>
            <th>Actions</th>
        </tr>

        <?php 
            //Query to Get all Admin
            $sql2 = "SELECT * FROM tbl_question WHERE questionnaire_id=2";
            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //CHeck whether the Query is Executed of Not
            if($res2==TRUE)
            {
                // Count Rows to CHeck whether we have data in database or not
                $count2 = mysqli_num_rows($res2); // Function to get all the rows in database

                //CHeck the num of rows
                if($count2>0)
                {
                    //WE HAve data in database
                    while($rows2=mysqli_fetch_assoc($res2))
                    {
                        //Using While loop to get all the data from database.
                        //And while loop will run as long as we have data in database

                        //Get individual DAta
                        $question_id=$rows2['question_id'];
                        $questionnaire_id=$rows2['questionnaire_id'];
                        $question=$rows2['question'];

                        //Display the Values in our Table
                        ?>
                        
                        <tr>
                            <td><?php echo $questionnaire_id; ?></td>
                            <td><?php echo $question; ?></td>
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

<?php include('partials/footer.php'); ?>