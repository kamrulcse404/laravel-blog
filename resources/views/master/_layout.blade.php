@include('partials._header')
@include('partials._nav')

<!-- main -->
<div class="container mt-3">
    <div class="row justify-content-center">
        @yield('content')
        @yield('pagination')
    </div>
</div>
<!-- main end-->
@include('partials._footer')
