<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php">eLearning</a>
      </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="home.php#section1"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li><a href="course.php"><?php echo $CourseName; ?></a></li>
              <li><a href="home.php#section3">About Us</a></li>
            </ul>
        </div>
    </div>
</nav>
