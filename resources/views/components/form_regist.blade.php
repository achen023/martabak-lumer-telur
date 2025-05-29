
<form class="max-w-sm mx-auto space-y-3" action="#" method="POST">
    <h2 class="text-2xl font-bold text-gray-900">Create an account</h2>
    <p class="text-sm text-gray-600">
        Join as a UMKM partner and manage your martabak business with ease.
        Promote your products, track sales, and grow your business digitally.
    </p>

    <div>
        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
        <input type="text" id="username" name="username" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#b7a314] focus:ring-[#b7a314] sm:text-sm" />
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Your email</label>
        <input type="email" id="email" name="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#b7a314] focus:ring-[#b7a314] sm:text-sm" />
    </div>

    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#b7a314] focus:ring-[#b7a314] sm:text-sm" />
    </div>

    <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#b7a314] focus:ring-[#b7a314] sm:text-sm" />
    </div>

    <div class="flex items-center">
        <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 text-[#b7a314] focus:ring-[#b7a314] border-gray-300 rounded" />
        <label for="terms" class="ml-2 block text-sm text-gray-900">
            I accept the <a href="#" class="text-blue-600 hover:underline">Terms and Conditions</a>
        </label>
    </div>

    <div>
    <button type="submit" class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-blue-800">Create account</button>
    </div>

    <p class="text-sm text-center text-gray-600">
        Already have an account? <a href="/login" class="text-blue-600 hover:underline">Login here</a>
    </p>
</form>
</div>
