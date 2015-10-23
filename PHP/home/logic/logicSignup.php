<?php


        $userName = mysqli_real_escape_string($dbc,trim($_REQUEST['signupUsername']));
		    $userEmail = mysqli_real_escape_string($dbc,trim($_REQUEST['signupEmail']));
	      $userPassword = mysqli_real_escape_string($dbc,trim($_REQUEST['signupPassword']));

        $userNameLength = strlen($userName);
        $passwordLength = strlen($userPassword);

        $passwordAlphanumeric  = ctype_alnum($userPassword);

        $patternLetter = '/[A-Za-z]/';
        preg_match($patternLetter, $userName, $userNameContainLetter);
        preg_match($patternLetter, $userPassword, $passwordContainLetter);

        $patternNumber = '/[0-9]/';
        preg_match($patternNumber, $userPassword, $passwordContainNumber);

        $errorList = "<ul>";
        if ($userNameLength < 3) {
          $errorList = $errorList."<li> User Name contain Less Then 3 Letter </li>";
        }
        if ($passwordLength < 6) {
          $errorList = $errorList."<li> Password contain Less Then 6 Letter </li>";
        }
        if (!$passwordAlphanumeric) {
          $errorList = $errorList."<li> Password contain Symbol </li>";
        }
        if (!$userNameContainLetter) {
          $errorList = $errorList."<li> User Name contain Number Or Symble </li>";
        }
        if (!$passwordContainLetter) {
          $errorList = $errorList."<li> Password does not contain at least one letter </li>";
        }
        if (!$passwordContainNumber) {
          $errorList = $errorList."<li> Password does not contain at least one number </li>";
        }
        $errorList = $errorList."</ul>";

		    if ($userNameLength >= 3 && $passwordLength >= 6 &&
            $passwordAlphanumeric &&
            $userNameContainLetter && $passwordContainLetter &&
            $passwordContainNumber) {

			    mysqli_query($dbc, "INSERT INTO `register` (`UserName`, `Email`, `PASSWORD`) VALUES ('$userName','$userEmail','$userPassword')");
			    $affectedRows = mysqli_affected_rows($dbc);
          if ($affectedRows == 1) {

            $_SESSION['strongMassage'] = "REGISTERED !";
            $_SESSION['warningMassage'] = "";

            echo "
            <script type=\"text/javascript\">
                $(window).load(function(){
                    $('#loginAlerSuccess').modal('show');
                });
            </script>
            ";
          }
          else {
            $_SESSION['strongMassage'] = "Registration Faild!";
            $_SESSION['warningMassage'] = "This user name or email has another account";

            echo "
            <script type=\"text/javascript\">
                $(window).load(function(){
                    $('#loginAlertWrong').modal('show');
                });
            </script>
            ";
          }

        }
        else {
          $_SESSION['strongMassage'] = "";
          $_SESSION['warningMassage'] = $errorList;

          echo "
          <script type=\"text/javascript\">
              $(window).load(function(){
                  $('#loginAlertWrong').modal('show');
              });
          </script>
          ";
        }




?>
