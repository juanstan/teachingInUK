@include('layouts.head')

<div class="container">
    @include('layouts.navbar')
    <div class="content">
        @yield('content')
    </div>
</div>

@include('layouts.footer')