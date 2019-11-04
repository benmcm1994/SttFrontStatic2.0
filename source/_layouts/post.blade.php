---
crawl: true
---

@extends('_layouts.master')

@section('body')
    <section class="section">
        <div class="container post-container">
            <div class="row">
                <div class="col-12 text-center text-md-left">
                    @yield('content')
                    <br/>
                    <div class="pull-right" style="color: white; cursor: pointer;">
                        <a data-js="facebook-share"><i class="fa fa-facebook-square fa-2x social-link" aria-hidden="true"></i></a>
                        <a data-js="twitter-share"><i class="fa fa-twitter-square fa-2x social-link" aria-hidden="true"></i></a>
                    </div>
                    <p>
                        Posted <strong>{{ date('jS F, Y', strtotime($page->published_on)) }}</strong> by
                        <strong>{{ $page->author }}</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection



@section('javascript')

    <script>

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
