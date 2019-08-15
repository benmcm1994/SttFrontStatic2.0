@extends('_layouts.master')

@section('body')
    <section class="key-features">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center order-first">
                    <h2 class="section-header">Key Features</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 text-center order-second text-center">
                    <img src="/assets/images/responsive.png" alt="">
                </div>
                <div class="col-12 col-md-6 order-last text-center text-md-left">
                    <h4 class="feature-heading">Account Manager</h4>
                    <p><strong>Social Trader Tools</strong> allows you to manage an unlimited amount of MT4 accounts from <strong>any MT4 broker</strong>,
                        all from one platform. There is <strong>no special software</strong>, <strong>no complex configurations</strong> and <strong>no VPS servers required.</strong>
                    </p>
                    <p>Simply upload your account credentials to the platform and your accounts will be hosted securely in the cloud 24/7.
                        Once you have accounts added you can utilise the platform in many ways.
                    </p>
                    <a href="/account-manager/" class="btn btn-primary rounded-pill mobile-btn">ACCOUNT MANAGER</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-6 order-last order-md-first text-center text-md-left">
                    <h4 class="feature-heading">Trade Copier</h4>
                    <p>The core feature of <strong>Social Trader Tools</strong> is trade copying. Our trade copier is
                        the <strong>fastest copier in the market with an average replication speed of 50ms.</strong>
                    </p>
                    <p>Once you have your accounts connected to the platform you can setup trade copiers. Trade copiers
                        are highly configurable with various risk types and settings covering all scenarios.
                    </p>
                    <a href="/trade-copier/" class="btn btn-primary rounded-pill mobile-btn">TRADE COPIER</a>
                </div>
                <div class="col-12 col-md-6 order-first order-md-last text-center">
                    <img src="/assets/images/copier.png" alt="">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-6 order-first order-md-first text-center">
                    <img src="/assets/images/signal.png" alt="">
                </div>
                <div class="col-12 col-md-6 order-last order-md-last text-center text-md-left">
                    <h4 class="feature-heading">Signal Provider</h4>
                    <p>With <strong>Social Trader Tools</strong> you can offer your own trading account out to other
                        users as a signal via a <strong>signal page</strong>.
                    </p>
                    <p>Signal pages are publicly viewable urls with a long random code, so it can not be guessed,
                        so you are never competing with other signals on the platform. They can be simply used to
                        showcase your trading results or you can define terms by which users can follow your signals either paid or for free.
                    </p>
                    <a href="/signal-provider/" class="btn btn-primary rounded-pill mobile-btn">SIGNAL PROVIDER</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-6 order-last order-md-first  text-center text-md-left">
                    <h4 class="feature-heading">Whitelabel</h4>
                    <p>If you are looking to <strong>start a trading business</strong> or have an existing brand, you can whitelabel our
                        platform and offer out signals to your own audience. Whitelabels can be setup with a <strong>signal leader board</strong>,
                        creating your own mini signal site.
                    </p>
                    <p>You can choose from various style options and add your brands logo.
                        You can also restrict what brokers can be used on your Whitelabel and even add a
                        <strong>broker affiliate link</strong> to funnel users to your preferred broker.
                    </p>
                    <p><strong>Whitelabels are currently FREE. This will be changing soon, so don't delay and get yours setup today!</strong></p>
                    <a href="/whitelabel/" class="btn btn-primary rounded-pill mobile-btn">WHITELABEL</a>
                </div>
                <div class="col-12 col-md-6 order-first order-md-last text-center">
                    <img src="/assets/images/whitelabel.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="feature-glance">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-header">Features at a glance</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-tachometer fa-3x" aria-hidden="true"></i>
                            <p><strong>No limits</strong></p>
                            <p>Manage an as many MT4 accounts as needed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-random fa-3x" aria-hidden="true"></i>
                            <p><strong>Reverse copy</strong></p>
                            <p>Turn losing strategies into profitable ones.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-money fa-3x" aria-hidden="true"></i>
                            <p><strong>Signal selling</strong></p>
                            <p>Sell your trade signals to clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-users fa-3x" aria-hidden="true"></i>
                            <p><strong>Multiple users</strong></p>
                            <p>Manage your profile as a team.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-desktop fa-3x" aria-hidden="true"></i>
                            <p><strong>Web based interface</strong></p>
                            <p>Manage accounts from the desk or on the go.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-money fa-3x" aria-hidden="true"></i>
                            <p><strong>Signal selling</strong></p>
                            <p>Sell your trade signals to clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-tag fa-3x" aria-hidden="true"></i>
                            <p><strong>Whitelabel</strong></p>
                            <p>Rebrand our platform for your clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-cloud fa-3x" aria-hidden="true"></i>
                            <p><strong>No hosting</strong></p>
                            <p>Accounts hosted securely in the cloud 24/7.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                            <p><strong>Email alerts</strong></p>
                            <p>Real time email alerts for any trading activity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-bullhorn fa-3x" aria-hidden="true"></i>
                            <p><strong>Push events</strong></p>
                            <p>Real time trading events for websites or apps.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-shield fa-3x" aria-hidden="true"></i>
                            <p><strong>Peace of mind</strong></p>
                            <p>Automated equity protection options.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-share-alt fa-3x" aria-hidden="true"></i>
                            <p><strong>Trade copier</strong></p>
                            <p>Highly configurable, low latency trade copier.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-header">Testimonials</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach($reviews as $review)
                                @if ($review->status === 'published')
                                    <div class="swiper-slide">
                                        <div class="card review-card">
                                            <div class="card-body">
                                                <div class="rating">
                                                    @for($i = 0; $i < $review->rating; $i++)
                                                        <label class="fa fa-star active"></label>
                                                    @endfor
                                                </div>
                                                <p class="comment"><em>{{ $review->comment }}</em></p>
                                                <h6>{{ $review->name }}</h6>
                                                <p><small>{{ $review->company }}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-primary rounded-pill" data-toggle="modal" data-target="#reviewModal">LEAVE US A REVIEW</button>
                </div>
            </div>
        </div>
    </section>

    @include('_components.review-modal')

    
@endsection
