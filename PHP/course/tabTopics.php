<div class="col-sm-9 tab-content">
  <?php

    $queryAllChapterInCourse = mysqli_query($dbc, "SELECT `Chapter_Id`  FROM `chapter` WHERE `Course_Id` = ".$courseId." AND `permission` = \"visible\"");
    for($indexChapter = 1 ; $queryResultAllChapterInCourse = mysqli_fetch_array($queryAllChapterInCourse) ; $indexChapter++) {
      // $query = "SELECT `Post_Id` FROM `post` WHERE `Chapter_Id` = ".$queryResultAllChapterInCourse['Chapter_Id']." AND `permission` = \"visible\"";
      // echo $query;
      $queryAllPostInChapter = mysqli_query($dbc, "SELECT `Post_Id` FROM `post` WHERE `Chapter_Id` = ".$queryResultAllChapterInCourse['Chapter_Id']." AND `permission` = \"visible\"");
      for($indexPost = 1 ; $queryResultAllPostInChapter = mysqli_fetch_array($queryAllPostInChapter); $indexPost++) {
        // echo "<div id=\"section".$index."\" class=\"tab-pane fade in active\">";
        if ($indexChapter == 1 && $indexPost == 1) {
            echo "<div id=\"section".$indexChapter.$indexPost."\" class=\"tab-pane fade in active\">";
        }
        else {
            echo "<div id=\"section".$indexChapter.$indexPost."\" class=\"tab-pane fade in\">";
        }

        //echo $indexChapter.$indexPost;
        $queryDocument = mysqli_query($dbc, "SELECT * FROM `Document` WHERE `Post_Id` = ".$queryResultAllPostInChapter['Post_Id']);
        $numrowsDocument = mysqli_num_rows($queryDocument);
        if ($numrowsDocument > 0) {
          while ($queryResultDocument = mysqli_fetch_array($queryDocument)) {
            echo "<h2>".$queryResultDocument['Title']."</h2>";
            if ($queryResultDocument['Type'] == 'code') {
              echo "<pre>".$queryResultDocument['FullDocument']."</pre>";
            } else {
              echo "<p>".$queryResultDocument['FullDocument']."</p>";
            }
          }
        }
        echo "</div>";
      }
    }

    mysqli_close($dbc);

  ?>

  </div>
</div>
