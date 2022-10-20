<?php 
 session_start();
 if(!$_SESSION['user']){
		header('Location: ../index.php');
	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
 	<link rel="stylesheet" href="css/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link 
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
  />  
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
  <div class="container">
    <header>
          <div id="navigation">
          <div id="menu" onclick="onClickMenu()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
          </div>
          
        </div>
        <div>
          <h1 class="content-header_title">
          мойдодыр
          </h1>
        </div>
        <div class="logo">
          <img src="css/logo.png" alt="(((">
        </div>
        <div class="profile_pic">
          <img src="css/images.jpeg" alt=")))">
        </div>
      
        
      
    </header>
<ul class="nav" id="nav">
            <li><a href="#">Мой профиль</a></li>
            <li><a href="#">Как это работает?</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Статистика</a></li>
            <li><a href="#">Новости</a></li>
          </ul>
        
  </div>
 




 	<!-- <a href="../auth/logout.php">Выйти</a> -->
 
 </body>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
 <script>
  function onClickMenu() {
    document.getElementById("nav").classList.toggle("change");

  }
 </script>
 </html>
