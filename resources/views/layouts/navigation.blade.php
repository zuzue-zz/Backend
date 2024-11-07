<!-- Start Top Nav Bar -->
<!-- Header Section -->
<header class="hero">
    <div class="overlay"></div>

    <!-- Start Navigation Bar -->
    <nav>
        <!-- Logo -->
        <h1>🎬 Movie Tickets</h1>

        <!-- Navigation Links -->
        <ul>
            <!-- Movies Dropdown -->
            <li class="dropdown">
                <a href="#movies">Movies</a>
                <ul class="dropdown-content">
                    <li><a href="#now-showing">Now Showing</a></li>
                    <li><a href="#coming-soon">Coming Soon</a></li>
                </ul>
            </li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </nav>
</header>
<!-- End Top Nav Bar -->
<!-- End Navigation Bar -->
