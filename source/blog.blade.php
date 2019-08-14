---
title: Blog
crawl: true
---

@extends('_layouts.master')

@section('body')
    <section class="section-two">
        <div class="container">
            <div class="col-12">
                <div class="card blog-card">
                    <div class="card-body">
                        <h5 class="pull-left">New feature: Whitelabel users account limit can be changed</h5>
                        <p class="pull-right">19.09.1690</p>
                        <p class="pull-left">When we created the whitelabel option, we presumed, as providers pay for users hosting, limiting users max accounts to one was a logical choice.

                            As the amount of whitelabels grows into the 100s, we have noticed this limit does not work for all providers, so we have now made it configurable!</p>
                        <a href="/" class="text-primary pull-left">Read More ></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
