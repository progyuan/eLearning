<?php
echo "
<script type=\"text/javascript\">
    $(window).load(function(){
        $('#login_button').hide();
        $('#signup_button').hide();
        $('#userNameBar').show().removeClass('hide');
        $('#courseSection').show().removeClass('hide');
        $('#courseSectionNavBarItem').show().removeClass('hide');
    });
</script>
";
 if ($_SESSION['userAs'] == "Teacher") {
  echo "
  <script type=\"text/javascript\">
      $(window).load(function(){
          $('#teacherRegistrationButton').hide();
      });
  </script>
  ";
} else {
  echo "
  <script type=\"text/javascript\">
      $(window).load(function(){
          $('#teacherProfileButton').hide();
          $('#postPanelButton').hide();
      });
  </script>
  ";
}
if ($_SESSION['userName'] == "nayeem") {
  echo "
  <script type=\"text/javascript\">
      $(window).load(function(){
          $('#postPanelButton').show();
          $('#teacherRegistrationButton').hide();
      });
  </script>
  ";
}
?>
