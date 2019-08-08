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
        <link href="https://fonts.googleapis.com/css?family=Dosis:600|Open+Sans:300&display=swap" rel="stylesheet">
        <!-- Icons CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/page_structure.css', 'assets/build') }}">
        <link rel="stylesheet" href="{{ mix('css/components.css', 'assets/build') }}">
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">

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
                        <h1>Features</h1>
                    </div>
                </div>
            </div>
        </div>
        @yield('body')
        @include('_partials.footer')

    @endif


    <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <!-- Custom JS -->
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


    </script>
    </body>
</html>
