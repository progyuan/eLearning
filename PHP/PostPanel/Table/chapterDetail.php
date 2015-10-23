<table class="table">
    <thead>
      <tr>
        <th>Serial Number</th>
        <th>Course Name</th>
        <th>Chapter Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $courseArray = $_SESSION['courseIdArray'];
        // print_r($courseArray);
        $allChapterArray = array();
        $index = 0;
        foreach ($courseArray as $courseId) {
          $chapterArray = array();
          $queryChapter = mysqli_query($dbc, "SELECT * FROM `chapter` WHERE `Course_Id` = ".$courseId);
          $numrowsChapter = mysqli_num_rows($queryChapter);
          if ($numrowsChapter > 0) {
            $index = 0;

            while ($queryResultChapter = mysqli_fetch_array($queryChapter)) {
              $index++;
              if ($index%2 == 1) {
                echo "<tr class=\"success\">";
              } else {
                echo "<tr class=\"danger\">";
              }
              echo "<td>".$index."</td>";
              $queryCourseName = mysqli_query($dbc, "SELECT `CourseName` FROM `course` WHERE `Course_Id` =".$courseId);
              if ($courseName = mysqli_fetch_array($queryCourseName)) {
                echo "<td>".$courseName['CourseName']."</td>";
              }
              echo "<td>".$queryResultChapter['ChapterName']."</td>";
              array_push($chapterArray,$queryResultChapter['Chapter_Id']);
            }
          }
          $allChapterArray[$courseId] = $chapterArray;
        }
        $_SESSION['allChapterId'] = $allChapterArray;
        // print_r($_SESSION['allChapterId']);
      ?>
    </tbody>
  </table>
