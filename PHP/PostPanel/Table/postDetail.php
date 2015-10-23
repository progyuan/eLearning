<table class="table">
    <thead>
      <tr>
        <th>Serial Number</th>
        <th>Course Name</th>
        <th>Chapter Name</th>
        <th>Post Title</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $allChapterArray = $_SESSION['allChapterId'];
        // print_r($allChapterArray);
        $chapterIdArray = "";
        $index = 0;
        foreach ($allChapterArray as $courseId => $chapterArray) {
          // print_r($chapterArray);

          foreach ($chapterArray as $chapterId) {
              $postIdArray = array();
              $queryPost = mysqli_query($dbc, "SELECT * FROM `post` WHERE `Chapter_Id` = ".$chapterId);
                $numrowsPost = mysqli_num_rows($queryPost);
                if ($numrowsPost > 0) {
                    while ($queryResultPost = mysqli_fetch_array($queryPost)) {
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
                        $queryChapterName = mysqli_query($dbc, "SELECT `ChapterName` FROM `chapter` WHERE `Chapter_Id` =".$chapterId);
                        if ($chapterName = mysqli_fetch_array($queryChapterName)) {
                          echo "<td>".$chapterName['ChapterName']."</td>";
                        }
                        echo "<td>".$queryResultPost['Title']."</td>";
                        array_push($postIdArray,$queryResultPost['Post_Id']);
                    }

                }

                $chapterIdArray[$chapterId] = $postIdArray;
          }

          $allPostArray[$courseId] = $chapterIdArray;

        }

        $_SESSION['allPostId'] = $allPostArray;
        // print_r($_SESSION['allPostId']);

      ?>
    </tbody>
  </table>
