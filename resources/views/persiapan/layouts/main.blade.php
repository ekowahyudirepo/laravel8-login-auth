@include('layouts.header')

<div class="container">

    @include('layouts.navbar')

    <div class="mt-3">
        @yield('content')
    </div>

</div>

@include('layouts.footer')