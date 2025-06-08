<form class="max-w-sm mx-auto space-y-4" action="{{ route('admin-proses') }}" method="post">
@csrf
<h2 class="text-2xl font-bold text-gray-900">Welcome admin</h2>
  <div>
    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
    <input type="name" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="username" required />
  </div>
   @error('username')
    <small>{{$message}}</small>
  @enderror

  <div>
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password</label>
    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
  </div>
   @error('password')
    <small>{{$message}}</small>
  @enderror

  <div class="flex justify-between">
    <div class="flex items-start">
      <div class="flex items-center h-5">


  <div>
    <button type="submit" class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-blue-800">Login</button>
  </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if($message = Session::get('failed'))
    <script>
        Swal.fire('{{ $message }}');
    </script>
@endif
 