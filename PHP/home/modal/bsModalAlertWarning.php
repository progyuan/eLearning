<div class="modal fade in" id="loginAlertWrong" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p class="text text-warning">
          <button type="button" class="close" data-dismiss="modal" style="background-color:inherit;color:rgb(15, 16, 18);">&times;</button>
          <?php
            echo "<strong>".$_SESSION['strongMassage']." </strong> ".$_SESSION['warningMassage'];
          ?>
        </p>
      </div>
    </div>
  </div>
</div>
