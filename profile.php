<?php include('partials-front/menu.php'); ?>

<?php 
        //Create SQL query to get all the fucking users
        $sql = "SELECT * FROM tbl_users where username='" . $_SESSION['user'] . "'";

        //execute the query
        $res = mysqli_query($conn, $sql);

        //Count rows to check whether we have food or not
        $count = mysqli_num_rows($res);

        if($count>0)
        {
                //We have food in database
                //Get the food from database and display
                while($row=mysqli_fetch_assoc($res))
                {
                        //get the value from the individual columns
                        $id = $row['user_id'];
                        $full_name = $row['username'];
                        $username = $row['username'];
                        $email = $row['email'];
                }

        }

    ?>

    <div class="main-content">
        <div class="wrapper">
                <h2 class="text-center">Account Details</h2>

                <table class="tbl-full">
                    <tr>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>E-mail</th>
                    </tr>
                    <tr>
                        <td><?php echo $full_name; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $email; ?></td>
                        <td>
                            <a href="<?php echo SITEURL; ?>update-profile.php?id=<?php echo $id; ?>" class="btn-secondary">Update Details</a>
                        </td>
                    </tr>
                </table>          
        </div>
    </div>


<?php include('partials-front/footer.php') ?>