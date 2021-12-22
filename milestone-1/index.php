<?php

include_once __DIR__ . './components/database.php';

var_dump($albums)


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <title>Document</title>
</head>
<body>

<header>

<div class="header-left">
  <img src="img/spotify-logo.png" alt="logo">
</div>
<div class="header-right"></div>
  
</header>

<main>
  <div class="container-album">
    
  <?php foreach($albums as $album) ?>
    <div class='box-album'></div>
  <?php  endforeach ?>

     
  </div>
</main>
<footer></footer>
  
</body>
</html>