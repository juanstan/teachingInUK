<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teach in England - Register</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        @vite(['resources/css/contact.css'])
    </head>

    <body>
        <div class="background-container" style="background-image: url('{{ asset('images/teacher-classroom.webp') }}'); opacity: 0.75;">
            <div class="container">
            <div class="header center">
                <a href="{{route('home')}}"><h1>TEACH IN ENGLAND</h1></a>
            </div>
                <div class="content">
                    <div>
                        <p>Please contact us:</p>
                        <ul>
                            <li>Phone: +447570945349</li>
                            <li>hello@teachingInEngland.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
