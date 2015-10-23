
      <?php
        // print_r($_SESSION['allPostId']);
        $allPostArray = $_SESSION['allPostId'];

        ?>

        <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
          <?php
            if ($_SESSION['userName'] != "nayeem") {
           ?>
         <a href="postPanel.php?addCourse='true'" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-plus"></span> Add Course </a>
         <?php } ?>
        </div>
        <div class="col-sm-3">
        </div>
        </div>

        <?php
        if (!empty($allPostArray)) {
        foreach ($allPostArray as $courseId => $chapterArray) {

            if ($_SESSION['userAs'] != "Teacher") {
           ?>
          <div class="progress list-group">
          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
          </div>
          </div>
          <?php }

          echo "<div class=\"list-group\">";
          echo "<li class=\"list-group-item\">";
          ?>


          <div class="row">
          <div class="col-sm-6 bg-primary">



            <h4 class="list-group-item-heading">Course Name:</h4>
            <p class="list-group-item-text ">
          <?php
          $queryCourseName = mysqli_query($dbc, "SELECT `CourseName`,`permission` FROM `course` WHERE `Course_Id` =".$courseId);
          if ($courseName = mysqli_fetch_array($queryCourseName)) {
            echo "<td>".$courseName['CourseName']."</td>";
            $coursePermission = $courseName['permission'];
          }
          ?>
        </p>


        </div>
        <div class="col-sm-6">
          <?php
            if ($_SESSION['userName'] != "nayeem") {
           ?>
        <a href="postPanel.php?addChapter='true'&courseId=<?php echo $courseId."&courseName=".$courseName['CourseName'] ?>" class="btn btn-primary "><span class="glyphicon glyphicon-plus"></span> Add Chapter </a>
          <?php } ?>
        <a href="postPanel.php?permissionCourse='true'&courseId=
          <?php echo $courseId."&coursePermission=".$coursePermission."\"";
            echo "class=\"btn ";
              if($coursePermission == "visible") echo "btn-info";
              else echo "btn-warning";
        ?>
        ">

        <?php
          if ($coursePermission == "visible") {
            echo "<span class=\"glyphicon glyphicon-eye-open\"></span>";
            echo " Visible";
          }
          else {
            echo "<span class=\"glyphicon glyphicon-eye-close\"></span>";
            echo " Hidden";
          }
        ?>

        </a>
        <?php
          if ($_SESSION['userAs'] != "Teacher") {
         ?>
        <a href="postPanel.php?deleteCourseSubmit='true'&courseId=<?php echo $courseId ?>" class="btn btn-danger"><span class="glyphicon glyphicon-minus"></span> Delete </a>
        <?php } ?>
        </div>
        </div>

          <?php
          echo "</li>";
          echo "</div>";
          if (empty($chapterArray)) continue;
          foreach ($chapterArray as $chapterId => $postArray) {
            ?>

            <div class="list-group">
            <li class="list-group-item">


              <div class="row">
              <div class="col-sm-6 bg-success">

            <h4 class="list-group-item-heading">Chapter Name:</h4>
            <p class="list-group-item-text">
            <?php
            $queryChapterName = mysqli_query($dbc, "SELECT `ChapterName`, `permission` FROM `chapter` WHERE `Chapter_Id` =".$chapterId);
            if ($chapterName = mysqli_fetch_array($queryChapterName)) {
                echo "<td>".$chapterName['ChapterName']."</td>";
                $chapterPermission = $chapterName['permission'];
            }
            ?>
          </p>


          </div>
          <div class="col-sm-6">
            <?php
              if ($_SESSION['userName'] != "nayeem") {
             ?>
          <a href="postPanel.php?addPost='true'&chapterId=<?php echo $chapterId."&chapterName=".$chapterName['ChapterName'] ?>" class="btn btn-primary "><span class="glyphicon glyphicon-plus"></span> Add Post </a>
            <?php } ?>
          <a href="postPanel.php?permissionChapter='true'&chapterId=
            <?php echo $chapterId."&chapterPermission=".$chapterPermission."\"";
              echo "class=\"btn ";
                if($chapterPermission == "visible") echo "btn-info";
                else echo "btn-warning";
          ?>
          ">

          <?php
            if ($chapterPermission == "visible") {
              echo "<span class=\"glyphicon glyphicon-eye-open\"></span>";
              echo " Visible";
            }
            else {
              echo "<span class=\"glyphicon glyphicon-eye-close\"></span>";
              echo " Hidden";
            }
          ?>

          </a>
          <?php
            if ($_SESSION['userAs'] != "Teacher") {
           ?>
          <a href="postPanel.php?deleteChapterSubmit='true'&chapterId=<?php echo $chapterId ?>" class="btn btn-danger"><span class="glyphicon glyphicon-minus"></span> Delete </a>
          <?php } ?>
          </div>
          </div>


            </li>
            </div>

            <?php
            foreach ($postArray as $postId) {
              ?>
              <div class="list-group">
              <li class="list-group-item">

              <div class="row">
              <div class="col-sm-6 bg-warning">


              <h4 class="list-group-item-heading">Post Title:</h4>
              <p class="list-group-item-text">
              <?php
              $queryPostTitle = mysqli_query($dbc, "SELECT `Title`,`permission` FROM `post` WHERE `Post_Id` =".$postId);
              if ($postTitle = mysqli_fetch_array($queryPostTitle)) {
                echo "<td>".$postTitle['Title']."</td>";
                $postPermission = $postTitle['permission'];
              }
              ?>
              </p>


              </div>
              <div class="col-sm-6">
                <?php
                  if ($_SESSION['userName'] != "nayeem") {
                 ?>
              <a href="postPanel.php?addPostDetailSubmit='true'&postId=<?php echo $postId."&postTitle=".$postTitle['Title'] ?>" class="btn btn-primary "><span class="glyphicon glyphicon-plus"></span> Add Document </a>
                <?php } ?>
              <a href="postPanel.php?permissionPost='true'&postId=
                <?php echo $postId."&postPermission=".$postPermission."\"";
                  echo "class=\"btn ";
                    if($postPermission == "visible") echo "btn-info";
                    else echo "btn-warning";
              ?>
              ">

              <?php
                if ($postPermission == "visible") {
                  echo "<span class=\"glyphicon glyphicon-eye-open\"></span>";
                  echo " Visible";
                }
                else {
                  echo "<span class=\"glyphicon glyphicon-eye-close\"></span>";
                  echo " Hidden";
                }
              ?>

              </a>
              <?php
                if ($_SESSION['userAs'] != "Teacher") {
               ?>
              <a href="postPanel.php?deletePostSubmit='true'&postId=<?php echo $postId ?>" class="btn btn-danger"><span class="glyphicon glyphicon-minus"></span> Delete </a>
              <?php } ?>
              </div>
              </div>

              </li>
              </div>

              <?php
              $index = 0;

              $queryDocument = mysqli_query($dbc, "SELECT * FROM `document` WHERE `Post_Id` = ".$postId);
              $numrowsDocument = mysqli_num_rows($queryDocument);
              if ($numrowsDocument > 0 && $_SESSION['userName'] != "nayeem") {

                echo "
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th>Serial Number</th>
                      <th>Heading</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                ";

                while ($queryResultDocumnet = mysqli_fetch_array($queryDocument)) {

                  $index++;

                  if ($index%2 == 1) {
                    echo "<tr class=\"success\">";
                  } else {
                    echo "<tr class=\"danger\">";
                  }

                  echo "<td>".$index."</td>";
                  echo "<td>".$queryResultDocumnet['Title']."</td>";
                  ?>
                  <td>
                    <?php
                      if ($_SESSION['userAs'] != "Teacher") {
                     ?>
                    <a href="postPanel.php?deletePostDetailSubmit='true'&documentId=<?php echo $queryResultDocumnet['Document_ID'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-minus"></span> Delete </a>
                    <?php } ?>
                    <a href="postPanel.php?editPostDetailSubmit='true'&documentId=<?php echo $queryResultDocumnet['Document_ID']."&postId=".$postId."&postTitle=".$postTitle['Title'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit </a>
                  </td>
                  <?php
                }
                ?>
                  </tbody>
                </table>

                <!-- <div class="row">
                  <div class="col-sm-6">
                  </div>
                  <div class="col-sm-6">
                    <a href="postPanel.php?addPostDetailSubmit='true'&postId=<?php //echo $postId."&postTitle=".$postTitle['Title'] ?>" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-plus"></span> Add A new document </a>
                  </div>
                </div> -->

                <?php
              }
            }
          }

        }
      }
?>
