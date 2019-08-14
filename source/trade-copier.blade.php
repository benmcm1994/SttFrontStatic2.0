---
title: Trade Copier
crawl: true
---

@extends('_layouts.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 text-center text-md-left text-justify align-self-center">
                    <p>
                        The core feature of <strong>Social Trader Tools</strong> is trade copying. Our trade copier is the fastest copier in the market with an average replication speed of 50ms.
                    </p>
                    <p>
                        Once you have your accounts connected to the platform you can setup trade copiers. Trade copiers are highly configurable with various risk types and settings covering all scenarios.
                    </p>
                </div>
                <div class="col-12 col-md-5 text-center"><img src="/assets/images/copier.png" class="img-fluid" alt=""></div>
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
                            <i class="fa fa-cogs fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-9 col-md-10">
                            <h5><strong>Risk settings</strong></h5>
                            <p>The lot size used on the copy account is based on your chosen risk setting. We support 4 different risk types;</p>
                            <ol>
                                <li><strong>Risk Multiplier by Balance</strong> - Proportional lot size based the balance of both accounts.</li>
                                <li><strong>Risk Multiplier by Equity</strong> - Proportional lot size based the equity of both accounts.</li>
                                <li><strong>Lot Multiplier</strong> - A multiple of the lead accounts lot size.</li>
                                <li><strong>Fixed Lot</strong> - A fixed lot size regardless of the lead accounts lot size.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <i class="fa fa-toggle-on fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-9 col-md-10">
                            <h5><strong>Copier mode</strong></h5>
                            <p>The trade copier mode can be set and changed at any time. There are 3 different copier modes;</p>
                            <ol>
                                <li><strong>On</strong> - New trades, modifications and closes will be copied.</li>
                                <li><strong>Manage existing trades only</strong> - No new trades will be copied but existing trades will be managed to conclusion.</li>
                                <li><strong>Off</strong> - Any trades on the lead account will be ignored.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <i class="fa fa-exclamation-triangle fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-9 col-md-10">
                            <h5><strong>Stops & Limits</strong></h5>
                            <p>You can choose to copy stops and limits like for like, override with fixed levels or not
                                copy at all. If you choose to not copy limits but the lead account has its own limits, when their limit is hit a close will be sent to the copy account.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <i class="fa fa-ban fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-9 col-md-10">
                            <h5><strong>Disable symbols</strong></h5>
                            <p>If you want to ignore certain symbols from a system as they are less profitable, you can
                                disable any symbol. Once disabled, any trades from that symbol will be ignored.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <i class="fa fa-random fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-9 col-md-10">
                            <h5><strong>Reverse copy</strong></h5>
                            <p><strong>Do you know a system that loses money?</strong> You can setup a trade copier in
                                reverse mode meaning for each trade, the opposite occurs i.e. <strong>sell when buy</strong> or <strong>buy when sell</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
