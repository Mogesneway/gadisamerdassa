$(document).ready(function() {
    $('#contactForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'subIndexes/send_email.php',
            data: $(this).serialize(),
            success: function(response) {
                $('#formResponse').html(response);
            }
        });
    });
});
