<!DOCTYPE html>
<html lang="en">

@include('landing.partials.head')

<body class="index-page">

@include('landing.partials.header')

<main class="main">
    @yield('content')
</main>

@include('landing.partials.footer')

@include('landing.partials.scripts')

</body>
</html>