<div class="jumbotron">
  <?php
      $queryCourse = mysqli_query($dbc, "SELECT * FROM `course` WHERE `CourseName` = '".$CourseName."' AND `permission` = \"visible\"");
      $numrowsCourse = mysqli_num_rows($queryCourse);
      if ($numrowsCourse > 0) {
          $queryResultCourse = mysqli_fetch_array($queryCourse);
          $courseId = $queryResultCourse['Course_Id'];
          echo "<h2>".$queryResultCourse['CourseName']."</h2>";
          echo "<p><small>".$queryResultCourse['Description']."</small></p>";
      } else {
          header("location:home.php");
      }
  ?>
</div>
