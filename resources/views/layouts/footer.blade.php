  <!-- Start Search Bar Above of footer  -->
  <section id="booking" class="bg-gray-900 text-white py-16 text-center">
    <h2 class="text-3xl font-bold mb-8">Ready to Book Your Ticket?</h2>
    <form action="search.php" method="GET" class="flex md:flex-row gap-4 justify-center items-center max-w-lg mx-auto">
        <input
            type="text"
            name="movie"
            placeholder="Search for a movie"
            class="w-full md:w-1/3 p-3 rounded-md bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-500"
        />
        <input
            type="date"
            name="date"
            class="w-full md:w-1/3 p-3 rounded-md bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-500"
        />
        <button
            type="submit"
            class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-md transition-colors duration-300"
        >
            Search
        </button>
    </form>
</section>
<!-- End Search Bar Above of footer -->

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-4 text-center text-sm">
    &copy; 2023 MovieTickets. All rights reserved.
  </footer>
