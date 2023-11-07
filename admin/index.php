
<?php include('partials/menu.php'); ?>
    <?php 
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
    ?>

    <h1>This is the admin index</h1>
<?php include('partials/footer.php') ?>