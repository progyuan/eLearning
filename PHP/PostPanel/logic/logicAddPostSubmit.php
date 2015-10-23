<?php

  $postTitle = mysqli_real_escape_string($dbc,trim($_REQUEST['postTitle']));

  if (!empty($postTitle)) {

    //  $query = "INSERT INTO `post`(`Chapter_Id`, `Title`, `Date_Of_Post`) VALUES ('".$_SESSION['addPostChapterId']."','".$postTitle."',Now())";
    //  echo "<br><br><br><br><br><br><br><br>".$query;


    mysqli_query($dbc, "INSERT INTO `post`(`Chapter_Id`, `Title`, `Date_Of_Post`) VALUES ('".$_SESSION['addPostChapterId']."','".$postTitle."',Now())");
    $affectedRows = mysqli_affected_rows($dbc);
    if ($affectedRows == 1) {

      $_SESSION['strongMassage'] = "";
      $_SESSION['warningMassage'] = "Post Add.";

      echo "
      <script type=\"text/javascript\">
          $(window).load(function(){
              $('#loginAlerSuccess').modal('show');
          });
      </script>
      ";
    }
    else {
      $_SESSION['strongMassage'] = "Post not add!";
      $_SESSION['warningMassage'] = "Due to system error";

      echo "
      <script type=\"text/javascript\">
          $(window).load(function(){
              $('#loginAlertWrong').modal('show');
          });
      </script>
      ";
    }
  }



?>
