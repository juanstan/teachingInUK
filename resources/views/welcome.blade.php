<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teach in England - Register</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="container">
            <h1 class="rojo">Register to Teach in England</h1>
            <p>If you have the following qualifications:</p>
            <ul>
                <li>Degree</li>
                <li>Teacher training (Máster profesorado)</li>
                <li>B2 level of English</li>
                <li>9 months teaching experience (not essential)</li>
            </ul>
            <p>Register with us and start your journey as a teacher in the UK.</p>
            <p>We offer help to obtain Qualified Teacher Status (QTS) or Newly Qualified Status (NQTS) as well as help to secure your first teaching job in the UK!</p>
            <p><strong>Starting salary from £31,650 per year for QTS teachers.</strong></p>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name and Surname(s)</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" id="nationality" name="nationality" value="{{ old('nationality') }}" required>
                    @error('nationality')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="degree">Degree</label>
                    <input type="text" id="degree" name="degree" value="{{ old('degree') }}" required>
                    @error('degree')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="{{ old('dob') }}" required>
                    @error('dob')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="training">Teaching Training (specify)</label>
                    <input type="text" id="training" name="training" value="{{ old('training') }}" required>
                    @error('training')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="english_level">Minimum B2 Level of English (specify your qualifications)</label>
                    <input type="text" id="english_level" name="english_level" value="{{ old('english_level') }}" required>
                    @error('english_level')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="experience">Minimum 9 months of teaching experience (specify)</label>
                    <input type="text" id="experience" name="experience" value="{{ old('experience') }}">
                    @error('experience')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="referees">Please specify your two potential referees</label>
                    <textarea id="referees" name="referees" required>{{ old('referees') }}</textarea>
                    @error('referees')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <button type="submit" class="btn">Register</button>
            </form>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="footer">
                <p>Visit us at: <a href="http://www.teachinengland.com" target="_blank">www.teachinengland.com</a></p>
            </div>
        </div>
    </body>
</html>
