@extends('layout/master')

@section('container')
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <main class="form-signin w-100 m-auto">
                        <h1 class="h3 mb-3 fw-normal text-center">Please login!</h1>
                        <form action="{{ route('auth.login') }}" method="POST">
                            @csrf
                            <div class="form-floating">
                                <input type="text" name="username"
                                    class="form-control @error('username') is-invalid @enderror" id="username"
                                    placeholder="username" required autofocus>
                                <label for="username">Username</label>
                                @error('username')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating">
                                <input type="password" name="password" class="form-control rounded-bottom" id="password"
                                    placeholder="password" required>
                                <label for="password">Password</label>
                            </div>

                            <button class="button button-md button-reveal-left-outline-dark me-2 mb-2 w-100" type="submit"><i
                                    class="bi bi-arrow-right"></i><span>Login</span></button>
                            {{-- <button class="btn btn-primary w-100 py-2" type="submit">Login</button> --}}
                        </form>
                        <small class="d-block text-center mt-3">Belum memiliki akun ? <a
                                href="{{ route('halamanregister') }}">registrasi
                                sekarang!</a></small>

                        <p class="mt-5 mb-3 text-body-secondary">&copy; 2024</p>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
