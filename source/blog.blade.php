---
title: Blog
crawl: true
---

@extends('_layouts.master')

@section('body')
    <section class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (count($posts) == 0)
                        <div class="card blog-card">
                            <div class="card-body">
                                <h5 class="blog-card__title">Unfortunately.</h5>
                                <p class="blog-card__body">No blog posts have been written.</p>
                            </div>
                        </div>
                </div>
                    @else
                    <div class="row">
                        @foreach ($posts as $post)
                                <div class="col-12">
                                    <div class="card blog-card">
                                        <div class="card-body">
                                            <h5 class="blog-card__title">{{ $post->title }}</h5>
                                            <h5 class="blog-card__date">{{ $post->published_on }}</h5>
                                            <div class="blog-card__body">
                                                {!! str_limit($post->getContent(), 300) !!}
                                            </div>
                                            <a href="{{ $post->getPath() }}" class="blog-card__link">Read More ></a>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                    @endif
            </div>
        </div>
    </section>
@endsection
