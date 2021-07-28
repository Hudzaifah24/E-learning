<div class="sticky top-0 z-50 bg-white shadow-lg" data-aos="fade-down">
    <nav class="container flex flex-wrap items-center justify-between px-3 py-3 mx-auto md:px-0 ">
        <!-- logo -->
        <a href="{{ route('home') }}">
            <img src="https://t3.ftcdn.net/jpg/03/92/80/46/360_F_392804645_tUQxo5EgPXvFGxn5OQguX1BiYlI6lCOV.jpg" alt="ACME" width="120" />
        </a>
        <!-- hamburger -->
        <div class="flex md:hidden">
            <button id="hamburger">
                <img class="block toggle" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
                <img class="hidden toggle" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
            </button>
        </div>
        {{-- input --}}
        <div class="relative hidden md:block">
            <input type="text" class="px-3 py-1 bg-blue-100 rounded-full" placeholder="Search...">
            <button type="submit" class="absolute right-2 top-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>
        <!-- links -->
        <div class="items-center hidden w-full mt-5 text-right border-t-2 border-blue-900 gap-7 toggle md:flex md:w-auto text-bold md:mt-0 md:border-none">
            <a href="{{ route('home') }}" class="block px-3 py-3 text-blue-900 border-b-2 border-blue-900 md:inline-block hover:text-blue-500 md:border-none">Home</a>

            @guest

                <a href="{{ route('register') }}" class="block px-3 py-3 text-blue-900 border-b-2 border-blue-900 md:inline-block hover:text-blue-500 md:border-none">Sign Up</a>
                <a href="{{ route('login') }}" class="block px-3 py-3 ml-2 text-blue-900 border-b-2 border-blue-900 md:px-4 md:py-2 md:rounded-full md:text-white bg-none md:bg-blue-400 md:inline-block md:hover:bg-blue-500 md:border-none">Sign In</a>

            @else

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf

                    <button class="block px-3 py-3 text-blue-900 border-b-2 border-blue-900 md:inline-block hover:text-blue-500 md:border-none">
                        Logout
                    </button>
                </form>

            @endguest

        </div>
    </nav>
</div>
