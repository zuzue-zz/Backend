@extends('layouts.admin-index')

@section('content')
    <!-- Categories Management View -->

        @if(session('success'))
            <div class="bg-white p-4 mt-8 rounded-lg shadow-md mb-2">
                {{session('success')}}
            </div>
        @endif


    <section class="bg-white p-4 mt-8 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Categories List</h2>
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead class="bg-gray-200">
            <tr class="text-left">
                <th class="py-2 px-4">Category ID</th>
                <th class="py-2 px-4">Name</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
            </thead>
            <tbody>
            <!-- Category Rows -->
            @foreach($categories as $category)
                <tr class="border-b text-left">
                    <td class="py-2 px-4">{{ $category->id }}</td>
                    <td class="py-2 px-4">{{ $category->name }}</td>
                    <td class="py-2 px-4 flex">
                        <a href="{{ route('categories.edit',$category->id)}}" class="text-blue-500 hover:text-blue-700 mr-3">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('categories.destroy',$category->id) }}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <!-- Additional rows here... -->
            </tbody>
        </table>

        <!-- Plus button -->
        <div class="fixed bottom-4 right-4">
            <a href="{{ route('categories.create') }}" class="bg-green-500 text-white rounded-[10px] px-4 flex items-center justify-center shadow-emerald-600 shadow-2xl">
                <span class="text-white text-7xl font-bold">+</span>
            </a>
        </div>
    </section>



@endsection
