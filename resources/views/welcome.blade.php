<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teach in England - Register</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <div class="background-container" style="background-image: url('{{ asset('images/teacher-classroom.webp') }}'); opacity: 0.75;">
            <div class="container">
                <div class="header">
                    <a href="{{route('contact')}}">CONTACT US</a>
                    <h1>TEACH IN ENGLAND</h1>
                    <a href="{{route('register')}}">REGISTER WITH US</a>
                </div>
            
                <div class="content">
                    <div>
                        <p>If you have the following:</p>
                        <ul>
                            <li>Degree</li>
                            <li>Teacher training (<em>Máster profesorado</em>)</li>
                            <li>B2 level of English</li>
                            <li>9 months teaching experience (not essential)</li>
                        </ul>
                        <p>Register with us and start your journey as a teacher in UK</p>
                    </div>
                    <div>
                        <p>We offer help to obtain Qualified Teacher Status (QTS) or Newly Qualified Status (NQTS) as well as help to secure your first teaching job in the UK!</p>
                        <p class="highlight">Starting salary from £31,650 per year for QTS teachers</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
