<form class="max-w-sm mx-auto space-y-4" action="{{ route('admin-proses') }}" method="POST">
    @csrf

    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Welcome Admin</h2>

    <!-- Username -->
    <div>
        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Username
        </label>
        <input type="text" name="username" id="username"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                      focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                      dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
               placeholder="username" required />
        @error('username')
            <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>

    <!-- Password -->
    <div>
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Password
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

    <!-- Tombol Login -->
    <div>
        <button type="submit"
                class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none 
                       focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto 
                       px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 
                       dark:focus:ring-yellow-800">
            Login
        </button>
    </div>
</form>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Menampilkan alert jika gagal login -->
@if ($message = Session::get('failed'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal',
            text: '{{ $message }}',
            confirmButtonColor: '#d33'
        });
    </script>
@endif
