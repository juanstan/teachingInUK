<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teach in England - Register</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        @vite(['resources/css/aboutus.css', 'resources/js/app.js'])
    </head>

    <body>
        <!-- Navigation Bar -->
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <span class="navbar-brand"><span style="color: white; padding: 20px;"><a style="color: white; text-decoration:none" href="{{route('home')}}">TEACH IN UK</a></span></span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
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
                <div class="row top-50">
                    <div class="col-xl-4">
                        <div class="quote-box">
                            <div class="card-box pd-50">
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
                    </div>
                    <div class="col-xl-5"></div>
                    <div class="col-xl-3 no-space alignRight">
                        <div class="quote-box">
                            <div class="card-box pd-50">
                                <h2>We offer: </h2>
                                <div class="list-requirements right">
                                    <ul>
                                        <li>Assistance With Validating The Qualification To Teach In UK</li>
                                        <li>Guiadance For The Intterview</li>
                                        <li>Secure Your First Teaching Job in the UK!</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
