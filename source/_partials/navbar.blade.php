 <nav class="navbar fixed-top navbar-expand-lg bg-transparent" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="/"><img id="navbar-logo" src="/assets/images/logo-dark.png" alt="Social Trader Tools Light Logo" ></a>
            <button class="navbar-toggler" type="button"  data-toggle="offcanvas">
                <i class="fa fa-navicon"></i>
            </button>
            <div class="navbar-collapse offcanvas-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <button role="button" aria-label="Close" class="closebtn d-md-none">&times;</button>
                    <li class="nav-item d-md-none">
                        <div class="text-center p-3"><img src="/assets/images/logo-dark.png" alt="Social Trader Tools Dark Logo" width="50%"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $page->active(' ') }}" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown d-none d-md-block">
                        <a class="nav-link {{ $page->active(['account-manager', 'trade-copier', 'signal-provider', 'whitelabel']) }} dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Features
                        </a>
                        <div class="dropdown-menu nav-dropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item {{ $page->active('account-manager') }} nav-dropdown__item" href="/account-manager/">Account Manager</a>
                            <a class="dropdown-item {{ $page->active('trade-copier') }} nav-dropdown__item" href="/trade-copier/">Trade Copier</a>
                            <a class="dropdown-item {{ $page->active('signal-provider') }} nav-dropdown__item" href="/signal-provider/">Signal Provider</a>
                            <a class="dropdown-item {{ $page->active('whitelabel') }} nav-dropdown__item" href="/whitelabel/">Whitelabel</a>
                        </div>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link {{ $page->active('account-manager') }}" href="/account-manager/">Account Manager</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link {{ $page->active('trade-copier') }}" href="/trade-copier/">Trade Copier</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link {{ $page->active('signal-provider') }}" href="/signal-provider/">Signal Provider</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link {{ $page->active('whitelabel') }}" href="/whitelabel/">Whitelabel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $page->active('pricing') }}" href="/pricing/">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $page->active('blog') }}" href="/blog/">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $page->active('contact') }}" href="/contact/">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link__cta" href="https://my.socialtradertools.com/register/">Get Started</a>
                    </li>
                    <li class="nav-item nav-item__cta_outline">
                        <a class="nav-link nav-link__cta_outline" href="https://my.socialtradertools.com/login/">Login</a>
                    </li>
                    <li class="nav-item d-md-none pt-3">
                        <a href="{!! $page->facebookUrl !!}"><i class="fa fa-facebook-square fa-2x social-link" aria-hidden="true"></i></a>
                        <a href="{!! $page->twitterUrl !!}"><i class="fa fa-twitter-square fa-2x social-link" aria-hidden="true"></i></a>
                        <a href="{!! $page->linkedInUrl !!}"><i class="fa fa-linkedin-square fa-2x social-link" aria-hidden="true"></i></a>
                        <a href="{!! $page->youtubeUrl !!}"><i class="fa fa-youtube-square fa-2x social-link" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a href="/contact/" class="nav-link ">Contact us</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a href="/terms/" class="nav-link ">Terms of use</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a href="/privacy/" class="nav-link ">Privacy policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

