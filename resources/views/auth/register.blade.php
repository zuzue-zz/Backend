@extends('layouts.guest')

@section('content')

    <div class="bg-gray-50 text-gray-500 shadow"  style="max-width: 1000px">
        <h1 class="text-center font-bold text-violet-400 text-5xl px-4 pt-3">Register Form</h1>
        <!--        <div class="">-->
        <!--            <h1 class="text-center font-bold text-dark text-5xl">Register Form</h1>-->
        <!--        </div>-->
        <div class="rounded-xl flex">
            <div class="w-1/2 hidden md:flex items-center justify-center ps-3">
                <img src="{{ asset('./assets/carouselPictures/mt3.jpg') }}" class="object-contain" />
            </div>


            <div class="w-full md:w-1/2 px-5 py-10">

                <div class="text-center mb-10">
                    <h1 class="Register With Us"></h1>
                </div>


                <!-- <div class="w-1/2 hidden md-block">


                </div> -->
                <form action="{{ route('register') }}" method="POST">

                    @csrf
                    <div class="w-full px-3 mb-2">
                        <label for="name" class="text-xs font-semibold px-1">Full Name</label>
                        <div class="flex">
                            <div class="w-10 flex justify-center items-center z-10">
                                <i class="fas fa-user text-gray-300"></i>
                            </div>
                            <input type="text" name="name" class="w-full border-2 border-gray-200 outline-none focus:border-indigo-500 pl-12 py-2 -ml-10" placeholder="Full Name" />
                        </div>
                    </div>

                    <div class="w-full px-3 mb-3">
                        <label for="email" class="text-xs font-semibold px-1">Email</label>
                        <div class="flex">
                            <div class="w-10 flex justify-center items-center z-10">
                                <i class="fas fa-envelope text-gray-300"></i>
                            </div>
                            <input type="text" name="email" class="w-full border-2 border-gray-200 outline-none focus:border-indigo-500 pl-12 py-2 -ml-10" placeholder="Email" />
                        </div>
                    </div>

                    <div class="w-full px-3 mb-2">
                        <label for="phone" class="text-xs font-semibold px-1">Phone</label>
                        <div class="flex">
                            <div class="w-10 flex justify-center items-center z-10">
                                <i class="fas fa-envelope text-gray-300"></i>
                            </div>
                            <input type="text" name="phone" class="w-full border-2 border-gray-200 outline-none focus:border-indigo-500 pl-12 py-2 -ml-10" placeholder="Phone" />
                        </div>
                    </div>

                    <div class="w-full px-3 mb-2">
                        <label for="password" class="text-xs font-semibold px-1">Password</label>
                        <div class="flex">
                            <div class="w-10 flex justify-center items-center z-10">
                                <i class="fas fa-key text-gray-300"></i>
                            </div>
                            <input type="password" name="password" class="w-full border-2 border-gray-200 outline-none focus:border-indigo-500 pl-12 py-2 -ml-10" placeholder="**********" />
                        </div>
                    </div>

                    <div class="w-full px-3 mb-2">
                        <label for="password_confirmation" class="text-xs font-semibold px-1">Confirm Password</label>
                        <div class="flex">
                            <div class="w-10 flex justify-center items-center z-10">
                                <i class="fas fa-key text-gray-300"></i>
                            </div>
                            <input type="password" name="password_confirmation" class="w-full border-2 border-gray-200 outline-none focus:border-indigo-500 pl-12 py-2 -ml-10" placeholder="**********" />
                        </div>
                    </div>


                    <div>
                        <button type="submit" class="w-full bg-indigo-500 text-white font-semibold uppercase hover:bg-indigo-700 py-3">Register Now</button>
                    </div>
                </form>

                <div class="text-center mt-6">
                    <p>
                        Already Register ? Login
                        <a href="{{ route('login') }}" class="text-indigo-600">Here !!</a>
                    </p>
                </div>

            </div>
        </div>

    </div>
@endsection
