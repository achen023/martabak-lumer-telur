<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<nav style="background-color: #C2AE0E;" class="border-gray-200">
    <div class="max-w-screen-xl mx-auto flex items-center justify-between p-4">
        
        <!-- KIRI: Logo -->
        <a href="/landing" class="flex items-center space-x-3">
           <img src="{{ asset('image/logo.png') }}" class="h-8" alt="Logo" />
        </a>
        
        <!-- TENGAH: Mega Menu -->
<div id="mega-menu" class="hidden md:flex justify-center gap-x-10">
    @php
        $menus = ['landing' => 'Home', 'menu' => 'Menu', 'about' => 'About', 'contact' => 'Contact'];
    @endphp

    @foreach ($menus as $route => $label)
        @php
            $isActive = request()->is($route);
        @endphp

        <a href="/{{ $route }}"
           class="relative inline-block px-2 py-1 font-semibold transition duration-500 ease-in-out transform group
                  {{ $isActive ? 'text-white' : 'text-gray-800' }}">
            
            <span class="relative z-10 transition duration-300
                         {{ $isActive ? 'text-white' : 'group-hover:text-white' }}">
                {{ $label }}
            </span>

            <span class="absolute bottom-0 left-2 h-1 rounded-full bg-gradient-to-r from-yellow-400 via-yellow-600 to-yellow-400
                         transition-all duration-500 ease-in-out
                         -translate-x-2
                         {{ $isActive ? 'w-full' : 'w-0 group-hover:w-full' }}">
            </span>
        </a>
    @endforeach
</div>


<!-- KANAN: Username/Login/Register -->
<div class="flex items-center space-x-2">
    @auth
<div class="relative z-50">
    <!-- Trigger -->
    <button id="dropdownUserBtn"
        class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-black hover:text-white transition duration-300">
        Halo, {{ Auth::user()->name }}
        <svg class="w-4 h-4 mt-[1px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1l4 4 4-4" />
        </svg>
    </button>

    <!-- Dropdown -->
    <div id="dropdownUserMenu"
        class="absolute right-0 mt-2 w-56 bg-white rounded-lg border border-yellow-300 shadow-xl hidden">
        <div class="px-4 py-3">
            <p class="text-sm text-gray-600">Selamat datang,</p>
            <p class="text-base font-semibold text-gray-900 truncate">{{ Auth::user()->name }}</p>
        </div>
        <div class="border-t border-yellow-200"></div>
        <form action="{{ route('logout') }}" method="POST" class="p-2">
            @csrf
            <button type="submit"
                class="flex items-center gap-2 w-full px-4 py-2 text-sm text-red-600 hover:bg-yellow-100 hover:text-red-800 rounded-md transition duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                </svg>
                Logout
            </button>
        </form>
    </div>
</div>

    @else
        <a href="/login"
           class="px-4 py-1 font-semibold text-black rounded-md
                  hover:bg-yellow-500 hover:text-white transition duration-300 ease-in-out">
           Login
        </a>
        <a href="/register"
           class="px-4 py-1 font-semibold bg-yellow-500 text-white rounded-md shadow-md
                  hover:bg-yellow-600 transition duration-300 ease-in-out">
           Sign up
        </a>
    @endauth
</div>

    </div>
</nav>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

