@extends('layouts.admin-index')

@section('content')

    @if(session('success'))
        <div class="bg-white text-center text-green-800 p-4 mt-8 rounded-lg shadow-md mb-2">
            {{session('success')}}
        </div>
    @endif

    <!-- Showtimes Management View -->
    <section class="bg-white p-4 mt-8 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Showtimes List</h2>
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4">No.</th>
                <th class="py-2 px-4">Movie</th>
                <th class="py-2 px-4">Date</th>
                <th class="py-2 px-4">Time</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
            </thead>
            <tbody>
            <!-- Showtime Rows -->
           @foreach($showtimes as $idx => $showtime)
               <tr class="border-b text-center">
                   <td class="py-2 px-4">{{ $idx+1 }}</td>
                   <td class="py-2 px-4">{{ $showtime->movie->title }}</td>
                   <td class="py-2 px-4">{{ $showtime->show_date }}</td>
                   <td class="py-2 px-4">{{ $showtime->show_time }}</td>
                   <td class="py-2 px-4 flex justify-center">
                       <a href="{{ route('showtimes.edit',$showtime->id)}}" class="text-blue-500 hover:text-blue-700 mr-3">
                           <i class="fas fa-edit"></i>
                       </a>
                       <form action="{{ route('showtimes.destroy',$showtime->id) }}" method="post">
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
            <a href="{{ route('showtimes.create') }}" class="bg-green-500 text-white rounded-[10px] px-4 flex items-center justify-center shadow-emerald-600 shadow-2xl">
                <span class="text-white text-7xl font-bold">+</span>
            </a>
        </div>
    </section>

@endsection
