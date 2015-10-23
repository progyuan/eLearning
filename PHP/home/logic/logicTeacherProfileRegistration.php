<?php
  /* Get data from text field */
  $resisterId = "";
  $teacherName = mysqli_real_escape_string($dbc,trim($_REQUEST['teacherName']));
  $teacherAddress = mysqli_real_escape_string($dbc,trim($_REQUEST['teacherAddress']));
  $teacherContactNumber = mysqli_real_escape_string($dbc,trim($_REQUEST['teacherContactNumber']));
  $teacherSkill = mysqli_real_escape_string($dbc,trim($_REQUEST['teacherSkill']));
  $imageFileName = "";
  if ($_FILES['file']['size'] > 0) {
    $_FILES['file']['name'] = $_SESSION['userName'].".".pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $imageFileName = $_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], "../image/tpp/".$_FILES['file']["name"]);
  }

  $queryRegister = mysqli_query($dbc, "SELECT `Register_Id` FROM `register` WHERE `UserName` LIKE '".$_SESSION['userName']."'");
  $numrowsRegister = mysqli_num_rows($queryRegister);
  if ($numrowsRegister > 0) {
    $queryResultRegister = mysqli_fetch_array($queryRegister);
    $resisterId = $queryResultRegister['Register_Id'];
  }

  // echo $teacherName."<br>";
  // echo $teacherAddress."<br>";
  // echo $teacherContactNumber."<br>";
  // echo $teacherSkill."<br>";
  // echo $imageFileName."<br>";
  // echo $resisterId."<br>";

  // INSERT INTO `teacherprofile`(`Register_Id`, `ImageLink`, `TeacherName`, `TeacherAddress`, `ContactNo`, `Biography_Skill`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
  mysqli_query($dbc, "INSERT INTO `teacherprofile` (`Register_Id`, `ImageLink`, `TeacherName`, `TeacherAddress`, `ContactNo`, `Biography_Skill`) VALUES (".$resisterId.",'".$imageFileName."','".$teacherName."','".$teacherAddress."','".$teacherContactNumber."','".$teacherSkill."')");
  $affectedRows = mysqli_affected_rows($dbc);
  if ($affectedRows == 1) {
    $_SESSION['strongMassage'] = "SUCCESSFUL !";
    $_SESSION['warningMassage'] = "Welcome as a teacher.";
    $_SESSION['userAs'] == "Teacher

    echo "
    <script type=\"text/javascript\">
        $(window).load(function(){
            $('#loginAlerSuccess').modal('show');
        });
    </script>
    ";
  } else {
    $_SESSION['strongMassage'] = "Registration Faild!";
    $_SESSION['warningMassage'] = "Due to system error";

    echo "
    <script type=\"text/javascript\">
        $(window).load(function(){
            $('#loginAlertWrong').modal('show');
        });
    </script>
    ";
  }



  include('logicSession.php');
?>
