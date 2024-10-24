<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">SHTech</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                {{--                <li><a href="contact.html">Services</a></li>--}}
                {{--                <li><a href="contact.html">Projects</a></li>--}}
                {{--                <li><a href="contact.html">Teams</a></li>--}}
                <li class="dropdown"><a href="#"><span>Article Categories</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('article.index') }}">All Articles<i class="bi bi-list"></i></a></li><li class="separator"></li>
                        @foreach($articleCategories as $articleCategory)
                            <li><a href="{{ route('article.index') }}">{{ ucwords($articleCategory->name) }}<i class="bi bi-chevron-right"></i></a></li><li class="separator"></li>
                        @endforeach
                        {{--                        <li class="dropdown"><a href="#"><i class="bi bi-chevron-left toggle-dropdown"></i><span>Category One</span></a>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">Sub-Category One</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Two</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Three</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Four</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Five</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Six</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Seven</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Eight</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Nine</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Ten</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li><li class="separator"></li>--}}
                        {{--                        <li class="dropdown"><a href="#"><i class="bi bi-chevron-left toggle-dropdown"></i><span>Category Two</span></a>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">Sub-Category One</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Two</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Three</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Four</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Five</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Six</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Seven</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Eight</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Nine</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Ten</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li><li class="separator"></li>--}}
                        {{--                        <li class="dropdown"><a href="#"><i class="bi bi-chevron-left toggle-dropdown"></i><span>Category Three</span></a>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">Sub-Category One</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Two</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Three</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Four</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Five</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Six</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Seven</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Eight</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Nine</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Ten</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li><li class="separator"></li>--}}
                        {{--                        <li class="dropdown"><a href="#"><i class="bi bi-chevron-left toggle-dropdown"></i><span>Category Four</span></a>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">Sub-Category One</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Two</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Three</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Four</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Five</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Six</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Seven</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Eight</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Nine</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Ten</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li><li class="separator"></li>--}}
                        {{--                        <li class="dropdown"><a href="#"><i class="bi bi-chevron-left toggle-dropdown"></i><span>Category Five</span></a>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">Sub-Category One</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Two</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Three</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Four</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Five</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Six</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Seven</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Eight</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Nine</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Ten</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li><li class="separator"></li>--}}
                        {{--                        <li class="dropdown"><a href="#"><i class="bi bi-chevron-left toggle-dropdown"></i><span>Category Six</span></a>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">Sub-Category One</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Two</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Three</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Four</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Five</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Six</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Seven</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Eight</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Nine</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Ten</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li><li class="separator"></li>--}}
                        {{--                        <li class="dropdown"><a href="#"><i class="bi bi-chevron-left toggle-dropdown"></i><span>Category Seven</span></a>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">Sub-Category One</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Two</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Three</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Four</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Five</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Six</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Seven</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Eight</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Nine</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Ten</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li><li class="separator"></li>--}}
                        {{--                        <li class="dropdown"><a href="#"><i class="bi bi-chevron-left toggle-dropdown"></i><span>Category Eight</span></a>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">Sub-Category One</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Two</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Three</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Four</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Five</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Six</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Seven</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Eight</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Nine</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Ten</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li><li class="separator"></li>--}}
                        {{--                        <li class="dropdown"><a href="#"><i class="bi bi-chevron-left toggle-dropdown"></i><span>Category Nine</span></a>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">Sub-Category One</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Two</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Three</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Four</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Five</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Six</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Seven</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Eight</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Nine</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Ten</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li><li class="separator"></li>--}}
                        {{--                        <li class="dropdown"><a href="#"><i class="bi bi-chevron-left toggle-dropdown"></i><span>Category Ten</span></a>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">Sub-Category One</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Two</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Three</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Four</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Five</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Six</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Seven</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Eight</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Nine</a></li><li class="separator"></li>--}}
                        {{--                                <li><a href="#">Sub-Category Ten</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}
                    </ul>
                </li>
            </ul>

            <i class="mobile-rightnav-toggle d-xl-none bi bi-circle"></i>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            @guest
                <a href="{{ route('login') }}" class="btn btn-sm btn-success text-white" >Login</a>
                <a href="{{ route('register') }}" class="btn btn-sm btn-info text-white">Registration</a>
            @else
                <nav class="rightnavmenu">
                    <ul>
                        <li class="dropdown">
                            <a href="">
                                <img class="rounded-circle" alt="Avatar" height="40" width="40" src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp" style="border: 2px solid gray;">
                                <i class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>
                            <ul>
                                <li><a href="#">My Dashboard</a></li><li class="separator"></li>
                                <li><a href="#">My Profile</a></li><li class="separator"></li>
                                <li><a href="#">Update Profile</a></li><li class="separator"></li>
                                <li><a href="#">Change Password</a></li><li class="separator"></li>
                                <li><a href="#">Notifications</a></li><li class="separator"></li>
                                <li><a href="#">Favorite Articles</a></li><li class="separator"></li>
                                <li><a href="#">My Comments</a></li><li class="separator"></li>
                                <li><a href="#">My Activities</a></li><li class="separator"></li>
                                <li><a href="#">Login History</a></li><li class="separator"></li>
                                <li><a href="#">Account Settings</a></li><li class="separator"></li>
                                <li class="separator"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            @endguest
        </div>

    </div>
</header>
