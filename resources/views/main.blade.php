<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body>
@include('partials._nav')
@include('partials._messages')
<!-- Default Bootstrap Navbar -->

<div class="container">
    @yield('content')

    @include('partials._footer')
</div>
<!-- end of .container -->

@include('partials._javascript')
@yield('scripts')
</body>

</html>