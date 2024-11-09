@extends('layouts.admin-index')

@section('content')


    <!-- Add New Category Form -->
    <section class="bg-white p-4 mt-8 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Add New Category</h2>
        <form action="{{ route('categories.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700">Category Name</label>
                <input type="text" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg @error('name') border-red-300 @enderror" placeholder="Enter category name" />
                @error('name')
                    <div class="text-red-900">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="flex space-x-2">
                <a href="{{ route('categories.index') }}" class="w-1/2 bg-gray-300 text-center text-stone-800 py-2 rounded-lg hover:bg-gray-400">Cancel</a>
                <button type="submit" class="w-1/2 bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600">
                    Add Category
                </button>
            </div>
        </form>
    </section>

@endsection
