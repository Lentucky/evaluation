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
                        $full_name = $row['full_name'];
                        $username = $row['username'];
                        $email = $row['email'];
                }

        }

    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>Profile</title>
  <link rel="stylesheet" href="css/index.css">

</head>
<body>

<div class="form-box3">
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
                <div class = "button2_adj">
                    <a href="<?php echo SITEURL; ?>update-profile.php?id=<?php echo $id; ?>" class="button2">Update Details</a>
                </div>
            </td>
        </tr>
    </table>
</div>



</body>
</html>

    


<?php include('partials-front/footer.php') ?>