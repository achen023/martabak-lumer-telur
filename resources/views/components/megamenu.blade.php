<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<nav style="background-color: #C2AE0E;" class="border-gray-200">
    <div class="max-w-screen-xl mx-auto flex items-center justify-between p-4">
        
        <!-- KIRI: Logo -->
        <a href="/landing" class="flex items-center space-x-3">
           <img src="{{ asset('image/logo.png') }}" class="h-8" alt="Logo" />
        </a>
        
        <!-- TENGAH: Mega Menu -->
        <div id="mega-menu" class="hidden md:flex justify-center gap-x-8">
            <a href="/landing"
            class="{{ request()->is('landing') ? 'text-blue-600' : 'text-gray-900' }} hover:text-blue-800 font-medium">
                Home
            </a>

            <div class="relative group">
                <a href="/menu"
                class="{{ request()->is('menu') ? 'text-blue-600' : 'text-gray-900' }} hover:text-blue-800 font-medium">
                    Menu
                </a>
            </div>

            <a href="/about"
            class="{{ request()->is('about') ? 'text-blue-600' : 'text-gray-900' }} hover:text-blue-800 font-medium">
                About
            </a>

            <a href="/contact"
            class="{{ request()->is('contact') ? 'text-blue-600' : 'text-gray-900' }} hover:text-blue-800 font-medium">
                Contact
            </a>
        </div>

        <!-- KANAN: Username/Login/Register -->
        <div class="flex items-center space-x-2">
            @auth
                <div class="relative">
                    <button id="user-dropdown-button" data-dropdown-toggle="user-dropdown"
                        class="flex items-center text-sm font-medium text-gray-900 dark:text-white hover:text-blue-600">
                        Halo, {{ Auth::user()->name }}
                        <svg class="w-3 h-3 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="user-dropdown"
                        class="absolute z-10 hidden mt-2 w-44 bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 dark:bg-gray-700">
                        <div class="p-4 text-gray-900 dark:text-white">
                            <p class="mb-2">Selamat datang, <strong>{{ Auth::user()->name }}</strong></p>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left text-red-600 hover:text-red-800">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <a href="/login"
                    class="text-gray-800 hover:text-blue-700 font-medium text-sm">Login</a>
                <a href="/register"
                    class="bg-blue-700 hover:bg-blue-800 text-white font-medium rounded px-3 py-1 text-sm">
                    Sign up
                </a>
            @endauth
        </div>
    </div>
</nav>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

