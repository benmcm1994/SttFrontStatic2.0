<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <meta name="keywords" content="Multi Account Manager, Trade Copier, Money Manager, FOREX, Metatrader 4, MT4"/>
        <meta name="description" content="Social Trader Tools is a web based platform for anyone that uses MT4. Hosted in the cloud 24/7 without the hassle of a VPS, allowing you to copy trades to any amount of trading accounts and much more.">
        <meta name="author" content="Titanium Financial Technology">


        <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
        <link rel="icon" type="image/ico" href="/assets/images/favicon.ico"/>

        <title>
            @if ($page->getPath() == '')
                Social Trader Tools :: A web based platform for anyone that uses MT4.
            @else
                {{ $page->title }} :: Social Trader Tools
            @endif
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Dosis:400,600|Open+Sans:400,600&display=swap" rel="stylesheet">
        <!-- Icons CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    </head>
    <body>

    @if ( $page->getPath() == '' )

        <div class="home-header">
            @include('_partials.navbar')
            @include('_partials.home-header')
        </div>
        @yield('body')
        @include('_partials.footer')

    @else
        <div class="header">
            @include('_partials.navbar')
            <div class="container text-center">
                <div class="row">
                    <div class="col-12">
                        <h1>{{ $page->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
        @yield('body')
        @include('_partials.footer')

    @endif

    @include('_components.subscription-modal')

    <!-- Custom JS -->
    <script src="/assets/build/js/config.js"></script>
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    <script>

        $(function () {
            'use strict'

            function toggleOffcanvas(){
                $('.offcanvas-collapse').toggleClass('open')
            }

            $('.closebtn').on('click', function(){
                toggleOffcanvas();
            })

            $('[data-toggle="offcanvas"]').on('click', function () {
                toggleOffcanvas();
            })

            $('.nav-link').on('click', function(){
                toggleOffcanvas();
            })
        });

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

    @yield('javascript')

    </body>
</html>
