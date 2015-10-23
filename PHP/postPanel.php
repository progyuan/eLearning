
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
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
  <link rel="stylesheet" href="../css/postPanelStylev1.css">




</head>
<!-- start carousel -->
<body data-spy="scroll" data-target=".navbar" data-offset="50">



<script src="../js/home/modalScript.js"></script>
<?php
    include('postPanel/postPanelLogic.php');
    include('postPanel/bsNavBar.php');
    include('postPanel/bsJumbotronCourseDetail.php');
    include('postPanel/bsCollapse.php');
    include('postPanel/bsModal.php');
?>

</body>
</html>
