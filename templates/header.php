<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
 $pageName = $_SERVER['REQUEST_URI'];
 $pageName = preg_replace('/(.*\/)|(\..*)/', '', $pageName);
 //echo $pageName;


?>
 <head>
   <meta charset="utf-8">
   <title><?php echo "brian ".ucfirst($pageName);?></title>
   <link href="style2.css" rel="stylesheet">
 <link rel="icon" href="img/image.png" type="icon.png" sizes="16x16">
 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
 </head>
 <body>
    <div class="header">
     <button onclick="location.href='home.php'">
       <div class="logo">
           <img class="logo" src="img/logo.png" width="60" height="30"alt="logo">
           Home
       </div>
     </button>

     <div class="navigation">
         <?php
            require("nav.php");
          ?>
     </div>

     <!-- <a href="#" id="meniuButton">☰</a> -->
   </div>
   <div class="page">
