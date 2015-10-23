<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rapid Learning</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/coursePageStyle.css">
</head>
<body>

  <?php
    include 'course\courseLogic.php';
    include 'course\bsNavBar.php';
    include 'course\bsJumbotronCourseDetail.php';
    include 'course\bsPillTab.php';
  ?>

</body>
</html>
