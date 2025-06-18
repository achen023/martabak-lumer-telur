<form class="max-w-sm mx-auto space-y-4" action="{{ route('register-proses') }}" method="POST">
    @csrf

    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Create an account</h2>
    <p class="text-sm text-gray-600 dark:text-gray-400">
        Join as a UMKM partner and manage your martabak business with ease. <br>
        Promote your products, track sales, and grow your business digitally.
    </p>

    <!-- Username -->
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-white">Username</label>
        <input type="text" id="name" name="name"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                      focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm 
                      dark:bg-gray-700 dark:border-gray-600 dark:text-white"
               required />
        @error('name')
            <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>

    <!-- Email -->
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-white">Your email</label>
        <input type="email" id="email" name="email"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                      focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm 
                      dark:bg-gray-700 dark:border-gray-600 dark:text-white"
               required />
        @error('email')
            <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>

    <!-- Password -->
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-white">Password</label>
        <input type="password" id="password" name="password"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                      focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm 
                      dark:bg-gray-700 dark:border-gray-600 dark:text-white"
               required />
        @error('password')
            <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-white">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                      focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm 
                      dark:bg-gray-700 dark:border-gray-600 dark:text-white"
               required />
    </div>

    <!-- Terms & Conditions -->
    <div class="flex items-center">
        <input id="terms" name="terms" type="checkbox"
               class="h-4 w-4 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded"
               required />
        <label for="terms" class="ml-2 block text-sm text-gray-900 dark:text-white">
            I accept the <a href="#" class="text-blue-600 hover:underline dark:text-blue-400">Terms and Conditions</a>
        </label>
    </div>

    <!-- Submit Button -->
    <div>
        <button type="submit"
                class="w-full text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none 
                       focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                       dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800 active:scale-95 transition-transform">
            Create account
        </button>
    </div>

    <!-- Already have account -->
    <p class="text-sm text-center text-gray-600 dark:text-gray-400">
        Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:underline dark:text-blue-400">Login here</a>
    </p>
</form>
