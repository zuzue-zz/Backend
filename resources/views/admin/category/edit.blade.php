@extends('layouts.admin-index')

@section('content')


    <!-- Add New Category Form -->
    <section class="bg-white p-4 mt-8 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Edit Category</h2>
        <form action="{{ route('categories.update',$category->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('put')
            <div>
                <label class="block text-gray-700">Category Name</label>
                <input type="text" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter category name" value="{{ old('name',$category->name) }}"/>
            </div>
            <div class="flex space-x-2">
                <a href="{{ route('categories.index') }}" class="w-1/2 bg-gray-300 text-center text-stone-800 py-2 rounded-lg hover:bg-gray-400">Cancel</a>
                <button type="submit" class="w-1/2 bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600">
                    Edit Category
                </button>
            </div>
        </form>
    </section>

@endsection
