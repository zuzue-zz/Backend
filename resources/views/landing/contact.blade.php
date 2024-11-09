
@extends('layouts.app')

@section('content')
    <section class="container mx-auto p-6 mt-10">
        <h1 class="text-3xl font-bold text-center mb-6">Contact Us</h1>

        <div class="flex flex-row justify-center">
            <!-- Contact Form -->
            <div class="w-1/2 md:w-1/2 bg-white p-8 rounded-lg shadow-lg ">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold">Name</label>
                        <input type="text" id="name" name="name" required class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold">Email</label>
                        <input type="email" id="email" name="email" required class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-semibold">Message</label>
                        <textarea id="message" name="message" rows="4" required class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded hover:bg-blue-600">Send Message</button>
                </form>
            </div>

            <!-- Company Info -->
            <div class="w-1/2 md:w-1/2 p-8 md:ml-8 mt-8 md:mt-0 bg-white rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Our Office</h2>
                <p class="text-gray-700 mb-2"><strong>Address:</strong> 1234 Main St, City, Country</p>
                <p class="text-gray-700 mb-2"><strong>Phone:</strong> +123 456 7890</p>
                <p class="text-gray-700 mb-2"><strong>Email:</strong> info@company.com</p>

                <!-- Optional Map Embed -->
                <div class="mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59216.06681367549!2d96.05985993408734!3d21.93439091724989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d7e63b3951f%3A0xf056698093a6abfc!2sChanmyathazi%2C%20Mandalay!5e0!3m2!1sen!2smm!4v1731182258078!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
