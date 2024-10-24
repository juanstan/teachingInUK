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
        @vite(['resources/css/register.css', 'resources/js/app.js'])
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

                <div class="note">
                    <strong>**References:</strong> During the process you will be asked to provide references. Your references can be provided by an official body such as a school, university. If you are not sure who can be your referee, please contact us.
                </div>

                @if(session('success'))
                    <div id="success-message" class="alert alert-success limit-size">
                        {{ session('success') }}
                        <p>Redirecting in 3 seconds...</p>
                    </div>
                @endif

                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="table pdt-50">
                
                        <div class="row">
                            <div class="col-md-6 th"><label for="name">Name and Surname(s)</label></div>
                            <div class="col-md-6 td"><input type="text" id="name" name="name" value="{{ old('name') }}" required /></div>
                            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 th"><label for="name">Email</label></div>
                            <div class="col-md-6 td"><input type="text" id="email" name="email" value="{{ old('email') }}" required /></div>
                            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 th"><label for="name">Mobile Number</label></div>
                            <div class="col-md-6 td"><input type="text" id="mobile" name="mobile" value="{{ old('mobile') }}" required /></div>
                            @error('mobile')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 th"><label for="nationality">Nationality</label></div>
                            <div class="col-md-6 td"><input type="text" id="nationality" name="nationality" value="{{ old('nationality') }}" required></div>
                                @error('nationality')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        <div class="form-group row">
                            <div class="col-md-6 th"><label for="degree">Degree</label></div>
                            <div class="col-md-6 td"><input type="text" id="degree" name="degree" value="{{ old('degree') }}" required></div>
                                @error('degree')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 th"><label for="dob">Date of Birth</label></div>
                            <div class="col-md-6 td"><input type="date" id="dob" name="dob" value="{{ old('dob') }}" required></div>
                                @error('dob')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 th"><label for="training">Teaching Training (specify)</label></div>
                            <div class="col-md-6 td"><input type="text" id="training" name="training" value="{{ old('training') }}" required></div>
                                @error('training')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 th"><label for="english_level">Minimum B2 Level of English (specify your qualifications)</label></div>
                            <div class="col-md-6 td"><input type="text" id="english_level" name="english_level" value="{{ old('english_level') }}" required></div>
                                @error('english_level')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 th"><label for="experience">Minimum 9 months of teaching experience (specify)</label></div>
                            <div class="col-md-6 td"><input type="text" id="experience" name="experience" value="{{ old('experience') }}"></div>
                                @error('experience')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 th"><label for="referees">Please specify your two potential referees</label></div>
                            <div class="col-md-6 td"><textarea id="referees" name="referees" required>{{ old('referees') }}</textarea></div>
                                @error('referees')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <!-- Checkbox for accepting terms and conditions -->
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-1"><input type="checkbox" id="terms" name="terms" onchange="toggleSubmit()"></div>
                                    <div class="col-md-11"><label for="terms">I accept the <a href="/documents/terms-and-conditions.docx" target="_blank">Terms and Conditions</a></label></div>
                                </div>
                            </div>
                            @error('terms')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 center top-50 bottom-5">
                                <button id="submit-btn" class="btn btn-primary" style="background-color: #27504c; border-color: darkgreen;" type="submit" class="btn " disabled>Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

                <!-- <div class="footer">
                    <p>Visit us at: <a href="http://www.teachinengland.com" target="_blank">www.teachinengland.com</a></p>
                </div> -->
            
        </div>

                    <!-- Add the JavaScript to toggle submit button -->
                    <script>
                        function toggleSubmit() {
                            const termsCheckbox = document.getElementById('terms');
                            const submitButton = document.getElementById('submit-btn');
                            
                            // Enable or disable the submit button based on the checkbox state
                            submitButton.disabled = !termsCheckbox.checked;
                        }
                        // Check if the success message is present
                        if (document.getElementById('success-message')) {
                            // Redirect after 5 seconds (5000 milliseconds)
                            setTimeout(function() {
                                window.location.href = "{{ route('home') }}"; // Change this to your desired route
                            }, 3000);
                        }
                    </script>
    </body>
</html>

