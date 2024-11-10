<!-- Sidebar -->
<aside class="w-64 bg-gray-800 text-gray-100 flex flex-col">
    <div class="p-4 text-lg font-bold border-b border-gray-700">
        Admin Dashboard
    </div>
    <nav class="mt-4 flex-1">
        <a href="{{route('movies.index')}}" class="block py-2 px-4 text-gray-100 hover:bg-gray-700">Movies</a>
        <a href="{{route('categories.index')}}" class="block py-2 px-4 text-gray-100 hover:bg-gray-700">Categories</a>
        <a href="{{route('showtimes.index') }}" class="block py-2 px-4 text-gray-100 hover:bg-gray-700">Showtimes</a>
        <a href="#logout" onclick="document.getElementById('logout').submit()" class="block py-2 px-4 text-gray-100 hover:bg-gray-700">Logout</a>
        <form id="logout" action="{{ route('logout') }}" method="post">
            @csrf
        </form>
    </nav>
</aside>
