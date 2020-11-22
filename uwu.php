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
<style>
body,h1,a {font-family: "Raleway", sans-serif}
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
  <?php if ($_SESSION['pilih'] == 2) : ?>
  <div class="w3-display-middle">
    <center><h1 class="w3-animate-top">Hi,<?php echo $_SESSION['name']; ?> I will tell you something</h1></center>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">hi <?php echo $_SESSION['name']; ?>, you know what, if you are a very beautiful woman, don't think you are ugly, i'm sure how come if you are a strong woman who is smart and you will be successful one day, don't be sad anymore okay, good bye <?php echo $_SESSION['name']; ?></p>
    <br>
    <center><a href="hilang.php" class="myButton">BACK</a></center>
  </div>
  <?php endif ?>
  <?php if ($_SESSION['pilih'] == 1) : ?>
  <div class="w3-display-middle">
    <center><h1 class="w3-animate-top">Hai,<?php echo $_SESSION['name']; ?> Aku mau ngucapin kamu sesuatu</h1></center>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">Hai <?php echo $_SESSION['name']; ?>Kamu udah makan ? , Kalo kamu belum makan mending makan dulu gih nanti kalau kamu sakit aku sedih , jangan lupa makan yaa :)) , jaga kesehatannya jugaaa yaaaa , bye bye <?php echo $_SESSION['name']; ?></p>
    <br>
    <center><a href="hilang.php" class="myButton">BACK</a></center>
  </div>
  <?php endif ?>
  <div class="w3-display-bottomleft w3-padding-large">
    Powered by <a href="https://vnix.my.id" target="_blank">muhyi</a>
  </div>
</div>

</body>
</html>
