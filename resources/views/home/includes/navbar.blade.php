{{-- navbar --}}
<div class="zurf-header-background-transparent flex">
    <div class="zurf-top-bar">
        <div class="zurf-top-bar-background"></div>
        <div class="zurf-top-bar-container zurf-container">
            <div class="zurf-top-bar-container-inner clearfix">
                <div class="zurf-top-bar-left zurf-item-pdlr">
                    <div class="tourmaster-user-top-bar tourmaster-guest tourmaster-style-1" data-redirect="index.html"
                        data-ajax-url="#">
                        <div class="zurf-top-bar-left zurf-item-pdlr">
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right"
                                    style="display: flex; align-items: center;">
                                    @auth
                                        <a href="/profile"><i class="fa-solid fa-user" style="font-size: x-large"></i></a>

                                        @if (auth()->user()->role === 'admin' || auth()->user()->role === 'super_admin')
                                            {{-- <a href="{{ route('dashboard') }}" class="btn btn-primary"
                                                style="margin-left: 20px">
                                                Admin Dashboard
                                            </a> --}}
                                            <a href="{{ route('statistics.index') }}" class="btn btn-primary">
                                                Admin Dashboard
                                            </a>
                                        @endif
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-primary">
                                            Log in
                                        </a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-secondary" style="margin-left: 20px">
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @if (Route::has('login'))
                    @auth
                        <div class="zurf-top-bar-right zurf-item-pdlr">
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    Logout
                                </button>
                            </form>
                        </div>
                    @endauth
                @endif
            </div>
        </div>
    </div>

    <header
        class="zurf-header-wrap zurf-header-style-plain zurf-style-menu-right zurf-sticky-navigation zurf-style-slide"
        data-navigation-offset="75px">
        <div class="zurf-header-background"></div>
        <div class="zurf-header-container zurf-container">
            <div class="zurf-header-container-inner clearfix">
                <div class="zurf-logo zurf-item-pdlr" >
                    <div class="zurf-logo-inner" >
                        <a href="homepage"><img src="images/logo.png" alt="" style="width: 100px ; height: 100px;"
                                title="logo" /></a>
                    </div>
                </div>
                <div class="zurf-navigation zurf-item-pdlr clearfix zurf-navigation-submenu-indicator">
                    <div class="zurf-main-menu" id="zurf-main-menu">
                        <ul id="menu-main-navigation-1" class="sf-menu">
                            <li
                                class="menu-item menu-item-home current-menu-item current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children zurf-normal-menu">
                                <a href="/">Home</a>
                            </li>
                            <li class="menu-item menu-item-has-children zurf-normal-menu">
                                <a href="about" class="">About</a>
                            </li>
                            <li class="menu-item"><a href="contact">Contact</a></li>
                            <li class="menu-item menu-item-has-children zurf-normal-menu">
                                <a href="ourteam">Our Team</a>
                            </li>
                        </ul>
                    </div>
                    @auth
                    <div class="zurf-main-menu-right-wrap clearfix">
                        <a class="zurf-main-menu-right-button zurf-button-1 zurf-style-default" href="{{ route('tripcruds.index') }}"
                            style="text-decoration: none" target="_self">Our Trips</a>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </header>
</div>
