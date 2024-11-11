
@extends('layouts.app')

@section('content')
    <section class="container mx-auto p-6 mt-10">
        <h1 class="text-3xl font-bold text-center mb-6 text-white">Contact Us</h1>

        <div class="flex flex-row justify-center">
            <!-- Contact Form -->
            <div class="w-1/2 md:w-1/2 bg-gray-800 p-8 rounded-lg shadow-lg border-t-4 border-indigo-400">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-white font-semibold">Name</label>
                        <input type="text" id="name" name="name" required class="bg-gray-700 w-full p-3 border border-indigo-300 rounded focus:outline-none focus:ring focus:ring-indigo-200">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-white font-semibold">Email</label>
                        <input type="email" id="email" name="email" required class="bg-gray-700 w-full p-3 border border-indigo-300 rounded focus:outline-none focus:ring focus:ring-indigo-200">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-white font-semibold">Message</label>
                        <textarea id="message" name="message" rows="4" required class="bg-gray-700 w-full p-3 border border-indigo-300 rounded focus:outline-none focus:ring focus:ring-indigo-200"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-indigo-500 text-white p-3 rounded hover:bg-indigo-600">Send Message</button>
                </form>
            </div>

            <!-- Company Info -->
            <div class="w-1/2 md:w-1/2 p-8 md:ml-8 mt-8 md:mt-0 bg-gray-800 rounded-lg shadow-lg border-t-4 border-indigo-400">
                <h2 class="text-xl font-bold mb-4 text-white">Our Office</h2>
                <p class="text-white mb-2"><strong>Address:</strong> Chan Aye Thar Zan, Mandalay</p>
                <p class="text-white mb-2"><strong>Phone:</strong> +95 9987654321</p>
                <p class="text-white mb-2"><strong>Email:</strong> movieticket@gmail.com</p>

                <!-- Optional Map Embed -->
                <div class="mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118397.87020004878!2d95.94694132674324!3d21.975517344627058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d1bee31421b%3A0x682fd5de6585427f!2z4YCB4YC74YCZ4YC64YC44YCh4YCx4YC44YCe4YCs4YCH4YC2LCDhgJnhgJThgLnhgJDhgJzhgLHhgLg!5e0!3m2!1smy!2smm!4v1731227866866!5m2!1smy!2smm" width="570" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
