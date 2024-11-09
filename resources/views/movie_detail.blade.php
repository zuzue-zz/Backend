@extends('layouts.app')

@section('content')

    <div class="bg-gray-900 py-[50px] px-[25px] mt-[25px]">
        <!-- Main Content -->
        <div class="flex-grow flex mt-4 space-x-4">

            <!-- Left Section -->
            <div class="w-1/3">
                <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                    <img src="{{asset('./assets/carouselPictures/mt5.jpg')}}" alt="Movie Poster" class="w-full h-auto rounded-lg shadow-md mb-4">
                    <div class="rating">
                        <p class="text-white ml-2 mb-2">Rating</p>
                        <div class="relative w-11/12 h-1.5 bg-[#eee4e1] border border-black rounded-lg ml-2 mt-5 overflow-hidden">
                            <div class="absolute left-0 top-0 h-full w-[50%] bg-gradient-to-r from-[#48cae4] via-[#0077b6] to-[#ade8f4] rounded-lg animate-rating"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="flex-1 space-y-6">

                <!-- Title and Director -->
                <div class="space-y-1">
                    <h2 class="text-4xl text-white font-bold">Pirates of the Caribbean</h2>
                    <span class="text-gray-400 text-sm">Directed by Who...</span>
                </div>

                <!-- Movie Info -->
                <div class="space-y-4 text-gray-400">
                    <div class="flex space-x-8">
                        <span class="flex items-center"><i class="fa-solid fa-calendar-days mr-2"></i>1920</span>
                        <span class="flex items-center"><i class="fa-regular fa-clock mr-2"></i>1:30</span>
                    </div>
                    <div>
                        <span class="text-base font-semibold">Adventure, bla bla bla</span>
                    </div>

                    <!-- Buttons -->
                    <div class="flex space-x-4">
                        <a href="#" class="flex items-center justify-center w-40 bg-white text-gray-800 font-semibold py-2 px-4 rounded-full shadow-md hover:bg-red-700 hover:text-white transition">
                            <i class="fa-solid fa-play mr-2"></i>Trailer
                        </a>
                        <a href="#" class="flex items-center justify-center w-40 bg-white text-gray-800 font-semibold py-2 px-4 rounded-full shadow-md hover:bg-red-700 hover:text-white transition">
                            <i class="mr-2"></i>Book Tickets
                        </a>
                    </div>
                </div>
                <!-- Review Section -->
                <div class="bg-gray-800 p-4 rounded-lg shadow-md">
                    <p class="text-gray-300 leading-relaxed">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
