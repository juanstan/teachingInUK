<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teach in England - Register</title>
        <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <!-- Navigation Bar -->
        <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <span style="color: white; padding: 20px;">TEACH IN UK</span>
                </a>
                <!-- Hamburger Menu Toggler -->
                <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Overlay for clicking outside the menu to close it -->
                <div class="overlay" id="nav-overlay" onclick="toggleMenu()"></div>
                <!-- Collapsible Menu -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Register with us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <!-- Main Content -->
            <div class="content">
                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="quote-box">
                            <h2>To teach in UK you need the following:</h2>
                            <div class="list-requirements">
                                <ul>
                                    <li>Degree</li>
                                    <li>Teacher training (<em>Máster profesorado</em>)</li>
                                    <li>B2 level of English</li>
                                    <li>9 months teaching experience (not essential)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="quote-box">
                            <h2>We offer: </h2>
                            <div class="list-requirements">
                                <ul>
                                    <li>Assistance With Validating The Qualification To Teach In UK</li>
                                    <li>Guiadance For The Intterview</li>
                                    <li>Secure Your First Teaching Job in the UK!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row top-100">
                    <div class="col-xl-4">
                        <div class="quote-box">
                            <div class="card-box pd-50">
                                <h2>Register with us <br /> and start your journey <br /> as a teacher in UK.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5"></div>
                    <div class="col-xl-3 no-space alignRight">
                    <div class=" quote-box abitsmaller"><div class="pd-50"><h2>Starting salary <br /> from <span class="fontSalary">£31,650</span> <br />  per year <br /> for teachers</h2></div></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
