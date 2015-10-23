<nav class="col-sm-3">
  <ul class="nav nav-pills nav-stacked">
    <?php
    $queryChapter = mysqli_query($dbc, "SELECT `Chapter_Id`,`ChapterName` FROM `chapter` WHERE `Course_Id` = ".$queryResultCourse['Course_Id']." AND `permission` = \"visible\"");
    $numrowsChapter = mysqli_num_rows($queryChapter);
    if ($numrowsChapter > 0) {
      $chapterIndex = 0;
      while ($queryResultChapter = mysqli_fetch_array($queryChapter)) {
        $chapterIndex++;
        echo "<li><h3>".$queryResultChapter['ChapterName']."</h3></li>";
        $queryPost = mysqli_query($dbc, "SELECT `Title` FROM `post` WHERE `Chapter_Id` = ".$queryResultChapter['Chapter_Id']." AND `permission` = \"visible\"");
        $numrowsPost = mysqli_num_rows($queryPost);
        if ($numrowsPost > 0) {
          $postIndex = 0;
          while ($queryResultPost = mysqli_fetch_array($queryPost)) {
            $postIndex++;
            //echo $chapterIndex.$postIndex;
            if ($postIndex == 1 && $chapterIndex == 1) {
              echo "<li class=\"active\" ><a href=\"#section".$chapterIndex.$postIndex."\" data-toggle=\"pill\">";
            } else {
              echo "<li><a href=\"#section".$chapterIndex.$postIndex."\" data-toggle=\"pill\">";
            }
            echo "<h4>".$queryResultPost['Title']."</h4>";
            echo "</a></li>";
          }
        }


      }
    }
    ?>
  </ul>
</nav>
