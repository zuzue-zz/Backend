@extends('layouts.app')

@section('content')
    <!-- Payment Page -->
    <section class="container mx-auto p-6 mt-10">
        <h1 class="text-4xl font-extrabold text-center text-purple-700 mb-10">Select Your Payment Method</h1>

        <div class="flex justify-center space-x-2">
            <!-- Order Summary Card -->
            <div class="w-1/2 mx-auto bg-white p-8 rounded-xl shadow-xl mb-8 border-t-4 border-purple-500">
                <h2 class="text-2xl font-bold text-purple-600 mb-4">Order Summary</h2>
                <p class="text-gray-800"><strong>Movie:</strong> ${{ $movie->title }}</p>
                <p class="text-gray-800"><strong>Date:</strong> 2024-10-12</p>
                <p class="text-gray-800"><strong>Time:</strong> 12:30 PM</p>
                <p class="text-gray-800"><strong>Seats:</strong> A3, A4, C12</p>
                <p class="text-gray-800"><strong>Total Amount:</strong> 19000.00 ks</p>
            </div>

            <!-- Payment Method Selection -->
            <div class="w-1/2 mx-auto bg-white p-8 rounded-xl shadow-xl border-t-4 border-green-500">
                <h2 class="text-2xl font-bold text-green-600 mb-4">Choose Payment Method</h2>

                <!-- Payment Method Dropdown -->
                <div class="mb-8">
                    <select onchange="showPaymentOption(this.value)" class="w-full p-3 border border-gray-300 rounded-lg bg-gradient-to-r from-green-100 to-green-200 text-green-700 font-semibold focus:outline-none focus:ring-2 focus:ring-green-300">
                        <option value="" disabled selected>Select Payment Method</option>
                        <option value="kpay">KPay</option>
                        <option value="wavepay">WavePay</option>
                        <option value="other">Other Payment Method</option>
                    </select>
                </div>

                <!-- KPay Payment Section -->
                <div id="kpay" class="hidden bg-gradient-to-r from-blue-100 to-blue-200 p-6 rounded-lg shadow-lg mb-4">
                    <h3 class="text-xl font-bold text-blue-700 mb-4">KPay Payment</h3>
                    <div class="text-center mb-4">
                        <p class="text-gray-600">Scan with KPay App:</p>
                        <img src="{{ asset('assets/payments/kpay.jpg') }}" alt="KPay QR Code" class="mx-auto mb-4 border border-gray-300 p-2 rounded-lg">
                        <p class="text-blue-700"><strong>KPay ID:</strong> 123456789</p>
                    </div>
                    <a href="{{ route('home') }}" class="w-full text-center block bg-blue-500 text-white py-3 rounded-lg font-semibold hover:bg-blue-600">Confirm KPay Payment</a>
                </div>

                <!-- WavePay Payment Section -->
                <div id="wavepay" class="hidden bg-gradient-to-r from-yellow-100 to-yellow-200 p-6 rounded-lg shadow-lg mb-4">
                    <h3 class="text-xl font-bold text-yellow-700 mb-4">WavePay Payment</h3>
                    <div class="text-center mb-4">
                        <p class="text-gray-600">Scan with WavePay App:</p>
                        <img src="{{ asset('assets/payments/wave.jpg') }}" alt="WavePay QR Code" class="mx-auto mb-4 border border-gray-300 p-2 rounded-lg">
                        <p class="text-yellow-700"><strong>WavePay ID:</strong> 987654321</p>
                    </div>
                    <a href="{{ route('home') }}" class="w-full text-center block bg-yellow-500 text-white py-3 rounded-lg font-semibold hover:bg-yellow-600">Confirm WavePay Payment</a>
                </div>

                <!-- Other Payment Section -->
                <div id="other" class="hidden bg-gradient-to-r from-purple-100 to-purple-200 p-6 rounded-lg shadow-lg mb-4">
                    <h3 class="text-xl font-bold text-purple-700 mb-4">Other Payment Method</h3>
                    <form action="payment_process.php" method="POST">
                        <label for="account-number" class="block text-purple-700 font-semibold">Account Number</label>
                        <input type="text" id="account-number" name="account-number" required class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-300">
                        <a href="{{ route('home') }}" class="w-full text-center block bg-purple-500 text-white py-3 rounded-lg font-semibold hover:bg-purple-600">Complete Payment</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        function showPaymentOption(option) {
            document.getElementById("kpay").classList.add("hidden");
            document.getElementById("wavepay").classList.add("hidden");
            document.getElementById("other").classList.add("hidden");

            document.getElementById(option).classList.remove("hidden");
        }
    </script>
@endsection
