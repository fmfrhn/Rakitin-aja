<div class="header right">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <!-- Logo Section -->
        <div class="header-logo d-flex align-items-center">
            <img src="{{ asset('img/logo/Rakitin-aja.png') }}" alt="Logo" class="me-2" style="height: 50px;">
            <h3 class="m-0">
                <a href="#" class="text-dark text-decoration-none fw-bold">Rakitin-Aja</a>
            </h3>
        </div>

        <!-- Navigation Menu -->
        <div class="header-menu">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('history.page') }}"><strong>Riwayat RakitanMu</strong></a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome back, {{ auth()->user()->name }}</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}"><button
                                class="button button-md button-reveal-left-outline-dark me-2 mb-2"><i
                                    class="bi bi-arrow-right"></i><span>Login</span></button></a>
                    </li>
                @endauth
            </ul>
        </div>

        <!-- Social Media Section -->
        <div class="header-menu-extra">
            <ul class="list-inline m-0">
                <li class="list-inline-item">
                    <a href="#" class="text-dark"><i class="bi bi-facebook fs-5"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-dark"><i class="bi bi-twitter fs-5"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-dark"><i class="bi bi-instagram fs-5"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end container -->
</div>
