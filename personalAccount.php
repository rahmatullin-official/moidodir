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
     <link rel="stylesheet" href="css/diagrams.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--     <link rel="stylesheet" href="css/jquery.circliful.css">-->
     <link href="css/main.css" rel="stylesheet" type="text/css" />

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
      <div>
        <h1 class="content-header_title">мойдодыр</h1>
      </div>
      <div class="logo">
        <img src="css/logo.png" alt="(((">
      </div>
      <div class="userName">
        Дамир Рахматуллин
      </div>
      <div class="profile_pic">
        <img src="css/images.jpeg" alt=")))">
      </div>
    </header>
      <div class="mainPartContainer">
        <div class="navigation">
          <ul class="nav">
              <li class="bold"><a href="/personalAccount.php">Мой профиль</a></li>
              <li><a href="/howItWorks.php">Как это работает?</a></li>
              <li><a href="#">О нас</a></li>
              <li><a href="#">Статистика</a></li>
              <li><a href="#">Новости</a></li>
          </ul>
        </div>
      <div class="sideContent">
          <p class="upperText"><span>Никита</span> сегодня вымыл руки на <span>65</span>%</p>
          <div class="diagramContent">
              <div class="firstDiagram">
                  <p>За сегодня</p>
                  <div id="circle"></div>
              </div>
              <div class="secondDiagram">
                  <p>За неделю<br>в среднем</p>
                  <div id="circle2"></div>
              </div>
          </div>
          <div class="barContent">
              <div class="chart">
                  <div class="container_bar">
                      <div class="pipe">
                          <div style="width: 40%"></div>
                      </div>
                      <p>Класс</p>
                  </div>
                 <div class="container_bar">
                     <div class="pipe">
                         <div style="width: 38%"></div>
                     </div>
                     <p>Параллель</p>
                 </div>
                  <div class="container_bar">
                      <div class="pipe">
                          <div style="width: 18%"></div>
                      </div>
                      <p>Школа</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
    
    
        
  </div>
 



 

 	 <a href="../auth/logout.php">Выйти</a> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/circliful.js"></script>
  <script>
      circliful.newCircle({
          percent: 80,
          id: 'circle',
          type: 'simple',
          strokeLinecap: "round",
          noPercentageSign: false,
          backgroundCircleWidth: 20,
          foregroundCircleWidth: 20,
          progressColors: [
              {percent: 1, color: 'red'},
              {percent: 30, color: 'orange'},
              {percent: 60, color: 'green'}
          ]
      });
      circliful.newCircle({
          percent: 35,
          id: 'circle2',
          type: 'simple',
          strokeLinecap: "round",
          noPercentageSign: false,
          backgroundCircleWidth: 20,
          foregroundCircleWidth: 20,
          progressColors: [
              {percent: 1, color: 'red'},
              {percent: 30, color: 'orange'},
              {percent: 60, color: 'green'}
          ]
      });
  </script>
 </body>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->