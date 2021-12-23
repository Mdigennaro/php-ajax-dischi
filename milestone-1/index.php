<?php

include_once __DIR__ . './components/database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
  <!--/Font-->

  <!--CSS-->
  <link rel="stylesheet" href="style/style.css?ts=<?=time()?>&quot">
  <!--/CSS-->

  <title>Dischi</title>
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
    
  <?php foreach($albums as $album): ?>
    <div class="box-album">
    
      <?php 

        echo "<a href='{$album['poster']}'><img src='{$album['poster']}'></a>";
        echo "<a href='{$album['poster']}'><h2>{$album['title']}</h2></a>";
        echo "<h3>{$album['author']}</h3>";
        echo "<h5>{$album['year']}</h5>";

      ?>

    </div>
  <?php  endforeach; ?>

     
  </div>
</main>
<footer></footer>
  
</body>
</html>