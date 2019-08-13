$(document).ready(function () {
    $('.disable_submit').addClass('button_disabled').attr('disabled', false);
});

function clearAllInputs(selector) {
    $(selector).find(':input').each(function () {
        if (this.type == 'submit') {
            //do nothing
        } else if (this.type == 'checkbox' || this.type == 'radio') {
            this.checked = false;
        } else if (this.type == 'file') {
            var control = $(this);
            control.replaceWith(control = control.clone(true));
        } else {
            $(this).val('');
        }
    });
}

$("#subscriptionForm").validate({
    rules: {
        name: {
            required: true,
            minlength: 4,
            maxlength: 45
        },
        email: {
            required: true,
            email: true
        }
    },
    messages: {
        name: {
            required: "Please enter your name",
            minlength: "Please enter at least 4 characters"
        },
        email: {
            required: "Please enter your email address",
            email: "Please enter a valid email"
        }
    }
});

$('#subscriptionForm').submit(function (event) {
    event.preventDefault();

    if (!$('#subscriptionForm').valid()) {
        return false;
    }

    var data = $("#subscriptionForm").serialize();

    $.ajax({
        type: 'POST',
        url: config.api_url + "/stt/newsletter",
        dataType: "json",
        contentType: 'application/json',
        data: JSON.stringify($(this).serializeJSON()),
    }).done(function (response) {
        $('#subscriptionModal').modal('hide');
        clearAllInputs('#subscriptionModal');
        $('#submissionModalContent').addClass('alertSuccess');
        $('#alertText').text('Subscription Successful');
        $('#submissionModal').modal('show');

        setTimeout(function () {
            $('.disable_submit').addClass('button_disabled').attr('disabled', false);
        }, 2000);
    }).fail(function (xhr, textStatus, errorThrown) {
        console.log(xhr.responseText);
    });
});