$(document).ready(function () {

    
    $('.uploadfile').change(function (e) {
        var formData = new FormData($('#pic-upload')[0]);
        //codes in AJAX for uploading of picture
        $.ajax({
            type: 'POST',
            url: 'upload.inc.php',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (result) {
                if (result.ok) {
                    $('#imagesrc').attr("src",result.temp_path);
                    $('.picpath').val(result.temp_path);
                } else {
                    alert('Error encountered while trying to upload the picture!');
                }
            }
        });
        return false;
    });


});