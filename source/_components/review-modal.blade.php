<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="reviewForm" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="Name" name="name" required minlength="4">
                    </div>
                    <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input class="form-control" type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Company, service or trader name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="Company, service or trader name" name="company">
                    </div>
                    <div class="form-group">
                        <label>Comment <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3" placeholder="Comment" name="comment" required minlength="150" maxlength="200"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Rating <span class="text-danger">*</span></label>
                        <br>
                        <div class="star-rating" required>
                            <input id="star-rating5" name="rating" type="radio" value="5" class="radio-btn hidden" />
                            <label for="star-rating5" ><span class="fa fa-star"></span></label>
                            <input id="star-rating4" name="rating" type="radio" value="4" class="radio-btn hidden" />
                            <label for="star-rating4" ><span class="fa fa-star"></span></label>
                            <input id="star-rating3" name="rating" type="radio" value="3" class="radio-btn hidden" />
                            <label for="star-rating3" ><span class="fa fa-star"></span></label>
                            <input id="star-rating2" name="rating" type="radio" value="2" class="radio-btn hidden" />
                            <label for="star-rating2" ><span class="fa fa-star"></span></label>
                            <input id="star-rating1" name="rating" type="radio" value="1" class="radio-btn hidden" />
                            <label for="star-rating1" ><span class="fa fa-star"></span></label>
                        </div>
                        <br id="star-ratingLabel">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" value="Submit" class="btn btn-primary disable_submit">Leave Review</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@section('javascript')
<script type="text/javascript">
    
    $( document ).ready(function() {
        $('.disable_submit').addClass('button_disabled').attr('disabled', false);
    });

    $("#reviewForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 4,
                maxlength: 45
            },
            email: {
                required: true,
                email: true
            },
            company: {
                required: true,
                minlength: 4
            },
            comment: {
                required: true,
                minlength: 10,
                maxlength: 200
            },
            rating: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Please enter at least 4 characters",
                maxlength: "Maximum character length is 45"
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email"
            },
            company: {
                required: "Please enter a company, service or trader name",
                minlength: "Please enter at least 4 characters",
                maxlength: "Maximum character length is 45"
            },
            comment: {
                required: "Please enter your review",
                minlength: "Please enter at least 10 characters",
                maxlength: "Maximum character length is 200"
            },
            rating: {
                required: "Please leave a rating out of 5"
            }
        },
        ignore:'',
        errorPlacement: function(error, element) {
            if (element.attr("type") == "radio") {
                error.insertAfter('#star-ratingLabel');
            } else {
                element.after(error);
            }
        }
    });

    $('#reviewForm').submit(function(event) {
        event.preventDefault();

        if(!$('#reviewForm').valid()){
            return false;
        }

        var data = $("#reviewForm").serialize();

        $.ajax({
            type: 'POST',
            url: "{!! $page->apiUrl !!}/stt/review",
            dataType: "json",
            contentType: 'application/json',
            data: JSON.stringify($(this).serializeJSON()),
        }).done(function(response){
            $('#reviewModal').modal('hide');
            $('#submissionModalContent').removeClass('alertError');
            $('#submissionModalContent').addClass('alertSuccess');
            //calls custom clear function
            clearAllInputs('#reviewModal');
            $('#alertText').text('Review Successfully Submitted.');
            console.log(response);
            $('#submissionModal').modal('show');
            $('.disable_submit').addClass('button_disabled').attr('disabled', false);
            setTimeout(function(){
                $('#submissionModal').modal('hide');
            },2000);
        }).fail( function(xhr, textStatus, errorThrown) {
            $('#reviewModal').modal('hide');
            $('#submissionModalContent').removeClass('alertSuccess');

            $('.disable_submit').addClass('button_disabled').attr('disabled', false);

            console.log(xhr.responseText);

            $('#alertText').text('Error submitting form ' + xhr.responseText);
            $('#submissionModal').modal('show');
        });
    });

</script>
@endsection