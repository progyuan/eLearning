<?php
  include('connection.php');
  if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $CourseName =  mysqli_real_escape_string($dbc,trim($_POST['course']));
    $_SESSION["course"] = $CourseName;
  }
  else if (!empty($_SESSION["course"])){
    $CourseName = $_SESSION["course"];
  }
  else {
    header("location:home.php");
  }
  ?>
