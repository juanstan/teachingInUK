<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teach in England - Register</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        @vite(['resources/css/register.css'])
    </head>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="container">
        <div class="header center">
            <a href="{{route('home')}}"><h1>TEACH IN ENGLAND</h1></a>
        </div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <table>
                <tr class="form-group">
                    <th><label for="name">Name and Surname(s)</label>
                    <td><input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                </tr>
                <tr class="form-group">
                <th><label for="nationality">Nationality</label></th>
                <td><input type="text" id="nationality" name="nationality" value="{{ old('nationality') }}" required></td>
                    @error('nationality')<div class="text-danger">{{ $message }}</div>@enderror
                </tr>
                <tr class="form-group">
                <th><label for="degree">Degree</label></th>
                <td><input type="text" id="degree" name="degree" value="{{ old('degree') }}" required></td>
                    @error('degree')<div class="text-danger">{{ $message }}</div>@enderror
                </tr>
                <tr class="form-group">
                <th><label for="dob">Date of Birth</label></th>
                <td><input type="date" id="dob" name="dob" value="{{ old('dob') }}" required></td>
                    @error('dob')<div class="text-danger">{{ $message }}</div>@enderror
                </tr>
                <tr class="form-group">
                <th><label for="training">Teaching Training (specify)</label></th>
                <td><input type="text" id="training" name="training" value="{{ old('training') }}" required></td>
                    @error('training')<div class="text-danger">{{ $message }}</div>@enderror
                </tr>
                <tr class="form-group">
                <th><label for="english_level">Minimum B2 Level of English (specify your qualifications)</label></th>
                <td><input type="text" id="english_level" name="english_level" value="{{ old('english_level') }}" required></td>
                    @error('english_level')<div class="text-danger">{{ $message }}</div>@enderror
                </tr>
                <tr class="form-group">
                <th><label for="experience">Minimum 9 months of teaching experience (specify)</label></th>
                <td><input type="text" id="experience" name="experience" value="{{ old('experience') }}"></td>
                    @error('experience')<div class="text-danger">{{ $message }}</div>@enderror
                </tr>
                <tr class="form-group">
                <th><label for="referees">Please specify your two potential referees</label></th>
                <td><textarea id="referees" name="referees" required>{{ old('referees') }}</textarea></td>
                    @error('referees')<div class="text-danger">{{ $message }}</div>@enderror
                </tr>
                <tr class="form-group">
                    <td colspan="2" class="center"><button type="submit" class="btn">Register</button></td>
                </tr>
            </form>


            <div class="note">
                <strong>**References:</strong> During the process you will be asked to provide references. Your references can be provided by an official body such as a school, university. If you are not sure who can be your referee, please contact us.
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- <div class="footer">
                <p>Visit us at: <a href="http://www.teachinengland.com" target="_blank">www.teachinengland.com</a></p>
            </div> -->
        </div>
    </body>
</html>
