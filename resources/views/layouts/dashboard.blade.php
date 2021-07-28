<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="text-center sidebar-heading">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-40 h-40 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div class="list-group list-group-flush">
            <a
              href="{{ route('dashboard') }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard')) ? 'active' : '' }}"
            >
              Dashboard
            </a>
            <a
              href="{{ route('dashboardSubject') }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/subjects*')) ? 'active' : '' }}"
            >
              Subjects
            </a>
            <a
              href="{{ route('dashboardTheory') }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/theories*')) ? 'active' : '' }}"
            >
              Theories
            </a>
            <a
              href="{{ route('dashboardVideo') }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/videos*')) ? 'active' : '' }}"
            >
              Videos
            </a>
            <a
              href="{{ route('dashboardSettings') }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/settings*')) ? 'active' : '' }}"
            >
              Settings
            </a>
            <a
                {{-- href="{{ route('logout') }}" --}}
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
              class="list-group-item list-group-item-action"
            >
              Sign Out
            </a>

            {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form> --}}
          </div>
        </div>

        <!-- Page-content -->
        <div id="page-content-wrapper" class="overflow-scroll">
          <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
            data-aos="fade-down"
          >
            <div class="container-fluid">
              <button
                class="mr-2 btn btn-secondary d-md-none"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Dekstop Menu -->
                <ul class="ml-auto navbar-nav d-none d-lg-flex">
                  <li class="nav-item dropdown">
                    <a
                      href=""
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                    >
                      <img
                        src="/images/icon-user.png"
                        class="mr-2 rounded-circle profile-picture"
                        alt=""
                      />
                      {{-- Hi, --}}
                    </a>
                    <div class="dropdown-menu">
                        <p class="dropdown-item">Hi,</p>
                        <a href="{{ route('home') }}" class="dropdown-item">Home</a>
                        <a href="" class="dropdown-item">
                            Setting
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href=""
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            class="dropdown-item">
                            Logout
                        </a>
                        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form> --}}
                    </div>
                  </li>
                </ul>

                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Hi,
                    </a>
                  </li>
                  <li class="nav-item d-inline-block">
                    <a href="#" class="nav-link">Cart</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          {{-- content --}}
          @yield('content')

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    @stack('addon-script')
  </body>
</html>
