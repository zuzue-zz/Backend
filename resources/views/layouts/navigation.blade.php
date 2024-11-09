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
        <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
        <li><a href="#movies" class="hover:underline">Movies</a></li>
        <li><a href="{{ route('about') }}" class="hover:underline">About</a></li>
        <li><a href="{{ route('contact') }}" class="hover:underline">Contact</a></li>
          @auth()
          <li class="">
              <span class="hover-trigger" >{{ Auth::user()->name }}</span>
              <div class="absolute myhover mt-2 w-44 bg-gray-800 text-white border border-gray-200 rounded-md shadow-lg opacity-0 invisible transition-all duration-200 ease-in-out hover-trigger:hover:opacity-100 hover-trigger:hover:visible">
                  <a href="{{ route('profile.edit')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>

                  <form action="{{route('logout')}}" method="POST">
                      @csrf
                      <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                  </form>
              </div>
          </li>
          @else

              <li>
                  <a href="{{ route('login') }}" class="hover:underline">Login</a>
                  <a href="{{ route('register') }}" class="hover:underline">Register</a>
              </li>
          @endauth
      </ul>
    </nav>
  </header>
