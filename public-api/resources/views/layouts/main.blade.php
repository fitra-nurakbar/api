{{-- Header --}}
@include('layouts.header')

<body>
     {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Content --}}
    <div class="container">
        @yield('contents')
    </div>

    {{-- Footer --}}
    {{-- @include('partials.footer') --}}
    {{-- Scripts --}}
    @include('layouts.script')

</body>

</html>
