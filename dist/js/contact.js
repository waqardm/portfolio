
$(function () {
    function after_form_submitted(data) {
        if (data.result == 'success') {
            $('form#form').hide();
            $('#success-message').show();
            $('#error-message').hide();
        } else {
            $('#error-message').append('<ul></ul>');

            jQuery.each(data.errors, function (key, val) {
                $('#error-message ul').append('<li>' + key + ':' + val + '</li>');
            });
            $('#success-message').hide();
            $('#error-message').show();

            //reverse the response on the button
            $('button[type="button"]', $form).each(function () {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if (label) {
                    $btn.prop('type', 'submit');
                    $btn.text(label);
                    $btn.prop('orig_label', '');
                }
            });

        } //else
    }

    $('#form').submit(function (e) {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('button[type="submit"]', $form).each(function () {
            $btn = $(this);
            $btn.prop('type', 'button');
            $btn.prop('orig_label', $btn.text());
            $btn.text('Sending ...');
        });


        $.ajax({
            type: "POST",
            url: '../handler.php',
            data: $form.serialize(),
            success: after_form_submitted,
            dataType: 'json'
        });

    });
});
