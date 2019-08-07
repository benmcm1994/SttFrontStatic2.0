@extends('_layouts.master')

@section('body')
    <section class="section">
        <div class="container">
            @yield('content')
            <br/>
            <div class="social social-boxed social-colored pull-right" style="color: white; cursor: pointer;">
                <a class="social-facebook" data-js="facebook-share"><i class="fa fa-facebook"></i></a>
                <a class="social-twitter" data-js="twitter-share"><i class="fa fa-twitter"></i></a>
            </div>
            <p>
                Posted <strong>{{ date('jS F, Y', strtotime($page->published_on)) }}</strong> by
                <strong>{{ $page->author }}</strong>
            </p>
        </div>
    </section>
@endsection

@section('javascript')

    <script type="text/javascript">

        $(document).ready(function () {
            var twitterShare = document.querySelector('[data-js="twitter-share"]');

            var title = "{!! $page->title !!}";

            twitterShare.onclick = function (e) {
                e.preventDefault();
                var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL + '&text=Blog post: ' + title, +'&via=tifintech', 'twitter-popup', 'height=350,width=600');
                if (twitterWindow.focus) {
                    twitterWindow.focus();
                }
                return false;
            }

            var facebookShare = document.querySelector('[data-js="facebook-share"]');
            facebookShare.onclick = function (e) {
                e.preventDefault();
                var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
                if (facebookWindow.focus) {
                    facebookWindow.focus();
                }
                return false;
            }
        });

    </script>
@endsection
