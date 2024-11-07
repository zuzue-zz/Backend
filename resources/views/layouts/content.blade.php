@section('content')
    <!-- Start Carousel Area -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="carousals">
                    <!-- Start Carousel -->
                    <div id="demo" class="carousel slide me-auto" data-bs-ride="carousel">
                        <!-- Start Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-current="true"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>
                        <!-- End Indicators/dots -->

                        <!-- Start carousel-inner -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/carouselPictures/mt1.jpg" alt="picture1" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/carouselPictures/mt2.jpg" alt="picture2" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/carouselPictures/mt3.jpg" alt="picture3" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/carouselPictures/mt4.jpg" alt="picture4" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/carouselPictures/mt5.jpg" alt="picture5" class="d-block w-100">
                            </div>
                        </div>
                        <!-- End carousel-inner -->

                        <!-- Start Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <!-- End Left and right controls/icons -->
                    </div>
                    <!-- End Carousel -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Carousel Area -->


    <!-- Start Now Showing Movies Section -->
    <section id="movies" class="featured-movies">
        <h2>Now Showing Movies</h2>
        <div class="movie-grid">
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 1</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 2</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 3</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 4</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 5</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 6</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <!-- More movie cards can go here -->
        </div>
    </section>
    <!-- End Now Showing Movies Section -->

    <!-- Start Popular Movies Section -->
    <section id="movies" class="featured-movies">
        <h2>Popular Movies</h2>
        <div class="movie-grid">
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 1</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 2</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 3</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 4</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 5</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 6</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <!-- More movie cards can go here -->
        </div>
    </section>
    <!-- End Popular Movies Section -->

    <!-- Start Featured Movies Section -->
    <section id="movies" class="featured-movies">
        <h2>Featured Movies</h2>
        <div class="movie-grid">
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 1</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 2</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 3</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 4</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 5</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <div class="movie-card">
                <img src="https://img.freepik.com/free-photo/view-3d-cinema-elements_23-2150720822.jpg?semt=ais_hybrid" alt="Movie 1">
                <h3>Movie Title 6</h3>
                <p>Showtimes: 1:00 PM, 4:00 PM, 7:00 PM</p>
                <div class="card-footer">
                    <a href="#trailer" class="trailer-button">Watch Trailer</a>
                    <a href="#booking" class="book-button">Book Ticket</a>
                </div>
            </div>
            <!-- More movie cards can go here -->
        </div>
    </section>
    <!-- End Featured Movies Section -->
@endsection
