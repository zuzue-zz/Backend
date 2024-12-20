@extends('layouts.app')

@section('content')
    html
    <!-- Profile Page -->
    <section class="container mx-auto p-6 mt-10">
        <h1 class="text-3xl font-bold text-center mb-8">Your Profile</h1>

        <div class="flex flex-wrap justify-center">
            <!-- Profile Details Card -->
            <div class="w-full md:w-2/3 lg:w-1/2 bg-white p-8 rounded-lg shadow-lg">
                <!-- Profile Picture and Name -->
                <div class="flex items-center mb-6">
                    <img src="https://via.placeholder.com/100" alt="User Profile" class="w-24 h-24 rounded-full mr-4">
                    <div>
                        <h2 class="text-2xl font-semibold">{{ $user->name }}</h2>
                        <p class="text-gray-500">{{ $user->email }}</p>
                    </div>
                </div>

                <!-- Personal Info -->
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2">Personal Information</h3>
                    <p><strong>Phone:</strong> {{ $user->phone }}</p>
                    <p><strong>Joined:</strong> {{ $user->created_at->format('d M Y') }}</p>
                </div>



                <!-- Settings -->
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2">Account Settings</h3>
                    <form action="{{ route('profile.destroy',$user->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="w-full bg-red-500 text-white py-2 rounded hover:bg-red-600">Delete Account</button>
                    </form>

                </div>
            </div>
        </div>
    </section>

@endsection
