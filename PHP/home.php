
<!DOCTYPE html>

<?php
  session_start();
?>

<html lang="en">
<head>
  <title>Rapid Learning</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/homePageStylev1.css">



</head>
<!-- start carousel -->
<body data-spy="scroll" data-target=".navbar" data-offset="50">



<script src="../js/home/modalScript.js"></script>
<?php
    include 'home\homeLogic.php';
    include 'home\bsCarouselSlide.php';
    include 'home\bsNavBarAffix.php';
    include 'home\bsModal.php';
    include 'home\section.php';
?>

</body>
</html>
