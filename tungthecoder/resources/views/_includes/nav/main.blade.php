<nav class="navbar has-shadow p-l-10 p-r-10">
    <div class="container">

        <div class="navbar-brand">
            <a href="/home" class="navbar-item">
                <img src="/tungthecoder/public/images/TCoder_Logo.png" alt="TCoder: Here to Build Your Site!" width="112" height="28">
            </a>

        @if (Request::segment(1) == "manage")
        <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
            <span class="icon">
                <i class="fa fa-arrow-circle-right"></i>
            </span>
            &nbsp
            <span id="iconText">Expand Panel</span>
        </a>
       <!-- <span id="iconText" class="navbar-item is-hidden-desktop has-text-centered"></span>-->
        @endif

            <div class="navbar-burger burger" aria-label="menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="navbar-menu">
            <div class="navbar-start">
                <a href="/home" class="navbar-item is-tab is-active">
                            Home
                </a>
<!--                        
                <a href="/home" class="navbar-item is-tab">
                            Blog
                        </a>
                        
                <a href="/home" class="navbar-item is-tab">
                            Services
                        </a>
                        
                <a href="/home" class="navbar-item is-tab">
                            Pricing
                </a>
-->                        
                <a href="/contact" class="navbar-item is-tab">
                            Contact
                </a>

            </div>

            <div class="navbar-end">
                @if (Auth::guest())
                <a href="{{ route('login') }}" class="navbar-item is-tab">
                            Login
                        </a>

                <a href="{{ route('register') }}" class="navbar-item is-tab">
                            Sign Up
                        </a> @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-item is-tab navbar-link">
                              Welcome back, {{Auth::user()->name}}!
                            </a>

                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item is-tab">
                                    <i class="fa fa-fw fa-user-circle m-r-5"></i>
                                        Profile
                                </a>

                        <a class="navbar-item is-tab">
                                    <i class="fa fa-fw fa-bell m-r-5"></i>
                                        Notification
                                </a>

                        <a href="{{route('manage.dashboard')}}" class="navbar-item is-tab {{Nav::hasSegment('manage')}}">
                                    <i class="fa fa-fw fa-cog m-r-5"></i>
                                        Manage/Admin Panel
                                </a>

                        <hr class="navbar-divider">

                        <a href="{{route('logout')}}" class="navbar-item is-tab" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                                    <i class="fa fa-fw fa-sign-out-alt m-r-5"></i>
                                        Logout
                                </a>
                        @include('_includes.forms.logout')
                    </div>
                </div>

                @endif

            </div>
        </div>

    </div>
</nav>