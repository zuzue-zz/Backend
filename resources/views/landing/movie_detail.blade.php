@extends('layouts.app')

@section('content')

    <div class="bg-gray-900 py-[50px] px-[25px] mt-[100px]">
        <!-- Main Content -->
        <div class="flex-grow flex mt-4 space-x-4">

            <!-- Left Section -->
            <div class="w-1/3">
                <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                    <img src="{{asset('./assets/moviephotos/'.$movie->image_path)}}" alt="Movie Poster" class="w-full h-auto rounded-lg shadow-md mb-4">
                    <div class="rating">
                        <p class="text-white ml-2 mb-2">Rating : {{ $movie->rating }}</p>

                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="flex-1 space-y-6">

                <!-- Title and Director -->
                <div class="space-y-1">
                    <h2 class="text-4xl text-white font-bold">{{ $movie->title }}</h2>
                    <span class="text-gray-400 text-sm"></span>
                </div>

                <!-- Movie Info -->
                <div class="space-y-4 text-gray-400">
                    <div class="flex space-x-8">
                        <span class="flex items-center"><i class="fa-solid fa-calendar-days mr-2"></i>{{ $movie->release_date }}</span>
                        <span class="flex items-center"><i class="fa-regular fa-clock mr-2"></i></span>
                    </div>
                    <div>
                        <span class="text-base font-semibold">{{$movie->category->name}}</span>
                    </div>

                    <!-- Buttons -->
                    <div class="flex space-x-4">
                        <a href="{{$movie->trailer_link}}" target="_blank" class="flex items-center justify-center w-40 bg-white text-gray-800 font-semibold py-2 px-4 rounded-full shadow-md hover:bg-red-700 hover:text-white transition">
                            <i class="fa-solid fa-play mr-2"></i>Trailer
                        </a>
                        <a href="" class="flex items-center justify-center w-40 bg-white text-gray-800 font-semibold py-2 px-4 rounded-full shadow-md hover:bg-red-700 hover:text-white transition">
                            <i class="mr-2"></i>Book Tickets
                        </a>
                    </div>
                </div>
                <!-- Review Section -->
                <div class="bg-gray-800 p-4 rounded-lg shadow-md">
                    <p class="text-gray-300 leading-relaxed">
                        {{ $movie->description }}
                </div>
            </div>
        </div>
    </div>

@endsection
