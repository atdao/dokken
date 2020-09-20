<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    @include('_partials.head')
</head>

<body class="c-app">
@include('_partials.aside')
<div class="c-wrapper">
    @include('_partials.header')
    <div class="c-body">
        <main class="c-main">
            @yield('content')
        </main>
        @include('_partials.footer')
    </div>
</div>
@include('_partials.scripts')
</body>
</html>
