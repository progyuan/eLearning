<div class="container-fluid">
  <div class="jumbotron">
    <h1>
      <?php
        if ($_SESSION['userName'] == "nayeem") echo "Control Post As Admin";
        else echo "Control Your Post";
       ?>
    </h1>
  </div>
</div>
