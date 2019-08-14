---
title: Signal Provider
crawl: true
---

@extends('_layouts.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 text-center text-md-left text-justify align-self-center">
                    <p>
                        With <strong>Social Trader Tools</strong> you can offer your own trading account out to other users as a signal via a <strong>signal page.</strong></p>
                    <p>
                        Signal pages are publicly viewable urls with a long random code, so it can not be guessed, so you are never competing with other signals on the platform.
                        They can be simply used to showcase your trading results or you can define terms by which users can follow your signals either paid or for free.                    </p>
                </div>
                <div class="col-12 col-md-5 text-center"><img src="/assets/images/signal.png" class="img-fluid" alt=""></div>
            </div>
        </div>
    </section>
    <section class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-12"><h2 class="section-header text-center">Key Features</h2></div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <i class="fa fa-money fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-9 col-md-10">
                            <h5><strong>Trading business</strong></h5>
                            <p>Run your own trading business selling signals to users on the platform or via <a href="https://www.socialtradertools.com/whitelabel/">your own personalised whitelabel</a>.
                                To sell your signals, you need your own payment processor. We support many popular payment processors including <strong>PayPal</strong> and <strong>Stripe</strong>.</p>
                            <p>As you are using your own payment processor, you are in full control of revenue and what you charge is what you make.
                                Our only cost is the <a href="https://www.socialtradertools.com/pricing/">account hosting plan</a> required to host the trading accounts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <i class="fa fa-line-chart fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-9 col-md-10">
                            <h5><strong>Analytics</strong></h5>
                            <p>Signal pages offer a complete break down of your accounts trading performance. Metrics included;</p>
                            <div class="checklist">
                                <p><i class="fa fa-check"></i>Growth, Profit and balance history</p>
                                <p><i class="fa fa-check"></i>Win/loss percentage</p>
                                <p><i class="fa fa-check"></i>Shorts/longs won</p>
                                <p><i class="fa fa-check"></i>Best/worst trades</p>
                                <p><i class="fa fa-check"></i>Daily/monthly/yearly averages</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <i class="fa fa-cogs fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-9 col-md-10">
                            <h5><strong>Billing models</strong></h5>
                            <p>With each signal page you can define terms by which users can follow your signal.
                                Each term can be setup with a different billing model. We support 3 different billing models;</p>
                            <ol>
                                <li><strong>Free access</strong> - Pretty simple, no cost involved to follow the signal.</li>
                                <li><strong>Recurring fee</strong> - A recurring fee eg Monthly, which requires a payment on a Monthly basis to maintain access to the signal.</li>
                                <li><strong>Performance fee</strong> - A monthly fee based on a percentage of profit achieved following the signal, on a high watermark basis.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <i class="fa fa-lock fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-9 col-md-10">
                            <h5><strong>Access rights</strong></h5>
                            <p>Each term created will also define the rights a user has to the signal. You can define the following rights;</p>
                            <ol>
                                <li><strong>No rights</strong> - Followers only have the right to see the signal stats in their dashboard.</li>
                                <li><strong>Email Alerts</strong> - Followers can setup Email Alerts to receive emails for each signal generated.</li>
                                <li><strong>Trade Copier</strong> - Followers can setup a Trade Copier to copy the signals trades in real time.</li>
                                <li><strong>Email Alerts & Trade Copier</strong> - Followers can setup Email Alerts and a Trade Copier.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
