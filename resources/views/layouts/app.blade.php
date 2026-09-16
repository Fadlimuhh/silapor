<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.styles')
</head>

<body id="page-top">

<div id="wrapper">

    @include('partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            @include('partials.topbar')

            @yield('content')

        </div>

        @include('partials.footer')

    </div>

</div>

@include('partials.logout-modal')

@include('partials.scripts')

</body>
</html>