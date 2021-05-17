<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('_partials.head')
</head>
<body>
<main>
    @include('_partials.aside')
    <div class="container-fluid content">
        @yield('content')
        @include('_partials.footer')
    </div>
</main>

@include('_partials.scripts')
</body>
</html>
