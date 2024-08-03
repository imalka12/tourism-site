@extends('layouts.web-secondary')

@section('page-content')
    <div class="container">
        <div class="row">
            <div class="col"><img class="img-fluid" src="assets/img/about.jpg"></div>
        </div>
    </div> <!-- end:banner image -->

    <div class="container" style="padding-top: 50px;padding-bottom: 25px;">
        <div class="row">
            <div class="col">
                <h3 class="text-uppercase text-center" style="font-family: 'Titillium Web', sans-serif;">CSR Programs Description</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-center" style="font-family: 'Titillium Web', sans-serif;">
                    We are proud to be the global partners of the world's leading travel companies.
                    We are committed to providing the best travel experiences to our clients.
                    We are proud to be the global partners of the world's leading travel companies.
                    We are committed to providing the best travel experiences to our clients.
                    We are proud to be the global partners of the world's leading travel companies.
                    We are committed to providing the best travel experiences to our clients.
                    We are proud to be the global partners of the world's leading travel companies.
                    We are committed to providing the best travel experiences to our clients.
                </p>
            </div>
            <div class="col">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/about.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/about.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/about.jpg" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
