<?php include('partials/menu.php'); ?>

        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Participants</h1>

                <br>
                    <?php
                    
                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    ?>
                <br>

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>E-mail</th>
                    </tr>

                    
                    <?php 
                        $sql = "SELECT * FROM tbl_users WHERE evaluator='No'";

                        $res = mysqli_query($conn, $sql);

                        if($res==TRUE)
                        {

                            $count = mysqli_num_rows($res);

                            $sn=1; 

                           
                            if($count>0)
                            {
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $id=$rows['user_id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];
                                    $email=$rows['email'];
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/delete-user.php?id=<?php echo $id; ?>" class="btn-danger">Delete Participant</a>
                                        </td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {

                            }
                        }

                    ?>


                    
                </table>

            </div>
        </div>


<?php include('partials/footer.php') ?>