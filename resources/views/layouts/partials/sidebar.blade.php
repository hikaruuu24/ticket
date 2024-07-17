<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('ui/images/profile/' . (Auth::user()->avatar ?? 'user.png')) }}" width="20" alt="">
                    <div class="header-info ms-3">
                        <span class="font-w600">Hi, <b>{{ ucfirst(auth()->user()->username) }}</b></span>
                        <small class="font-w400">{{ auth()->user()->getRoleNames()[0] }}</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    {{-- <a href="{{ route('users.show', auth()->user()->id) }}" class="dropdown-item ai-icon">
                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ms-2">Profile </span>
                    </a> --}}
                    {{-- <a href="#" class="dropdown-item ai-icon" onclick="logout()">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span class="ms-2">Logout </span>
                    </a> --}}
                </div>
            </li>
            <li>
                <a href="https://www.gcpi-ais.com" target="__blank">
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('tickets.index') }}">
                    <i class="fa-solid fa-headset"></i>
                    <span class="nav-text">Support</span>
                </a>
            </li>
            @if (auth()->user()->getRoleNames()[0] == 'Admin')
            <li>
                <a href="{{ route('notification-mails.index') }}">
                    <i class="fa-solid fa-inbox"></i>
                    <span class="nav-text">Mail Notification</span>
                </a>
            </li>
            @endif
            @if (auth()->user()->getRoleNames()[0] == 'Admin')
            <li>
                <a href="{{ route('users.index') }}">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-text">User Management</span>
                </a>
            </li>
            @endif
            @if (auth()->user()->getRoleNames()[0] == 'Admin')
            <li class="d-none">
                <a href="{{ route('departements.index') }}">
                    <i class="fa-solid fa-building"></i>
                    <span class="nav-text">Department</span>
                </a>
            </li>
            @endif
            <li>
                <a href="#" onclick="logout()">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
