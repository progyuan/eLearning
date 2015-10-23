$(document).ready(function(){
    $("#login_button").click(function(){
        $("#login_modal").modal();
    });

    $("#signup_button").click(function(){
        $("#signup_modal").modal();
    });

    $("#teacherRegistrationButton").click(function(){

        $("#teacherRegistrationModal").modal();
    });

    $("#teacherProfileButton").click(function(){
        $("#teacherProfileModal").modal();
    });
});

$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }

    });
});
