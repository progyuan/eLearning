<?php

  $chapterName = mysqli_real_escape_string($dbc,trim($_REQUEST['chapterName']));

  if (!empty($chapterName)) {

    //  $query = "INSERT INTO `post`(`Chapter_Id`, `Title`, `Date_Of_Post`) VALUES ('".$_SESSION['addPostChapterId']."','".$postTitle."',Now())";
    //  echo "<br><br><br><br><br><br><br><br>".$query;
    
    mysqli_query($dbc, "INSERT INTO `chapter`(`Course_Id`, `ChapterName`) VALUES (".$_SESSION['addChapterCourseId'].",'".$chapterName."')");
    $affectedRows = mysqli_affected_rows($dbc);
    if ($affectedRows == 1) {

      $_SESSION['strongMassage'] = "";
      $_SESSION['warningMassage'] = "Chapter Add.";

      echo "
      <script type=\"text/javascript\">
          $(window).load(function(){
              $('#loginAlerSuccess').modal('show');
          });
      </script>
      ";
    }
    else {
      $_SESSION['strongMassage'] = "Chaper not add!";
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
