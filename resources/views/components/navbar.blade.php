<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block btn btn-info">
            <a href="{{route('flats')}}">Send Email</a>
        </li> --}}
        <!-- Right navbar links -->
    {{-- <ul class="navbar-nav ml-auto">
        <!-- Logout Button -->
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="GET">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </li>
    </ul> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <li class="nav-item">

            <a class="nav-link"  href="{{ route('logout') }}" role="button">
                <i class="fas fa-power-off"></i>
            </a>
        </li>

    </ul>
</nav>
<!-- /.navbar -->
