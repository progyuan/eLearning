<!-- Modal -->
<div class="modal fade" id="addDocumentModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:5px 10px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p>
          <h2><span class="glyphicon glyphicon-plus"></span> Add Document</h2>
          <small> to
          <?php
            echo "\"".$_SESSION['addDocumentPostTitle']."\"";
          ?>
        </small>
        </p>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" action="postPanel.php" method="post">

          <div class="form-group">
            <label >Type</label> <br>
            <input class="radio-inline" type="radio" name="documentType" value="text" checked="checked"> Text
            <input class="radio-inline" type="radio" name="documentType" value="code"> Code
          </div>
          <div class="form-group">
            <label for="documentHeading">Heading</label>
            <input type="text" name='documentHeading' class="form-control" id="documentHeading" autofocus placeholder="Document Heading" maxlength="30">
          </div>
          <div class="form-group">
            <label for="documentDetail">Document</label>
            <textarea name="documentDetail" class="form-control" id="documentDetail" required placeholder="Document Detail" rows="5"></textarea>
          </div>
            <button type="submit" name="addPostDocumentSubmit" class="btn btn-success btn-block btn-lg" value="addPostDocument"><span class="glyphicon glyphicon-plus"></span> Add Document</button>
        </form>
      </div>

    </div>

  </div>
</div>
