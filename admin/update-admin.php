<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Update Details</h1>

        <br><br>

        <?php 
            $id=$_GET['id'];

            $sql="SELECT * FROM tbl_admin WHERE admin_id=$id";

            $res=mysqli_query($conn, $sql);

            if($res==true)
            {
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    $row=mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $username = $row['username'];
                    $password = $row['password'];
                }
                else
                {
                    header('location:'.SITEURL.'admin/admin.php');
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
                    <td>Password: </td>
                    <td>
                        <input type="text" name="password" value="<?php echo $username; ?>">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
    </div>
</div>

<?php 
    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "UPDATE tbl_admin SET
        full_name = '$full_name',
        username = '$username',
        password = '$password' 
        WHERE admin_id='$id'
        ";

        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            $_SESSION['update'] = "<div class='success'>Details Updated Successfully.</div>";

            header('location:'.SITEURL.'admin.php');
        }
        else
        {
            $_SESSION['update'] = "<div class='error'>Failed to Add Details</div>";

            header('location:'.SITEURL.'admin.php');
        }
    }

?>


<?php include('partials/footer.php') ?>