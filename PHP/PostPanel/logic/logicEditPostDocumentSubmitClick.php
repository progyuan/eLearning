<?php

  $documentType = mysqli_real_escape_string($dbc,trim($_REQUEST['documentType']));
  $documentHeading = mysqli_real_escape_string($dbc,trim($_REQUEST['documentHeading']));
  $documentDetail = $_REQUEST['documentDetail'];

  if (!empty($documentDetail)) {

    // $query = "UPDATE `document` SET`Title`= '".$documentHeading."',`Type`='".$documentType."',`FullDocument`= '".$documentDetail."' WHERE `Document_ID`= ".$_SESSION['editDocumentDocumentId'];
    // echo "<br><br><br><br><br><br><br><br>".$query;

    mysqli_query($dbc, "UPDATE `document` SET`Title`= '".$documentHeading."',`Type`='".$documentType."',`FullDocument`= '".$documentDetail."' WHERE `Document_ID`= ".$_SESSION['editDocumentDocumentId']);
    $affectedRows = mysqli_affected_rows($dbc);
    if ($affectedRows == 1) {

      $_SESSION['strongMassage'] = "";
      $_SESSION['warningMassage'] = "Document Edited.";

      echo "
      <script type=\"text/javascript\">
          $(window).load(function(){
              $('#loginAlerSuccess').modal('show');
          });
      </script>
      ";
    }
    else {
      $_SESSION['strongMassage'] = "Document not edit!";
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
