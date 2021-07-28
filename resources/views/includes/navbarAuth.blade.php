<div class="z-10 bg-white shadow-lg">
    <nav class="container flex flex-wrap items-center justify-between py-3 mx-auto ">
        <!-- logo -->
        <a href="{{ route('dashboard') }}">
            <img src="https://t3.ftcdn.net/jpg/03/92/80/46/360_F_392804645_tUQxo5EgPXvFGxn5OQguX1BiYlI6lCOV.jpg" alt="ACME" width="120" />
        </a>
        <!-- hamburger -->
        <div class="flex md:hidden">
            <button id="hamburger">
                <img class="block toggle" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
                <img class="hidden toggle" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
            </button>
        </div>
        <!-- links -->
        <div class="items-center hidden w-full mt-5 text-right border-t-2 border-blue-900 gap-7 toggle md:flex md:w-auto text-bold md:mt-0 md:border-none">
            <a href="{{ route('home') }}" class="block px-3 py-3 text-blue-900 border-b-2 border-blue-900 md:inline-block hover:text-blue-500 md:border-none">Home</a>
            <a href="{{ route('register') }}" class="block px-3 py-3 text-blue-900 border-b-2 border-blue-900 md:inline-block hover:text-blue-500 md:border-none">Register</a>
            <a href="{{ route('login') }}" class="block px-3 py-3 text-blue-900 border-b-2 border-blue-900 md:inline-block hover:text-blue-500 md:border-none">Login</a>
        </div>
    </nav>
</div>
