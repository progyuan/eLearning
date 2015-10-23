<?php

  $documentType = mysqli_real_escape_string($dbc,trim($_REQUEST['documentType']));
  $documentHeading = mysqli_real_escape_string($dbc,trim($_REQUEST['documentHeading']));
  $documentDetail = str_replace("'", "\'", $_REQUEST['documentDetail']);

  if (!empty($documentDetail)) {
    // $query = "INSERT INTO `document`(`Post_Id`, `Title`, `Type`, `FullDocument`) VALUES (".$_SESSION['addDocumentPostId'].",'".$documentHeading."','".$documentType."','".$documentDetail."'";
    // echo "<br><br><br><br><br><br><br><br>".$query;
    mysqli_query($dbc, "INSERT INTO `document`(`Post_Id`, `Title`, `Type`, `FullDocument`) VALUES (".$_SESSION['addDocumentPostId'].",'".$documentHeading."','".$documentType."','".$documentDetail."')");
    $affectedRows = mysqli_affected_rows($dbc);
    if ($affectedRows == 1) {

      $_SESSION['strongMassage'] = "";
      $_SESSION['warningMassage'] = "Document Added.";

      echo "
      <script type=\"text/javascript\">
          $(window).load(function(){
              $('#loginAlerSuccess').modal('show');
          });
      </script>
      ";
    }
    else {
      $_SESSION['strongMassage'] = "Document Addition Failed!";
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
