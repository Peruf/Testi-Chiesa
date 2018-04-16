<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <link href="public/css/stile.css" rel="stylesheet" type="text/css">
  <title>Testi C.H.I.E.S.A.</title>
</head>
<?php include('source/leggicsv.php');?>
<body>
<?php include('source/sidebar.php'); ?>
<header>
<div class="a">
  <h1 class="title bord">Super Canzoniere Clericale</h1>
</div>
<?php include('source/content.php'); ?>

<div class="a inv" name="tobeshowed">
  <h2 class="titles">ACCENDI IN ME</h2>
  <div id="list" style="font-size: 24px;"><p ><?php $myfile = fopen("songs/testi/accendinme.txt", "r") or die("Unable to open file!");echo nl2br(fread($myfile,filesize("songs/testi/accendinme.txt")));fclose($myfile); ?></p></div>
</div>
</header>
<footer>  <script type="text/javascript" src="public/js/script.js"></script> </footer>
</body>
</html>
