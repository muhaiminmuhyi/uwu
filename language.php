<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('location:home');
}
?>
<!DOCTYPE html>
<html>
<title>UwU</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="select.css">
<style>
body,h1,a,h2,h3,h4 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('/w3images/forestbridge.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    V
  </div>
  <div class="w3-display-middle">
    <center><h1 class="w3-animate-top">SELECT LANGUAGE</h1></center>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">Pilih Bahasa</p>
    
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    Powered by <a href="https://vnix.my.id" target="_blank">muhyi</a>
  </div>
</div>


</body>
</html>


