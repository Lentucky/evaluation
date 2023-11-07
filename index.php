
<?php include('partials-front/menu.php'); ?>

    <?php 
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
    ?>

    <h1>This is the user/evaluation index</h1>

<?php include('partials-front/footer.php') ?>