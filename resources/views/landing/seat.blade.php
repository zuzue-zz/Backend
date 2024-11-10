@extends('layouts.app')

@section('content')
    <div class="container max-w-8xl  p-5 rounded-lg shadow-lg text-white">

        <div class="movie-section md:flex gap-8">
            <!-- Movie Details Section -->
            <div class="movie-details md:w-1/3 text-center bg-blue-100 rounded-lg p-4 shadow-lg">
                <img src="{{asset("assets/moviephotos/".$movie->image_path ) }}" alt="{{ $movie->title }}" class="w-full object-cover h-auto rounded-t-lg mb-4" />
                <div class="movie-info text-stone-800">
                    <h1 class="text-2xl font-bold text-gray-800">{{ $movie->title }}</h1>
                    <p class="mt-3"><strong>Category:</strong> {{$movie->category->name}}</p>
                    <p><strong>Duration:</strong> {{ $movie->duration }} ms</p>
                    <p><strong>Rating:</strong> {{$movie->rating}}</p>
                </div>
            </div>
            <!-- Booking Section -->
            <div class="booking-section md:w-2/3">
                <!-- Date and Time Selection -->
                <div class="date-time-selection md:flex gap-8 mb-8">
                    <div class="date-selection w-full md:w-1/2 mb-6 md:mb-0">
                        <h2 class="text-xl font-semibold mb-3">Select Date</h2>
                        <div class="border-b-2 mb-3"></div>

                        <div class="date-options flex flex-wrap gap-2 justify-left items-center text-stone-800">
                            <button class="date-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">Mon</button>
                            <button class="date-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">Tue</button>
                            <button class="date-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">Wed</button>
                            <button class="date-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">Thus</button>
                            <button class="date-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">Fri</button>
                            <button class="date-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">Sat</button>
                            <button class="date-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">Sun</button>
                        </div>

                    </div>

                    <div class="time-selection w-full md:w-1/2">
                        <h2 class="text-xl font-semibold mb-3">Select Show Time</h2>
                        <div class="border-b-2 mb-3"></div>
                        <!-- <div class="time-options flex flex-wrap gap-2">
                          <button class="px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">10:00 AM</button>
                          <button class="px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">12:30 PM</button>
                          <button class="px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">03:00 PM</button>
                          <button class="px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">5:30 PM</button>
                          <button class="px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">8:00 PM</button>
                          <button class="px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">10:30 PM</button>

                        </div> -->

                        <!-- Time Selection Buttons in a flex container -->
                        <div class="time-options flex flex-wrap gap-2 justify-left items-center text-stone-800">
                            <button class="time-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">10:00 AM</button>
                            <button class="time-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">12:30 PM</button>
                            <button class="time-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">03:00 PM</button>
                            <button class="time-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">5:30 PM</button>
                            <button class="time-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">8:00 PM</button>
                            <button class="time-button px-4 py-2 rounded-md bg-gray-200 hover:bg-green-300 active:bg-green-500">10:30 PM</button>
                        </div>
                    </div>

                    <!-- Date Selection Buttons in a flex container -->

                </div>

                <!-- Seating Section -->
                <div class="seating">
                    <h2 class="text-xl font-semibold text-center mb-4">Select Seats</h2>
                    <div id="seat-layout" class="grid gap-4">
                        <!-- Seat rows will be dynamically added here -->
                    </div>
                </div>

                <!-- Legend and Proceed Button -->
                <div class="mt-10 flex justify-center items-center">
                    <div class="flex gap-4 items-center">
                        <div class="seat w-6 h-6 bg-gray-300 rounded-lg"></div><span>Available</span>
                        <div class="seat w-6 h-6 bg-green-500 rounded-lg"></div><span>Selected</span>
                        <div class="seat w-6 h-6 bg-red-500 rounded-lg"></div><span>Taken</span>
                    </div>
                </div>
                <div class="flex justify-left items-center mt-5">
                    <a href="{{ route('payment',$movie->id) }}" class="proceed-button px-6 py-2 text-white font-semibold bg-green-600 hover:bg-green-800 rounded-lg transition duration-200">
                        Proceed to Payment
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        // Seat configuration with row labels and divided sections
        const seatConfig = [
            { row: "A", seats: ["available", "taken", "available", "available", "taken", "available", "available", "taken", "available", "available", "taken", "available", "available", "taken", "available", "available", "taken"] },
            { row: "B", seats: ["available", "available", "available", "taken", "available", "taken", "available", "available", "available", "taken", "available", "taken", "available", "available", "available", "taken", "available"] },
            { row: "C", seats: ["taken", "available", "available", "available", "taken", "available", "taken", "available", "available", "available", "taken", "available", "taken", "available", "available", "available", "taken"] },
            { row: "D", seats: ["available", "available", "taken", "available", "available", "taken", "available", "available", "taken", "available", "available", "taken", "available", "available", "taken", "available", "available"] },
            { row: "E", seats: ["available", "taken", "available", "available", "taken", "available", "available", "taken", "available", "available", "taken", "available", "available", "taken", "available", "available", "taken"] },
            { row: "F", seats: ["available", "available", "available", "taken", "available", "taken", "available", "available", "available", "taken", "available", "taken", "available", "available", "available", "taken", "available"] },
            { row: "G", seats: ["taken", "available", "available", "available", "taken", "available", "taken", "available", "available", "available", "taken", "available", "taken", "available", "available", "available", "taken"] },
            { row: "H", seats: ["available", "available", "taken", "available", "available", "taken", "available", "available", "taken", "available", "available", "taken", "available", "available", "taken", "available", "available"] }
        ];

        // Split seats into three groups: left (4 seats), middle (10 seats), and right (4 seats)
        const leftSeatCount = 4;
        const middleSeatCount = 10;
        const rightSeatCount = 2;

        // Populate seat layout dynamically
        const seatLayoutContainer = document.getElementById("seat-layout");

        seatConfig.forEach((rowConfig) => {
            // Create a row container for each row of seats
            const rowDiv = document.createElement("div");
            rowDiv.className = "flex gap-8 mb-4";

            // Add row label
            const rowLabel = document.createElement("span");
            rowLabel.textContent = rowConfig.row;
            rowLabel.className = "w-8 text-center font-bold";
            rowDiv.appendChild(rowLabel);

            // Split into three groups: left seats, middle seats, and right seats
            const leftSeats = rowConfig.seats.slice(0, leftSeatCount);  // Left 4 seats
            const middleSeats = rowConfig.seats.slice(leftSeatCount, leftSeatCount + middleSeatCount);  // Middle 10 seats
            const rightSeats = rowConfig.seats.slice(leftSeatCount + middleSeatCount, leftSeatCount + middleSeatCount + rightSeatCount);  // Right 4 seats

            // Create a container for the left seats
            const leftSeatsContainer = document.createElement("div");
            leftSeatsContainer.className = "flex gap-2";

            // Add left seats
            leftSeats.forEach((seatStatus) => {
                const seatDiv = document.createElement("div");
                seatDiv.className = `seat w-8 h-8 rounded-lg cursor-pointer ${
                    seatStatus === "taken" ? "bg-red-500" : "bg-gray-300"
                }`;
                seatDiv.dataset.status = seatStatus;

                // Toggle selected state for available seats
                if (seatStatus === "available") {
                    seatDiv.addEventListener("click", () => {
                        seatDiv.classList.toggle("bg-green-500");
                        seatDiv.classList.toggle("bg-gray-300");
                    });
                }
                leftSeatsContainer.appendChild(seatDiv);
            });

            // Create a container for the middle seats
            const middleSeatsContainer = document.createElement("div");
            middleSeatsContainer.className = "flex gap-2";

            // Add middle seats
            middleSeats.forEach((seatStatus) => {
                const seatDiv = document.createElement("div");
                seatDiv.className = `seat w-8 h-8 rounded-lg cursor-pointer ${
                    seatStatus === "taken" ? "bg-red-500" : "bg-gray-300"
                }`;
                seatDiv.dataset.status = seatStatus;

                // Toggle selected state for available seats
                if (seatStatus === "available") {
                    seatDiv.addEventListener("click", () => {
                        seatDiv.classList.toggle("bg-green-500");
                        seatDiv.classList.toggle("bg-gray-300");
                    });
                }
                middleSeatsContainer.appendChild(seatDiv);
            });

            // Create a container for the right seats
            const rightSeatsContainer = document.createElement("div");
            rightSeatsContainer.className = "flex gap-2";

            // Add right seats
            rightSeats.forEach((seatStatus) => {
                const seatDiv = document.createElement("div");
                seatDiv.className = `seat w-8 h-8 rounded-lg cursor-pointer ${
                    seatStatus === "taken" ? "bg-red-500" : "bg-gray-300"
                }`;
                seatDiv.dataset.status = seatStatus;

                // Toggle selected state for available seats
                if (seatStatus === "available") {
                    seatDiv.addEventListener("click", () => {
                        seatDiv.classList.toggle("bg-green-500");
                        seatDiv.classList.toggle("bg-gray-300");
                    });
                }
                rightSeatsContainer.appendChild(seatDiv);
            });

            // Append the three seat sections into the row
            rowDiv.appendChild(leftSeatsContainer);
            rowDiv.appendChild(middleSeatsContainer);
            rowDiv.appendChild(rightSeatsContainer);

            // Add the row to the seat layout container
            seatLayoutContainer.appendChild(rowDiv);
        });


        // Function to handle button clicks and ensure only one button is "selected"
        function handleDateButtonClick(clickedButton) {
            // Get all buttons inside the .date-options container
            const allButtons = document.querySelectorAll('.date-button');

            // Loop through all buttons and reset their background to gray (deselected)
            allButtons.forEach(button => {
                button.classList.remove('bg-green-500');
                button.classList.add('bg-gray-200');
            });

            // Now select the clicked button (green)
            clickedButton.classList.add('bg-green-500');
            clickedButton.classList.remove('bg-gray-200');
        }

        // Add event listeners to all date buttons
        document.querySelectorAll('.date-button').forEach(button => {
            button.addEventListener('click', function() {
                handleDateButtonClick(button);
            });
        });

        // Function to handle time button clicks and ensure only one button is "selected"
        function handleTimeButtonClick(clickedButton) {
            // Get all time buttons
            const allButtons = document.querySelectorAll('.time-button');

            // Loop through all buttons and reset their background to gray (deselected)
            allButtons.forEach(button => {
                button.classList.remove('bg-green-500');
                button.classList.add('bg-gray-200');
            });

            // Now select the clicked button (green)
            clickedButton.classList.add('bg-green-500');
            clickedButton.classList.remove('bg-gray-200');
        }

        // Add event listeners to all time buttons
        document.querySelectorAll('.time-button').forEach(button => {
            button.addEventListener('click', function() {
                handleTimeButtonClick(button);
            });
        });
    </script>
@endsection

