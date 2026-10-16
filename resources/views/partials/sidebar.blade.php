@auth

    @if (Auth::user()->role === 'admin')

        @include('partials.sidebar.admin')

    @elseif (Auth::user()->role === 'petugas')

        @include('partials.sidebar.petugas')

    @elseif (Auth::user()->role === 'warga')

        @include('partials.sidebar.warga')

    @endif

@endauth