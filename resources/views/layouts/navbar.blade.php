<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <span class="navbar-brand">
            <span style="color: white; padding: 20px;">
                <a style="color: white; text-decoration:none" href="{{ route('home') }}">TeachINUK</a>
            </span>
        </span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('aboutus') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="registerDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Register with us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="registerDropdown">
                        <li><a class="dropdown-item" href="{{ route('register.teacher.training') }}">Teacher Training</a></li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">Teachers</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
