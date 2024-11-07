<!-- Back to Top Button -->
<button id="backToTop" class="fixed bottom-5 right-5 bg-red-600 text-white p-3 rounded-full shadow-lg hover:bg-red-700 transition-opacity duration-300 opacity-0 hidden">
    ↑
</button>


  <!-- Navbar with Logo -->
  <header id="navbar" class="bg-gray-900 text-white fixed top-0 left-0 w-full z-50 py-4 transition duration-300">
    <nav class="relative max-w-7xl mx-auto px-4 flex justify-between items-center">
      <div class="flex items-center space-x-4">
        <img src="./assets/logo/logo2.png" alt="Logo" class="h-10 w-10 rounded-full object-cover">
        <h1 class="text-2xl font-semibold">MovieTickets</h1>
      </div>
      <ul class="flex space-x-6">
        <li><a href="#home" class="hover:underline">Home</a></li>
        <li><a href="#movies" class="hover:underline">Movies</a></li>
        <li><a href="#cta" class="hover:underline">About</a></li>
        <li><a href="#cta" class="hover:underline">Contact</a></li>
        <li>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="hover:underline">Logout</button>
            </form>
        </li>
      </ul>
    </nav>
  </header>
