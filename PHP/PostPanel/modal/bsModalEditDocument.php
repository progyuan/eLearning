<!-- Modal -->
<div class="modal fade" id="editDocumentModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:5px 10px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p>
          <h2><span class="glyphicon glyphicon-edit"></span> Edit Document</h2>
          <small> to
          <?php
            echo "\"".$_SESSION['editDocumentPostTitle']."\"";
          ?>
        </small>
        </p>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" action="postPanel.php" method="post">

          <?php
            $documentType = "";
            $documentTitle = "";
            $fullDocument = "";

            $queryDocument = mysqli_query($dbc, "SELECT * FROM `document` WHERE `Document_ID` = ".$_SESSION['editDocumentDocumentId']);
            if ($postDocument = mysqli_fetch_array($queryDocument)) {
              $documentType = $postDocument['Type'];
              $documentTitle = $postDocument['Title'];
              $fullDocument = $postDocument['FullDocument'];
              // echo $fullDocument;

            }
          ?>


          <div class="form-group">
            <label >Type</label> <br>
            <?php
              if ($documentType == "text") {
                ?>
                <input class="radio-inline" type="radio" name="documentType" value="text" checked="checked"> Text
                <input class="radio-inline" type="radio" name="documentType" value="code"> Code
                <?php

              } else {
                ?>
                <input class="radio-inline" type="radio" name="documentType" value="text"> Text
                <input class="radio-inline" type="radio" name="documentType" value="code" checked="checked"> Code
                <?php
              }
            ?>
          </div>
          <div class="form-group">
            <label for="documentHeading">Heading</label>
            <input type="text" name='documentHeading' class="form-control" id="documentHeading" autofocus placeholder="Document Heading" maxlength="30" value="<?php echo $documentTitle ?>">
          </div>
          <div class="form-group">
            <label for="documentDetail">Document</label>
            <textarea name="documentDetail" class="form-control" id="documentDetail" required placeholder="Document Detail" rows="5"><?php echo $fullDocument ?></textarea>
          </div>
            <button type="submit" name="editPostDocumentSubmit" class="btn btn-success btn-block btn-lg" value="editPostDocument"><span class="glyphicon glyphicon-edit"></span> Edit Document</button>
        </form>
      </div>

    </div>

  </div>
</div>
