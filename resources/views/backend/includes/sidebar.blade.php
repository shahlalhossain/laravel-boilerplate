<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        {{--<svg class="c-sidebar-brand-full" width="118" height="46" alt="Logo">--}}
        {{--<use xlink:href="{{ asset('img/brand/coreui.svg#full') }}"></use>--}}
        {{--</svg>--}}
        {{--<svg class="c-sidebar-brand-minimized" width="46" height="46" alt="Logo">--}}
        {{--<use xlink:href="{{ asset('img/brand/coreui.svg#signet') }}"></use>--}}
        {{--</svg>--}}
        <img src="{{ asset('img/brand/td_logo_white.svg') }}" alt="" width="180" height="50">

    </div><!--c-sidebar-brand-->

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <x-utils.link
                    class="c-sidebar-nav-link"
                    :href="route('admin.dashboard')"
                    :active="activeClass(Route::is('admin.dashboard'), 'c-active')"
                    icon="c-sidebar-nav-icon cil-speedometer"
                    :text="__('Dashboard')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                    class="c-sidebar-nav-link"
                    :href="route('admin.account')"
                    :active="activeClass(Route::is('admin.account'), 'c-active')"
                    icon="c-sidebar-nav-icon cil-list-rich"
                    :text="__('My Profile')" />
        </li>

        @if($logged_in_user->can('admin.access.health-package'))
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.health-packages.index') }}" class="c-sidebar-nav-link {{ (request()->is('admin/health-packages*') ? 'c-active' : '') }}">
                    <i class="c-sidebar-nav-icon cil-list-rich"></i> Manage Health Packages
                </a>
            </li>
        @endif

        @if($logged_in_user->can('admin.access.instant-call'))
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.instant-calls.index','all') }}" class="c-sidebar-nav-link {{ (request()->is('admin/instant-calls*') ? 'c-active' : '') }}">
                    <i class="c-sidebar-nav-icon cil-list-rich"></i> Manage Instant Calls
                </a>
            </li>
        @endif

        @if($logged_in_user->can('admin.access.question'))
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.health-questions.index','all') }}" class="c-sidebar-nav-link {{ (request()->is('admin/health-questions*') ? 'c-active' : '') }}">
                    <i class="c-sidebar-nav-icon cil-list-rich"></i> Manage Health Questions
                </a>
            </li>
        @endif

        @if($logged_in_user->can('admin.access.customer'))
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.customers.index') }}" class="c-sidebar-nav-link {{ (request()->is('admin/customers*') ? 'c-active' : '') }}">
                    <i class="c-sidebar-nav-icon cil-list-rich"></i> Manage Customers
                </a>
            </li>
        @endif

        @if($logged_in_user->can('admin.access.doctor'))
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.doctors.index') }}" class="c-sidebar-nav-link {{ (request()->is('admin/doctors*') ? 'c-active' : '') }}">
                    <i class="c-sidebar-nav-icon cil-list-rich"></i> Manage Doctors
                </a>
            </li>
        @endif

        @if($logged_in_user->can('admin.access.doctor-appointment'))
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.doctor-appointments.index','all') }}" class="c-sidebar-nav-link {{ (request()->is('admin/doctor/appointments*') ? 'c-active' : '') }}">
                    <i class="c-sidebar-nav-icon cil-list-rich"></i> Doctor Appointments
                </a>
            </li>
        @endif

        @if($logged_in_user->can('admin.access.article'))
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.articles.index') }}" class="c-sidebar-nav-link {{ (request()->is('admin/articles*') ? 'c-active' : '') }}">
                    <i class="c-sidebar-nav-icon cil-list-rich"></i> Manage Articles
                </a>
            </li>
        @endif

        @if($logged_in_user->can('admin.app-release-logs.index'))
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.app-release-logs.index') }}" class="c-sidebar-nav-link {{ (request()->is('admin/app-release-logs*') ? 'c-active' : '') }}">
                    <i class="c-sidebar-nav-icon cil-list-rich"></i> App Release Logs
                </a>
            </li>
        @endif

        @if($logged_in_user->can('admin.access.insurance-claim'))
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.insurance-claims.index') }}" class="c-sidebar-nav-link {{ (request()->is('admin/insurance-claims*') ? 'c-active' : '') }}">
                    <i class="c-sidebar-nav-icon cil-list-rich"></i> Manage Insurance Claims
                </a>
            </li>
        @endif

        @if ($logged_in_user->hasAllAccess() || (
                $logged_in_user->can('admin.access.user.list') ||
                $logged_in_user->can('admin.access.user.deactivate') ||
                $logged_in_user->can('admin.access.user.reactivate') ||
                $logged_in_user->can('admin.access.user.clear-session') ||
                $logged_in_user->can('admin.access.user.impersonate') ||
                $logged_in_user->can('admin.access.user.change-password')
            ))

            @if($logged_in_user->can('admin.pending-services'))
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.pending-services') }}" class="c-sidebar-nav-link {{ (request()->is('admin/pending-services*') ? 'c-active' : '') }}">
                    <i class="c-sidebar-nav-icon cil-list-rich"></i> Pending Services
                </a>
            </li>
            @endif

            <li class="c-sidebar-nav-title">@lang('System')</li>

            <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                        href="#"
                        icon="c-sidebar-nav-icon cil-text-shapes"
                        class="c-sidebar-nav-dropdown-toggle"
                        :text="__('Access Management')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    @if ($logged_in_user->hasAllAccess())
                        <li class="c-sidebar-nav-item" style="padding-left: 10px;">
                            <x-utils.link
                                    :href="route('admin.auth.permission.index')"
                                    class="c-sidebar-nav-link"
                                    :text="__('Permission Management')"
                                    icon="c-sidebar-nav-icon cil-font"
                                    :active="activeClass(Route::is('admin.auth.permission.*'), 'c-active')" />
                        </li>
                        <li class="c-sidebar-nav-item" style="padding-left: 10px;">
                            <x-utils.link
                                    :href="route('admin.auth.role.index')"
                                    class="c-sidebar-nav-link"
                                    :text="__('Role Management')"
                                    icon="c-sidebar-nav-icon cil-text-square"
                                    :active="activeClass(Route::is('admin.auth.role.*'), 'c-active')" />
                        </li>
                    @endif

                    @if ($logged_in_user->hasAllAccess() || (
                            $logged_in_user->can('admin.access.user.list') ||
                            $logged_in_user->can('admin.access.user.deactivate') ||
                            $logged_in_user->can('admin.access.user.reactivate') ||
                            $logged_in_user->can('admin.access.user.clear-session') ||
                            $logged_in_user->can('admin.access.user.impersonate') ||
                            $logged_in_user->can('admin.access.user.change-password')
                        ))
                        <li class="c-sidebar-nav-item" style="padding-left: 10px;">
                            <x-utils.link
                                    :href="route('admin.auth.user.index')"
                                    class="c-sidebar-nav-link"
                                    :text="__('User Management')"
                                    icon="c-sidebar-nav-icon cil-featured-playlist"
                                    :active="activeClass(Route::is('admin.auth.user.*'), 'c-active')" />
                        </li>
                    @endif
                </ul>
            </li>
        @endif

        @if ($logged_in_user->hasAllAccess())
            <li class="c-sidebar-nav-dropdown">
                <x-utils.link
                        href="#"
                        icon="c-sidebar-nav-icon cil-list"
                        class="c-sidebar-nav-dropdown-toggle"
                        :text="__('Logs')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item" style="padding-left: 10px;">
                        <x-utils.link
                                :href="route('log-viewer::dashboard')"
                                class="c-sidebar-nav-link"
                                icon="c-sidebar-nav-icon cil-grid"
                                :text="__('Dashboard')" />
                    </li>
                    <li class="c-sidebar-nav-item" style="padding-left: 10px;">
                        <x-utils.link
                                :href="route('log-viewer::logs.list')"
                                class="c-sidebar-nav-link"
                                icon="c-sidebar-nav-icon cil-line-style"
                                :text="__('Logs')" />
                    </li>
                </ul>
            </li>
        @endif
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
