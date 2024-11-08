@extends('layouts.guest')

@section('content')
    <div class="bg-gray-50 text-gray-500"  style="max-width: 1000px">
        <h1 class="text-center font-bold text-violet-400 text-5xl px-4 pt-3">Sign In Form</h1>
        <div class="rounded-xl flex">
            <div class="w-full md:w-1/2 px-5 py-10">

                <div class="text-center mb-10">
                    <h1 class="Register With Us"></h1>
                </div>


                <!-- <div class="w-1/2 hidden md-block">


                </div> -->
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="w-auto bg-white px-12 py-12">

                        <div>
                            <div class="w-full px-3 mb-10">
                                <label for="email" class="text-xs font-semibold px-1">Email</label>
                                <div class="flex">
                                    <div class="w-10 flex justify-center items-center z-10">
                                        <i class="fas fa-envelope text-gray-300"></i>
                                    </div>
                                    <input type="text" name="email" class="w-full border-2 border-gray-200 outline-none focus:border-indigo-500 pl-12 py-2 -ml-10" placeholder="Email" />
                                </div>
                            </div>
                            <div class="w-full px-3 mb-10">
                                <label for="password" class="text-xs font-semibold px-1">Password</label>
                                <div class="flex">
                                    <div class="w-10 flex justify-center items-center z-10">
                                        <i class="fas fa-key text-gray-300"></i>
                                    </div>
                                    <input type="password" name="password" class="w-full border-2 border-gray-200 outline-none focus:border-indigo-500 pl-12 py-2 -ml-10" placeholder="**********" />
                                </div>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="w-full bg-indigo-500 text-white font-semibold uppercase hover:bg-indigo-700 py-3">Sigin</button>
                        </div>

                        <div class="text-sm text-slate-500 flex justify-between mt-10">
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                            <a href="{{ route('register') }}">Sign Up</a>
                        </div>

                    </div>
                </form>

            </div>
            <div class="w-1/2 hidden md:flex items-center justify-center pe-3">
                <img src="{{ asset('./assets/carouselPictures/mt3.jpg') }}" class="object-contain" />
            </div>
        </div>
    </div>
@endsection
