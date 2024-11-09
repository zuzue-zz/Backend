@extends('layouts.admin-index')

@section('content')
    <section class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Movies List</h2>
        <table class="min-w-full bg-white rounded-lg shadow-md items-center">
            <thead class="bg-gray-200">
            <tr class="text-left">
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">Title</th>
                <th class="py-2 px-4">Description</th>
                <th class="py-2 px-4">Duration</th>
                <th class="py-2 px-4">Rating</th>
                <th class="py-2 px-4">Release_Date</th>
                <th class="py-2 px-4">Category ID</th>
                <th class="py-2 px-4">Action</th>
            </tr>
            </thead>
            <tbody>
            <!-- Movie Rows -->
            <tr class="border-b text-left">
                <td class="py-2 px-4">1</td>
                <td class="py-2 px-4">Inception</td>
                <td class="py-2 px-4">Hello World</td>
                <td class="py-2 px-4">148 mins</td>
                <td class="py-2 px-4">5</td>
                <td class="py-2 px-4">Nov 1</td>
                <td class="py-2 px-4">C1</td>
{{--                <td class="py-2 px-4">--}}
{{--                    <button class="text-blue-500 hover:underline"><i class="fa-solid fa-pen-to-square"></i></button>--}}
{{--                    <button class="text-red-500 hover:underline"><i class="fa-solid fa-trash"></i></button>--}}
{{--                </td>--}}
                <td class="py-2 px-4 border-b">
                    <button class="text-blue-500 hover:text-blue-700 mr-3">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>

        <!-- Plus button -->
        <div class="fixed bottom-4 right-4">
            <button class="bg-green-500 text-white rounded-[10px] px-4 flex items-center justify-center shadow-emerald-600 shadow-2xl">
                <span class="text-white text-7xl font-bold">+</span>
            </button>
        </div>
    </section>


@endsection
