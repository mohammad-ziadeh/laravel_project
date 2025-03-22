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
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                    @auth
                                       
                                            @if (auth()->user()->role === 'admin' || auth()->user()->role === 'super_admin')
                                                <a href="{{ route('dashboard') }}"
                                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                                    style="padding-right: 20px">
                                                    Admin Dashboard
                                                </a>
                                            @endif
                                       


                                        <div class="flex">
                                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                                @csrf
                                                <button type="submit"
                                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                                    Logout
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                            style="padding-right: 20px">
                                            Log in
                                        </a>


                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="zurf-top-bar-right zurf-item-pdlr">
                    <div class="zurf-top-bar-right-text">
                        <i class="fa5s fa5-phone" style="font-size: 15px; color: #ffffff; margin-right: 10px;"></i>
                        <span style="font-weight: 500;">1.820.3345.33</span>
                        <i class="fa5s fa5-envelope-open"
                            style="font-size: 15px; color: #ffffff; margin-left: 30px; margin-right: 10px;"></i>
                        <a href="#"><span class="__cf_email__">test@gmail.com</span></a>
                    </div>
                    <div class="zurf-top-bar-right-social">
                        <a href="#" target="_blank" class="zurf-top-bar-social-icon" title="facebook"><i
                                class="fa6b fa6-facebook"></i></a>
                        <a href="#" target="_blank" class="zurf-top-bar-social-icon" title="flickr"><i
                                class="fa6b fa6-flickr"></i></a>
                        <a href="#" target="_blank" class="zurf-top-bar-social-icon" title="twitter"><i
                                class="fa6b fa6-x-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header
        class="zurf-header-wrap zurf-header-style-plain zurf-style-menu-right zurf-sticky-navigation zurf-style-slide"
        data-navigation-offset="75px">
        <div class="zurf-header-background"></div>
        <div class="zurf-header-container zurf-container">
            <div class="zurf-header-container-inner clearfix">
                <div class="zurf-logo zurf-item-pdlr">
                    <div class="zurf-logo-inner">
                        <a href="homepage"><img src="images/logox1.png" alt="" width="99" height="15"
                                title="logox1" /></a>
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
                    <div class="zurf-main-menu-right-wrap clearfix">
                        <a class="zurf-main-menu-right-button zurf-button-1 zurf-style-default" href="ourtrip"
                            target="_self">Our Trips</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
