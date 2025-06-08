<div class="navbar-custom">
    <ul class="list-unstyled topbar-menu float-end mb-0">

        {{-- Language Switcher --}}
        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ url('/app/public/assets/images/flags/fr.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Français</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="{{ url('/app/public/assets/images/flags/us.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list d-flex flex-column flex-md-row align-items-center">
            {{-- Avatar + Name + Role --}}
            <a class="nav-link dropdown-toggle nav-user arrow-none d-flex align-items-center me-md-3 mb-2 mb-md-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <span class="account-user-avatar me-2">
            <span class="avatar-initials rounded-circle bg-primary text-white d-flex align-items-center justify-content-center"
                  style="width: 32px; height: 32px; font-weight: bold;">
                {{ strtoupper(collect(explode(' ', auth()->user()->name))->map(fn($part) => substr($part, 0, 1))->join('')) }}
            </span>
        </span>
                <span class="d-flex flex-column justify-content-center text-center text-md-start">
            <span class="account-user-name">{{ auth()->user()->name }}</span>
            <span class="account-position">{{ auth()->user()->role }}</span>
        </span>
            </a>

            {{-- Logout Button --}}
            <form method="POST" action="{{ route('logout') }}" class="ms-md-2">
                @csrf
                <button type="submit"
                        class="btn p-0 border-0 bg-transparent d-flex align-items-center justify-content-center"
                        style="height: 32px; width: 32px; cursor: pointer;">
                    <i class="mdi mdi-power text-danger fs-4"></i>
                </button>
            </form>
        </li>



    </ul>
</div>
