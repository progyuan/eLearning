<div id="courseSection" class="container-fluid hide">
  <div class="well well-lg">
    <h1><strong>Course</strong></h1>
  </div>

  <?php
  include('connection.php');

  $queryCourse = mysqli_query($dbc, "SELECT * FROM `course` WHERE `permission` = 'visible' ORDER BY `Course_Id` DESC ");
  $numrowsCourse = mysqli_num_rows($queryCourse);
  if ($numrowsCourse > 0) {
    $index = 0;
    while ($queryResultCourse = mysqli_fetch_array($queryCourse)) {
      if ($index%3 == 0) echo "<div class=\"row\">";
        ?>
        <div class="col-sm-4">
          <form action="course.php" method="post">
            <input type="hidden" name="course" value=<?php echo "'".$queryResultCourse['CourseName']."'"; ?>>
            <button type="submit" class="thumbnail">
              <img src= <?php echo "'../image/ci/".$queryResultCourse['imagePath']."'"; ?> class="img-responsive img-thumbnail img-rounded"/>
            </button>
          </form>
        </div>
        <?php
      if ($index%3 == 2) echo "</div>";
      $index++;
    }
    if (--$index%3 != 2) echo "</div>";
  }

  mysqli_close($dbc);
  ?>

</div>
