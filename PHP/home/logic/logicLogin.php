<?php
$userName = mysqli_real_escape_string($dbc,trim($_REQUEST['loginName']));
$userPassword = mysqli_real_escape_string($dbc,trim($_REQUEST['loginPassword']));

if (!empty($userName)  && !empty($userPassword)) {

  $queryLogin = mysqli_query($dbc, "SELECT * FROM `register` WHERE (`UserName` Like '".$userName."' OR `Email` Like '".$userName."')");
  $numrowsLogin = mysqli_num_rows($queryLogin);
  if ($numrowsLogin > 0) {
  $queryResultLogin = mysqli_fetch_array($queryLogin);
  $queryName = $queryResultLogin['UserName'];
  $queryPassword = $queryResultLogin['PASSWORD'];
  if ($queryPassword == $userPassword) {
    $_SESSION['userName'] = $queryName;

    echo "
    <script type=\"text/javascript\">
        $(window).load(function(){
            $('#login_button').hide();
            $('#signup_button').hide();
            $('#userNameBar').show().removeClass('hide');
            $('#courseSection').show().removeClass('hide');
            $('#courseSectionNavBarItem').show().removeClass('hide');
        });
    </script>
    ";

    $queryTeacherProfile = mysqli_query($dbc, "SELECT * FROM `teacherprofile` WHERE `Register_Id` = ".$queryResultLogin['Register_Id']);
    $numrowsLoginTeacherProfile = mysqli_num_rows($queryTeacherProfile);
    if ($numrowsLoginTeacherProfile==1) {
      $_SESSION['userAs'] = "Teacher";
      echo "
      <script type=\"text/javascript\">
          $(window).load(function(){
              $('#teacherRegistrationButton').hide();
          });
      </script>
      ";
    } else {
      $_SESSION['userAs'] = "Student";
      echo "
      <script type=\"text/javascript\">
          $(window).load(function(){
              $('#teacherProfileButton').hide();
              $('#postPanelButton').hide();
          });
      </script>
      ";
    }


  }
  else {
    $_SESSION['strongMassage'] = "LogIN Faild!";
    $_SESSION['warningMassage'] = "Wrong password.";

    echo "
    <script type=\"text/javascript\">
        $(window).load(function(){
            $('#loginAlertWrong').modal('show');
        });
    </script>
    ";
  }
} else {

  $_SESSION['strongMassage'] = "LogIN Faild!";
  $_SESSION['warningMassage'] = "Wrong user name or email.";

  echo "
  <script type=\"text/javascript\">
      $(window).load(function(){
          $('#loginAlertWrong').modal('show');
      });
  </script>
  ";
}

if ($_SESSION['userName'] == "nayeem") {
  echo "
  <script type=\"text/javascript\">
      $(window).load(function(){
          $('#postPanelButton').show();
          $('#teacherRegistrationButton').hide();
      });
  </script>
  ";
}


}
?>
