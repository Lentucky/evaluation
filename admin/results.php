
<?php include('partials/menu.php'); 
    $id=$_GET['id'];

    $sql_name="SELECT full_name FROM tbl_users WHERE user_id=$id";
    $res_name = mysqli_query($conn,$sql_name);
    $row_name = mysqli_fetch_array($res_name);
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Questionnaire Results of <?php echo $row_name[0]?></h1>
        <h3>Number of answers per choices</h3>

        <table class="tbl-full">
            <tr>
                <th>Question</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
            </tr>

            <?php
                

                for ($x = 1; $x <= 17; $x++) {

                    //Sql Query 
                    $sql = "SELECT Q$x FROM tbl_questionnaire WHERE Q$x=1 AND user_id=$id";
                    $sql2 = "SELECT Q$x FROM tbl_questionnaire WHERE Q$x=2 AND user_id=$id";
                    $sql3 = "SELECT Q$x FROM tbl_questionnaire WHERE Q$x=3 AND user_id=$id";
                    $sql4 = "SELECT Q$x FROM tbl_questionnaire WHERE Q$x=4 AND user_id=$id";
                    $sql5 = "SELECT Q$x FROM tbl_questionnaire WHERE Q$x=5 AND user_id=$id";
                    //Execute Query
                    $res = mysqli_query($conn, $sql);
                    $res2 = mysqli_query($conn, $sql2);
                    $res3 = mysqli_query($conn, $sql3);
                    $res4 = mysqli_query($conn, $sql4);
                    $res5 = mysqli_query($conn, $sql5);
                    //Count Rows
                    $count = mysqli_num_rows($res);
                    $count2 = mysqli_num_rows($res2);
                    $count3 = mysqli_num_rows($res3);
                    $count4 = mysqli_num_rows($res4);
                    $count5 = mysqli_num_rows($res5);
                
                ?>
                <tr>
                    <td>Question <?php echo $x ?></td>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $count2; ?></td>
                    <td><?php echo $count3; ?></td>
                    <td><?php echo $count4; ?></td>
                    <td><?php echo $count5; ?></td>
                </tr> 
            <?php
                }
            ?>
            
            
        </table>

    </div>
</div>

<?php include('partials/footer.php') ?>