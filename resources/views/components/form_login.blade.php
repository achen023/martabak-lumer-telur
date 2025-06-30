<form class="max-w-sm mx-auto space-y-4" action="{{ route('login-proses') }}" method="POST">
    @csrf

    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Sign in to your account</h2>
    <p class="text-sm text-gray-600 dark:text-gray-400">
        Join as a UMKM partner and manage your martabak business with ease.
        Promote your products, track sales, and grow your business digitally.
    </p>

    <!-- Email -->
    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Your email
        </label>
        <input type="email" name="email" id="email"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                      focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                      dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
               placeholder="name@company.com" required />
        @error('email')
            <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>

    <!-- Password -->
    <div>
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Your password
        </label>
        <input type="password" name="password" id="password"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                      focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                      dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
               placeholder="••••••••" required />
        @error('password')
            <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>

    <!-- Remember me & Forgot password -->
    <div class="flex justify-between items-center">
        <div class="flex items-center">
            <input id="remember" type="checkbox" name="remember"
                   class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 
                          dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600" />
            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Remember me
            </label>
        </div>
    </div>

    <!-- Tombol Login -->
    <div>
        <button type="submit"
                class="w-full text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 
                       focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm 
                       px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 
                       dark:focus:ring-yellow-800 active:scale-95 transition-transform">
            Login
        </button>
    </div>

    <!-- Link ke halaman register -->
    <p class="text-sm text-center text-gray-600 dark:text-gray-400">
        Not registered?
        <a href="{{ route('register') }}" class="text-blue-700 hover:underline dark:text-blue-500">
            Create account
        </a>
    </p>
</form>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Error Message from Session -->
@if($message = Session::get('failed'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Login Failed',
        text: '{{ $message }}',
        confirmButtonColor: '#d33'
    });
</script>
@endif
