<?php
  /* Get data from text field */
  $courseName = mysqli_real_escape_string($dbc,trim($_REQUEST['courseName']));
  $courseDescription = mysqli_real_escape_string($dbc,trim($_REQUEST['courseDescription']));
  $courseImage = "";
  $resisterId = "";
  if ($_FILES['file']['size'] > 0) {
    $_FILES['file']['name'] = $courseName.".".pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $courseImage = $_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], "../image/ci/".$_FILES['file']["name"]);
  }

  $queryRegister = mysqli_query($dbc, "SELECT `Register_Id` FROM `register` WHERE `UserName` LIKE '".$_SESSION['userName']."'");
  $numrowsRegister = mysqli_num_rows($queryRegister);
  if ($numrowsRegister > 0) {
    $queryResultRegister = mysqli_fetch_array($queryRegister);
    $resisterId = $queryResultRegister['Register_Id'];
  }

  mysqli_query($dbc, "INSERT INTO `course` (`Register_Id`, `CourseName`, `Description`, `StartingDate`, `imagePath`) VALUES (".$resisterId.",'".$courseName."','".$courseDescription."',Now(),'".$courseImage."')");
  $affectedRows = mysqli_affected_rows($dbc);
  if ($affectedRows == 1) {
    $_SESSION['strongMassage'] = "";
    $_SESSION['warningMassage'] = "New Course Created";

    echo "
    <script type=\"text/javascript\">
        $(window).load(function(){
            $('#loginAlerSuccess').modal('show');
        });
    </script>
    ";
  } else {
    $_SESSION['strongMassage'] = "Faild!";
    $_SESSION['warningMassage'] = "Try again using another course name.";

    echo "
    <script type=\"text/javascript\">
        $(window).load(function(){
            $('#loginAlertWrong').modal('show');
        });
    </script>
    ";
  }


?>
