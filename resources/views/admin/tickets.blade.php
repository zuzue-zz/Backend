@extends('layouts.admin-index')

@section('content')
    <!-- Tickets Management View -->
    <section class="bg-white p-4 mt-8 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Tickets List</h2>
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4">Ticket ID</th>
                <th class="py-2 px-4">User</th>
                <th class="py-2 px-4">Movie</th>
                <th class="py-2 px-4">Showtime</th>
                <th class="py-2 px-4">Seat</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
            </thead>
            <tbody>
            <!-- Ticket Rows -->
            <tr class="border-b">
                <td class="py-2 px-4">1</td>
                <td class="py-2 px-4">John Doe</td>
                <td class="py-2 px-4">Inception</td>
                <td class="py-2 px-4">2024-11-10 7:00 PM</td>
                <td class="py-2 px-4">A12</td>
                <td class="py-2 px-4">
                    <button class="text-blue-500 hover:underline">Edit</button> |
                    <button class="text-red-500 hover:underline">Delete</button>
                </td>
            </tr>
            <!-- Additional rows here... -->
            </tbody>
        </table>
    </section>

    <!-- Add New Ticket Form -->
    <section class="bg-white p-4 mt-8 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Add New Ticket</h2>
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label class="block text-gray-700">User ID</label>
                <input type="text" name="user_id" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter User ID" />
            </div>
            <div>
                <label class="block text-gray-700">Movie</label>
                <input type="text" name="movie" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter Movie Name" />
            </div>
            <div>
                <label class="block text-gray-700">Showtime</label>
                <input type="text" name="showtime" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter Showtime" />
            </div>
            <div>
                <label class="block text-gray-700">Seat</label>
                <input type="text" name="seat" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter Seat Number" />
            </div>
            <div>
                <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600">
                    Add Ticket
                </button>
            </div>
        </form>
    </section>

@endsection
