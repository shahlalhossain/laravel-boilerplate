<header class="c-header c-header-light c-header-fixed">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <i class="c-icon c-icon-lg cil-menu"></i>
    </button>

    <a class="c-header-brand d-lg-none" href="#">
        <img src="{{ asset('img/brand/td_logo_black.svg') }}" alt="" width="180" height="50">
    </a>

    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <i class="c-icon c-icon-lg cil-menu"></i>
    </button>

    <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="{{ route('frontend.index') }}">@lang('Home')</a></li>
    </ul>

    <ul class="c-header-nav ml-auto mr-4">
        <li class="nav-item dropdown">
            @php
            $pendingService = pendingNotification();
            @endphp
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                <i class="far fa-2x fa-bell"></i>
                @if($pendingService['totalPending']>0)
                <span class="badge badge-danger navbar-badge">{{ $pendingService['totalPending'] ?? 0 }}</span>
                @endif
            </a>
            @if($pendingService['totalPending']>0)
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                <span class="dropdown-item dropdown-header text-mute">{{ $pendingService['totalPending'] ?? 0 }} Pending Services</span>
                @if($pendingService['pendingHealthQueries'])
                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.health-questions.index','draft') }}" class="dropdown-item">
                    <strong class="badge badge-danger mr-2">{{ $pendingService['pendingHealthQueries'] ?? 0 }}</strong>
                    <span class="float-right text-muted text-sm">Pending Health Queries</span>
                </a>
                @endif

                @if($pendingService['pendingAudioCalls']>0)
                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.instant-calls.index','audio') }}" class="dropdown-item">
                    <strong class="badge badge-danger mr-2">{{ $pendingService['pendingAudioCalls'] ?? 0 }}</strong>
                    <span class="float-right text-muted text-sm">Pending Audio Calls</span>
                </a>
                @endif

                @if($pendingService['pendingVideoCalls']>0)
                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.instant-calls.index','video') }}" class="dropdown-item">
                    <strong class="badge badge-danger mr-2">{{ $pendingService['pendingVideoCalls'] ?? 0 }}</strong>
                    <span class="float-right text-muted text-sm">Pending Video Calls</span>
                </a>
                @endif

                @if($pendingService['pendingConsultations']>0)
                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.doctor-appointments.index','telemedicine') }}" class="dropdown-item">
                    <strong class="badge badge-danger mr-2">{{ $pendingService['pendingConsultations'] ?? 0 }}</strong>
                    <span class="float-right text-muted text-sm">Pending Doctor Appointments</span>
                </a>
                @endif

                @if($pendingService['pendingInsuranceClaims']>0)
                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.insurance-claims.index') }}" class="dropdown-item">
                    <strong class="badge badge-danger mr-2">{{ $pendingService['pendingInsuranceClaims'] ?? 0 }}</strong>
                    <span class="float-right text-muted text-sm">Pending Insurance Claims</span>
                </a>
                @endif

                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.pending-services') }}" class="dropdown-item dropdown-footer text-primary">See All Pending Services</a>
            </div>
            @endif
        </li>

        <li class="c-header-nav-item dropdown">
            <x-utils.link class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <x-slot name="text">
                    <div class="c-avatar">
                        <img class="c-avatar-img" src="{{ $logged_in_user->avatar }}" alt="{{ $logged_in_user->email ?? '' }}">
                    </div>
                </x-slot>
            </x-utils.link>

            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2">
                    <strong>@lang('Account')</strong>
                </div>

                <x-utils.link
                    class="dropdown-item"
                    icon="c-icon mr-2 cil-account-logout"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <x-slot name="text">
                        @lang('Logout')
                        <x-forms.post :action="route('frontend.auth.logout')" id="logout-form" class="d-none" />
                    </x-slot>
                </x-utils.link>
            </div>
        </li>
    </ul>

    {{--<div class="c-subheader justify-content-between px-3">--}}
        {{--@include('backend.includes.partials.breadcrumbs')--}}

        {{--<div class="c-subheader-nav mfe-2">--}}
            {{--@yield('breadcrumb-links')--}}
        {{--</div>--}}
    {{--</div>--}}
    <!--c-subheader-->
</header>
