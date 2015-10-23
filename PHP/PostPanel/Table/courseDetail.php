<table class="table">
    <thead>
      <tr>
        <th>Serial Number</th>
        <th>Course Name</th>
        <th>Starting Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $queryCourse = "";
        if ($_SESSION['userName'] == "nayeem") {
          $queryCourse = mysqli_query($dbc, "SELECT * FROM `course` ORDER BY `Course_Id` DESC ");
        } else {
          $queryCourse = mysqli_query($dbc, "SELECT * FROM `course` WHERE `Register_Id` = (SELECT `Register_Id` FROM register WHERE `UserName` = '".$_SESSION['userName']."' ) ORDER BY `Course_Id` DESC ");
        }
        $numrowsCourse = mysqli_num_rows($queryCourse);
        $courseArray = array();
        if ($numrowsCourse > 0) {


          $index = 0;
          while ($queryResultCourse = mysqli_fetch_array($queryCourse)) {
            $index++;
            if ($index%2 == 1) {
              echo "<tr class=\"success\">";
            } else {
              echo "<tr class=\"danger\">";
            }
            echo "<td>".$index."</td>";
            echo "<td>".$queryResultCourse['CourseName']."</td>";
            echo "<td>".$queryResultCourse['StartingDate']."</td>";
            array_push($courseArray,$queryResultCourse['Course_Id']);
            // print_r($_SESSION['courseIdArray']);
          }

        }
        $_SESSION['courseIdArray'] = $courseArray;
      ?>
    </tbody>
  </table>
