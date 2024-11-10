@extends('layouts.app')
@section('content')
    <!-- Start Hero Section with Carousel -->
    <section id="home" class="relative bg-gray-900 text-white py-40 text-center">
        <div class="relative overflow-hidden max-w-full mx-auto rounded-lg">
            <!-- Carousel Container -->
            <div id="carousel" class="flex transition-transform duration-700 ease-in-out">
                <!-- Carousel Images -->
                <div class="min-w-full">
                    <img src="./assets/carouselPictures/mt1.jpg" alt="Carousel Image 1" class="w-full h-80 object-cover">
                </div>
                <div class="min-w-full">
                    <img src="./assets/carouselPictures/mt2.jpg" alt="Carousel Image 2" class="w-full h-80 object-cover">
                </div>
                <div class="min-w-full">
                    <img src="./assets/carouselPictures/mt3.jpg" alt="Carousel Image 3" class="w-full h-80 object-cover">
                </div>
                <div class="min-w-full">
                    <img src="./assets/carouselPictures/mt4.jpg" alt="Carousel Image 4" class="w-full h-80 object-cover">
                </div>
                <div class="min-w-full">
                    <img src="./assets/carouselPictures/mt5.jpg" alt="Carousel Image 5" class="w-full h-80 object-cover">
                </div>
                <div class="min-w-full">
                    <img src="./assets/carouselPictures/mt6.JPG" alt="Carousel Image 6" class="w-full h-80 object-cover">
                </div>
            </div>

            <!-- Carousel Arrows -->
            <button id="prev" class="absolute top-1/2 left-2 transform -translate-y-1/2 text-white bg-gray-800 bg-opacity-50 p-3 rounded-full">
                &#10094;
            </button>
            <button id="next" class="absolute top-1/2 right-2 transform -translate-y-1/2 text-white bg-gray-800 bg-opacity-50 p-3 rounded-full">
                &#10095;
            </button>
        </div>
        <div class="hero-content mt-8">
            <h2 class="text-4xl font-bold mb-4">Welcome to MovieTickets</h2>
            <p class="text-xl mb-6">Book your favorite movies instantly and easily</p>
            <a href="#movies" class="bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded-md text-lg">Book Now</a>
        </div>
    </section>
    <!-- End Hero Section with Carousel  -->



    <!-- Start Now Showing Movies Section -->
    <section id="movies" class="bg-gray-100 py-16">
        <!-- <h2 class="text-3xl font-bold text-center mb-8">Now Showing Movies</h2> -->
        <h2 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-red-600 via-yellow-500 to-pink-500 text-center tracking-wide mb-6 drop-shadow-lg">
            Now Showing Movies
        </h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 px-4">
            <!-- Movie Card 1 -->
            @foreach($showNowMovies as $showNowMovie)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('./assets/moviephotos/'.$showNowMovie->image_path) }}" alt="{{ $showNowMovie->tilte }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $showNowMovie->title }}</h3>
                        <p class="text-gray-600 mb-4">Showtimes: @foreach($showNowMovie->showtimes as $showtime) {{ $showtime->show_time }} , @endforeach</p>
                        <div class="flex justify-center">
                            <a href="{{ $showNowMovie->trailer_link }}" target="_blank" class="bg-red-600 text-white hover:bg-red-700 py-2 px-4 rounded-md">Watch Trailer</a>
                            <a href="{{ route('movie.show',$showNowMovie->id) }}" class="bg-red-600 text-white hover:bg-red-700 py-2 px-6 rounded-md">Book Ticket</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!-- End Now Showing Movies Section -->



    <!-- Start Popular Movies Section -->
    <section id="movies" class="bg-gray-100 py-16">
        <h2 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-red-600 via-yellow-500 to-pink-500 text-center tracking-wide mb-6 drop-shadow-lg">
            Popular Movies
        </h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 px-4">
            <!-- Movie Card 1 -->
            @foreach($popularMovies as $popularMovie)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('./assets/moviephotos/'.$popularMovie->image_path) }}" alt="{{ $popularMovie->tilte }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $popularMovie->title }}</h3>
                        <p class="text-gray-600 mb-4">Showtimes: @foreach($popularMovie->showtimes as $showtime) {{ $showtime->show_time }} , @endforeach</p>
                        <div class="flex justify-center">
                            <a href="{{ $popularMovie->trailer_link }}" target="_blank" class="bg-red-600 text-white hover:bg-red-700 py-2 px-4 rounded-md">Watch Trailer</a>
                            <a href="{{ route('movie.show',$popularMovie->id) }}" class="bg-red-600 text-white hover:bg-red-700 py-2 px-6 rounded-md">Book Ticket</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!-- End Popular Movies Section  -->

    <!-- Start Recommend Movies Section -->
    <section id="movies" class="bg-gray-100 py-16">
        <h2 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-red-600 via-yellow-500 to-pink-500 text-center tracking-wide mb-6 drop-shadow-lg">
            Recommend Movies
        </h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 px-4">
            <!-- Movie Card 1 -->
            @foreach($featuredMovies as $featuredMovie)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('./assets/moviephotos/'.$featuredMovie->image_path) }}" alt="{{ $featuredMovie->tilte }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $featuredMovie->title }}</h3>
                        <p class="text-gray-600 mb-4">Showtimes: @foreach($featuredMovie->showtimes as $showtime) {{ $showtime->show_time }} , @endforeach</p>
                        <div class="flex justify-center">
                            <a href="{{ $featuredMovie->trailer_link }}" target="_blank" class="bg-red-600 text-white hover:bg-red-700 py-2 px-4 rounded-md">Watch Trailer</a>
                            <a href="{{ route('movie.show',$featuredMovie->id) }}" class="bg-red-600 text-white hover:bg-red-700 py-2 px-6 rounded-md">Book Ticket</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!-- End Recommend Movies Section  -->

    <!-- Start Recommend Movies Section -->
    <section id="movies" class="bg-gray-100 py-16">
        <h2 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-red-600 via-yellow-500 to-pink-500 text-center tracking-wide mb-6 drop-shadow-lg">
            Animation Movies
        </h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 px-4">
            <!-- Movie Card 1 -->
            @if($animationMovies != null)
                @foreach($animationMovies as $animationMovie)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('./assets/moviephotos/'.$animationMovie->image_path) }}" alt="{{ $animationMovie->tilte }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2">{{ $animationMovie->title }}</h3>
                            <p class="text-gray-600 mb-4">Showtimes: @foreach($animationMovie->showtimes as $showtime) {{ $showtime->show_time }} , @endforeach</p>
                            <div class="flex justify-center">
                                <a href="{{ $animationMovie->trailer_link }}" target="_blank" class="bg-red-600 text-white hover:bg-red-700 py-2 px-4 rounded-md">Watch Trailer</a>
                                <a href="{{ route('movie.show',$animationMovie->id) }}" class="bg-red-600 text-white hover:bg-red-700 py-2 px-6 rounded-md">Book Ticket</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </section>
    <!-- End Recommend Movies Section  -->
@endsection
