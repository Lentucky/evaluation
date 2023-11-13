<?php include('partials-front/menu.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/index.css">
  <title></title>
</head>
<body>
<div class="form-box4">
    <div class="wrapper">
        <h1>Update Details</h1>

        <br><br>

        <?php 
            $id=$_GET['id'];

            $sql="SELECT * FROM tbl_users WHERE user_id=$id";

            $res=mysqli_query($conn, $sql);

            if($res==true)
            {
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    $row=mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $username = $row['username'];
                    $email = $row['email'];
                    $password = $row['password'];
                }
                else
                {
                    header('location:'.SITEURL.'index.php');
                }
            }
        
        ?>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $email; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="text" name="password" value="<?php echo $password; ?>">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update" class="button3">
                    </td>
                </tr>

            </table>

        </form>
    </div>
</div>
</body>
</html>



<?php 
    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        //$password = $_POST['password'];

        $sql = "UPDATE tbl_users SET
        full_name = '$full_name',
        username = '$username',
        email = '$email',
        password = '$password' 
        WHERE user_id='$id'
        ";

        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            $_SESSION['update'] = "<div class='success'>Details updated successfully, please login again.</div>";

            unset($_SESSION['user']);

            header('location:'.SITEURL.'login.php');

        }
        else
        {
            $_SESSION['update'] = "<div class='error'>Failed to update details</div>";

            header('location:'.SITEURL.'index.php');
        }
    }

?>


<?php include('partials-front/footer.php') ?>