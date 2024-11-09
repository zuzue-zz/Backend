@extends('layouts.app')

@section('content')
    <!-- About Us Section -->
    <section class="container mx-auto p-6 mt-10">
        <h1 class="text-3xl font-bold text-center mb-6">About Us</h1>

        <!-- Mission Statement -->
        <div class="bg-white p-8 rounded-lg shadow-lg mb-8">
            <h2 class="text-2xl font-semibold mb-4">Our Mission</h2>
            <p class="text-gray-700 leading-relaxed">
                Our mission is to deliver the best movie experiences through our online ticketing platform, making it easy for everyone to book their favorite shows from anywhere. We strive to make movie-going accessible, enjoyable, and convenient for everyone.
            </p>
        </div>

        <!-- Team Section -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Meet Our Team</h2>

            <div class="flex flex-wrap -mx-4">
                <!-- Example team member -->
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                        <img src="https://via.placeholder.com/100" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-semibold">John Doe</h3>
                        <p class="text-gray-600">Founder & CEO</p>
                    </div>
                </div>
                <!-- Add more team members similarly -->
            </div>
        </div>
    </section>


@endsection

