<?php
echo "
<script type=\"text/javascript\">
    $(window).load(function(){
        $('#login_button').show();
        $('#signup_button').show();
        $('#userNameBar').hide();
        $('#courseSection').hide();
        $('#courseSectionNavBarItem').hide();

    });
</script>
";
$_SESSION['userName'] = "";
$_SESSION['userAs'] = "";
?>
