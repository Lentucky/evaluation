
<?php include('partials-front/menu.php'); ?>

    <?php 
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if(isset($_SESSION['update']))
        {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
    ?>

    <h1>This is the user/evaluation index</h1>
    <h3>testing</h3>

<?php include('partials-front/footer.php') ?>