
<?php include('partials-front/menu.php'); ?>

    <?php 
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

    ?>

    



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <Style>
    .image-container {
      position: absolute;
      top: 250px;
      width: 250px;
      height: 250px;
      margin: 0 auto;
    }

    .image-container img {
      width: 100%;
      height: 100%;
      border: 2px solid #333;
      border-radius: 8px;
      position: absolute;
      top: 0;
      left: 0;
      transition: opacity 0.5s ease-in-out;
    }

    .image-container img:hover {
      opacity: 0;
    }
    .img1{
        position: absolute;
        left: 20px;
    }

    .img2{
        position: absolute;
        left: 330px;
    }

    .img3{
        position: absolute;
        left: 630px;
    }

    .img4{
        position: absolute;
        left: 930px;
    }

    .img5{
        position: absolute;
        left: 1220px;
        
    }

    h1{
     position: absolute; 
     top: 135px;  
     left: 550px;
     font-size: 36px;
          padding: 10px 20px;
    }
    .m1{
        position: absolute; 

     top: 310px;  
     left: 50px;
     font-size: 18px;
          padding: 10px 20px;
          
          border-radius: 8px;
          background-color: #c8cb00;
          color: white;
    }

    .m2{
        position: absolute; 

     top: 310px;  
     left: 375px;
     font-size: 18px;
          padding: 10px 20px;
          
          border-radius: 8px;
          background-color: #c8cb00;
          color: white;
    }

    .m3{
        position: absolute; 

     top: 310px;  
     left: 675px;
     font-size: 18px;
          padding: 10px 20px;
          
          border-radius: 8px;
          background-color: #c8cb00;
          color: white;
    }

    .m4{
        position: absolute; 

     top: 310px;  
     left: 975px;
     font-size: 18px;
          padding: 10px 20px;
          
          border-radius: 8px;
          background-color: #c8cb00;
          color: white;
    }

    .m5{
        position: absolute; 

     top: 310px;  
     left: 1270px;
     font-size: 18px;
          padding: 10px 20px;
          
          border-radius: 8px;
          background-color: #c8cb00;
          color: white;
    }
    
  </Style>
</head>
<body>
    <h1>Members of Group 4:</h1>
    
    <div class = "m1">
       Allen Cabansag 
    </div>
    
    
    <div class = "img1">
    <div class="image-container">
        <a href="https://www.facebook.com/profile.php?id=100009177730323">
       <img src="images/allenANI.png" alt="LENLEN"> 
      <img src="images/allendp.jpg" alt="Allen Cabansag">
      </a>
    </div>
    </div>

    <div class = "m2">
       Mark Malipol 
    </div>

    <div class = "img2">
    <div class="image-container">
    <a href="https://www.facebook.com/markdenson.malipol">
       <img src="images/markANI.png" alt="Mayor"> 
      <img src="images/markdp.png" alt="Mark Malipol">
      </a>
    </div>
    </div>

    <div class = "m3">
       Ian Breganza 
    </div>

    <div class = "img3">
    <div class="image-container">
        <a href="https://www.facebook.com/ianmarcus.breganza/">
       <img src="images/ianANI.png" alt="Ian"> 
      <img src="images/iandp.jpg" alt="Ian Breganza">
      </a>
    </div>
    </div>

    <div class = "m4">
       Cyrus Castillo 
    </div>

    <div class = "img4">
    <div class="image-container">
    <a href="https://www.facebook.com/profile.php?id=100002321842065">
       <img src="images/cyrusANI2.png" alt="CY"> 
      <img src="images/cyrusdp2.jpg" alt="Cyrus Castillo">
    </a>  
    </div>
    </div>

    <div class = "m5">
       Dave Badillo 
    </div>

    <div class = "img5">
    <div class="image-container">
    <a href="https://www.facebook.com/davearius.badillo">
       <img src="images/daveANI.png" alt="D.A.V.E"> 
      <img src="images/davedp.jpg" alt="Dave Badillo">
    </a>  
    </div>
    </div>

</body>
</html>

<?php include('partials-front/footer.php') ?>