@extends('layouts.app')

@section('content')
    <!-- About Us Section -->
    <section class="container mx-auto p-6 mt-10 bg-gray-900">
        <h1 class="text-4xl font-bold text-center mb-10 text-white">About Us</h1>

        <!-- Mission Statement -->
        <div class="p-8 rounded-lg shadow-lg mb-8 bg-gray-700 border-t-4 border-indigo-400">
            <h2 class="text-2xl font-semibold mb-4 text-indigo-200">Our Mission</h2>
            <p class="text-gray-300 leading-relaxed">
                Our mission is to deliver the best movie experiences through our online ticketing platform, making it easy for everyone to book their favorite shows from anywhere. We strive to make movie-going accessible, enjoyable, and convenient for everyone.
            </p>
        </div>

        <!-- Team Section -->
        <div class="p-8 rounded-lg shadow-lg bg-gray-700 border-t-4 border-indigo-400">
            <h2 class="text-2xl font-semibold mb-4 text-white">Meet Our Team</h2>

            <div class="flex flex-wrap -mx-4">
                <!-- Example team member -->
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-gray-500 p-6 rounded-lg shadow-lg text-center hover:shadow-2xl transition-shadow duration-300 border-t-4 border-indigo-300">
                        <div class="relative w-24 h-24 mx-auto mb-4">
                            <img src="{{ asset('./assets/logo/kiko2.jpg') }}" alt="Team Member" class="w-full h-full rounded-full border-4 border-teal-400">
                        </div>
                        <h3 class="text-xl font-semibold text-white">Khant Zaw Linn</h3>
                        <p class="text-gray-900">Founder & CEO</p>
                    </div>
                </div>
                <!-- Add more team members similarly -->
            </div>
        </div>
    </section>

@endsection
