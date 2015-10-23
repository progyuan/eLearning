<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="350">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">eLearning</a>
    </div>
    <!-- start navbar -->
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#Home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li id="courseSectionNavBarItem" class="hide"><a href="#courseSection">Course</a></li>
          <li><a href="#aboutUsSection">About Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li id="signup_button"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li id="login_button"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li class="dropdown hide" id="userNameBar">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['userName']; ?>
                  <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" style="padding:0;">
                <li id="teacherRegistrationButton">
                  <button class="btn btn-block">
                    <span class="glyphicon glyphicon-book"></span> Be A Teacher
                  </button>
                </li>
                <li id="teacherProfileButton">
                  <button class="btn btn-block">
                    <span class="glyphicon glyphicon-picture"></span> See Your Profile
                  </button>
                </li>
                <form action="postPanel.php" method="post">
                  <li id="postPanelButton" >
                    <button type="submit" name="postPanelSubmit" class="btn btn-block" value="postPanel">
                      <span class="glyphicon glyphicon-list"></span> Post Panel
                    </button>
                  </li>
                </form>
                <form action="home.php" method="post">
                    <li id="logoutButton" >
                      <button type="submit" name="logoutSubmit" class="btn btn-block" value="logout">
                        <span class="glyphicon glyphicon-log-out"></span> LogOUT
                      </button>
                    </li>
                </form>
              </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
