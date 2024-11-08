@extends('layouts.admin-index')

@section('content')
    <section class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Movies List</h2>
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">Title</th>
                <th class="py-2 px-4">Genre</th>
                <th class="py-2 px-4">Duration</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
            </thead>
            <tbody>
            <!-- Movie Rows -->
            <tr class="border-b">
                <td class="py-2 px-4">1</td>
                <td class="py-2 px-4">Inception</td>
                <td class="py-2 px-4">Sci-Fi</td>
                <td class="py-2 px-4">148 mins</td>
                <td class="py-2 px-4">
                    <button class="text-blue-500 hover:underline">Edit</button> |
                    <button class="text-red-500 hover:underline">Delete</button>
                </td>
            </tr>
            <!-- Additional rows here... -->
            </tbody>
        </table>
    </section>

    <!-- Add New Movie Form -->
    <section class="bg-white p-4 mt-8 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Add New Movie</h2>
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label class="block text-gray-700">Title</label>
                <input type="text" name="title" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter movie title" />
            </div>
            <div>
                <label class="block text-gray-700">Genre</label>
                <input type="text" name="genre" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter genre" />
            </div>
            <div>
                <label class="block text-gray-700">Duration</label>
                <input type="text" name="duration" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter duration (e.g., 120 mins)" />
            </div>
            <div>
                <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600">
                    Add Movie
                </button>
            </div>
        </form>
    </section>
@endsection
