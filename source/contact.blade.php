---
title: Contact Us
crawl: true
---

@extends('_layouts.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card contact-card">
                        <div class="card-body">
                            <p>If you would like to find out more about the many benefits of the <strong>Social Trader Tools</strong> platform,
                                please drop us a quick message by email or via the form and one of our team will get back to you.</p>
                            <p>Email: <strong>info@socialtradertools.com</strong></p>
                            <p class="d-inline-block">Social Media: </p>
                            <a href="{!! $page->facebookUrl !!}"><i class="fa fa-facebook-square fa-2x contact-card__social-link" aria-hidden="true"></i></a>
                            <a href="{!! $page->twitterUrl !!}"><i class="fa fa-twitter-square fa-2x contact-card__social-link" aria-hidden="true"></i></a>
                            <a href="{!! $page->linkedInUrl !!}"><i class="fa fa-linkedin-square fa-2x contact-card__social-link" aria-hidden="true"></i></a>
                            <a href="{!! $page->youtubeUrl !!}"><i class="fa fa-youtube-square fa-2x contact-card__social-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="card contact-card">
                        <div class="card-body">
                            <form id="contactForm">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" rows="4" placeholder="Message" name="message" required></textarea>
                                </div>
                                <button type="submit" value="Submit" class="btn btn-primary btn-block disable_submit">Send Enquiry</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('_components.submission-modal')

@endsection


@section('javascript')
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.disable_submit').addClass('button_disabled').attr('disabled', false);
        });

        $("#contactForm").validate({
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
                message: {
                    required: true
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
                },
                message: {
                    required: "Please enter your enquiry"
                }
            }
        });

        $('#contactForm').submit(function(event){
            event.preventDefault();

            if(!$('#contactForm').valid()){
                return false;
            }

            if($('#contactForm').valid()){
                $('.disable_submit').addClass('button_disabled').attr('disabled', true);
            }

            $.ajax({
                type: 'POST',
                url: "{!! $page->apiUrl !!}/stt/contact",
                dataType: "json",
                contentType: 'application/json',
                data: JSON.stringify($(this).serializeJSON()),
            }).done(function(response){
                clearAllInputs('#contactForm');
                $('#submissionModalContent').addClass('alertSuccess');
                $('#alertText').text('Enquiry made. We will get back to you as soon as possible.');
                $('#submissionModal').modal('show');
                $('.disable_submit').addClass('button_disabled').attr('disabled', false);
                setTimeout(function(){
                    $('#submissionModal').modal('hide');
                },2000);
            }).fail(function(xhr, textStatus, errorThrown){
                $('#submissionModalContent').removeClass('alertSuccess');
                $('#alertText').text("Error: " + xhr.responseText);
                $('#submissionModal').modal('show');
                $('.disable_submit').addClass('button_disabled').attr('disabled', false);
                console.log(xhr.statusText);
                console.log(textStatus);
                console.log(error);
            });
        });
    </script>
@endsection
