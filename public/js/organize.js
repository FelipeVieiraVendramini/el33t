var scheduleChildNumber = 1;

$(function() {
    // Create the preview image
    $(".eventLogo").change(function (){
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-filename").val(file.name);
            // img.attr('src', e.target.result);
            $(".image-preview").html(
                "<img src=\""+e.target.result+"\" width=\"240\" />"
            );
        };
        reader.readAsDataURL(file);
    });

    $('#codGame').on('change', function(){
        var data = {
            'id': $(this).val(),
            '_token': $(this).attr('csrf')
        };

        $.post($(this).attr('url-target'), data, function(data, textStatus, xhr) {
            console.log(data);
            $('.platform-btn-group').html(data);
        });
    });

    $('#eventModeTeams').hide();
    $('#eventModeSolo').hide();
    $('#paid-event').hide();
});

function switchRegisterMode(mode) {
    var team = $('#eventModeTeams');
    var solo = $('#eventModeSolo');

    if (mode === 0) {
        team.show(500);
        solo.hide();
    } else {
        solo.show(500);
        team.hide();
    }
}

function switchInscriptionMode(mode) {
    var div = $('#paid-event');

    if (mode === 1) {
        div.show(500);
    } else {
        div.hide();
    }
}