@extends('layouts.admin-index')

@section('content')
    <section class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Movies List</h2>
        <table class="min-w-full bg-white rounded-lg shadow-md items-center">
            <thead class="bg-gray-200">
            <tr class="text-left">
                <th class="py-2 px-4">No.</th>
                <th class="py-2 px-4">Title</th>
                <th class="py-2 px-4">Description</th>
                <th class="py-2 px-4">Duration</th>
                <th class="py-2 px-4">Rating</th>
                <th class="py-2 px-4">Release_Date</th>
                <th class="py-2 px-4">Category</th>
                <th class="py-2 px-4">Action</th>
            </tr>
            </thead>
            <tbody>
            <!-- Movie Rows -->
            @foreach($movies as $idx=>$movie)
                <tr class="border-b text-left">
                    <td class="py-2 px-4">{{ $idx+1 }}</td>
                    <td class="py-2 px-4">{{ $movie->title }}</td>
                    <td class="py-2 px-4">{{ $movie->description }}</td>
                    <td class="py-2 px-4">{{ $movie->duration}}</td>
                    <td class="py-2 px-4">{{ $movie->rating }}</td>
                    <td class="py-2 px-4">{{ $movie->release_date}}</td>
                    <td class="py-2 px-4">{{ $movie->category->name }}</td>
                    <td class="py-2 px-4 flex">
                        <a href="{{ route('movies.edit',$movie->id)}}" class="text-blue-500 hover:text-blue-700 mr-3">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('movies.destroy',$movie->id) }}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Plus button -->
        <div class="fixed bottom-4 right-4">
            <a href="{{ route('movies.create') }}" class="bg-green-500 text-white rounded-[10px] px-4 flex items-center justify-center shadow-emerald-600 shadow-2xl">
                <span class="text-white text-7xl font-bold">+</span>
            </a>
        </div>
    </section>


@endsection
