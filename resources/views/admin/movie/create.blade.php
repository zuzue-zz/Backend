@extends('layouts.admin-index')

@section('content')


    <!-- Add New Movie Form -->
    <section class="bg-white p-4 mt-8 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Add New Movie</h2>
        <form action="{{route('movies.store')}}" method="POST" class="space-y-4" enctype="multipart/form-data">
            @csrf
            <div class="flex space-x-2">
                <div class="w-1/2">
                    <label class="block text-gray-700">Title</label>
                    <input type="text" name="title" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter movie title" />
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700">Description</label>
                    <input type="text" name="description" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter genre" />
                </div>
            </div>
            <div class="flex space-x-2">
                <div class="w-1/2">
                    <label class="block text-gray-700">Duration</label>
                    <input type="text" name="duration" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter duration (e.g., 120 mins)" />
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700">Rating</label>
                    <input type="text" name="rating" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter duration (e.g., 120 mins)" />
                </div>
            </div>
            <div class="flex space-x-2">
                <div class="w-1/2">
                    <label for="released_date" class="block text-gray-700">Release Date</label>
                    <input type="date" id="release_date" name="release_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Select release date" />
                </div>
                <div class="w-1/2 flex space-x-2">
                    <div class="w-2/3">
                        <label for="image_path" class="block text-gray-700">Poster Image</label>
                        <input type="file" id="image_path" name="image_path" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Choose Image" />
                    </div>
                    <div class="w-1/3 flex space-x-4 justify-center items-center mt-6">
                        <label for="featured" class="block text-gray-700" >Featured</label>
                        <input type="checkbox" id="featured" name="featured" class="" value="1" />
                    </div>
                </div>

            </div>
            <div class="flex space-x-2">
                <div class="w-1/2">
                    <label for="category_id" class="block text-gray-700">Category</label>
                    <select id="category_id" name="category_id" class="w-full px-3 py-2 border border-gray-300 rounded-lg">
                        <option value="" disabled >Select a category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"  >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-1/2">
                    <label for="trailer_link" class="block text-gray-700">Trailer Link</label>
                    <input type="text" id="trailer_link" name="trailer_link" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter Trailer Link" />
                </div>
            </div>

            <div class="flex space-x-2 ">
                <a href="{{ route('movies.index') }}" class="w-1/2 bg-gray-300 text-center text-stone-800 py-2 rounded-lg hover:bg-gray-400">Cancel</a>
                <button type="submit" class="w-1/2 bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600">
                    Add Movie
                </button>
            </div>
        </form>

    </section>

@endsection
