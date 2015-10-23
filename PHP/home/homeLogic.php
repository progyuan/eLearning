<?php

    include('connection.php');

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
      if (!empty($_REQUEST['logoutSubmit'])) {

        include('logic\logicLogout.php');

      }
      else if (!empty($_REQUEST['loginSubmit'])) {

        include('logic\logicLogin.php');

      }
      else if (!empty($_REQUEST['signupSubmit'])) {

        include('logic\logicSignup.php');

      }
      else if (!empty($_REQUEST['teacherProfileRegistrationSubmit'])) {

        include('logic\logicTeacherProfileRegistration.php');

      }



      mysqli_close($dbc);

    }
    else if (!empty($_SESSION['userName'])) {

      include('logic\logicSession.php');

    }
?>
