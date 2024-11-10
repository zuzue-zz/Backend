@extends('layouts.admin-index')

@section('content')


    <!-- Add New Showtime Form -->
    <section class="bg-white p-4 mt-8 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Add New Showtime</h2>
        <form action="{{ route('showtimes.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700" for="movie_id">Movie</label>
                <select id="movie_id" name="movie_id" class="w-full px-3 py-2 border border-gray-300 rounded-lg">
                    <option disabled selected>Select a Movie</option>
                    @foreach($movies as $movie)
                        <option value="{{$movie->id}}" >{{$movie->title}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-gray-700">Date</label>
                <input type="date" name="show_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg" />
            </div>
            <div>
                <label class="block text-gray-700">Time</label>
                <input type="time" name="show_time" class="w-full px-3 py-2 border border-gray-300 rounded-lg" />
            </div>
            <div class="flex space-x-2">
                <a href="{{ route('showtimes.index') }}" class="w-1/2 bg-gray-300 text-center text-stone-800 py-2 rounded-lg hover:bg-gray-400">Cancel</a>
                <button type="submit" class="w-1/2 bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600">
                    Add Category
                </button>
            </div>
        </form>
    </section>

@endsection
