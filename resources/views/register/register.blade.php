    @extends('layout/master')

    @section('container')
        <div class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">

                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <main class="form-registration">
                            <h1 class="h3 mb-3 fw-normal text-center">Daftar dulu yuk!</h1>
                            <form action="{{ route('halamanregister') }}" method="POST">
                                @csrf
                                <div class="form-floating">
                                    <input type="text" name="name"
                                        class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                                        placeholder="name" required value="{{ old('name') }}">
                                    <label for="name">Name</label>
                                    @error('name')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-floating">
                                    <input type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror" id="username"
                                        placeholder="username" required value="{{ old('username') }}">
                                    <label for="username">Username</label>
                                    @error('username')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-floating">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder="email" required value="{{ old('email') }}">
                                    <label for="email">Email</label>
                                    @error('email')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-floating">
                                    <input type="password" name="password"
                                        class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                        id="password" placeholder="password" required>
                                    <label for="password">Password</label>
                                    @error('password')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button class="button button-md button-reveal-right-outline-dark mb-2 w-100"
                                    type="submit"><i class="bi bi-arrow-right"></i><span>Register</span></button>

                                {{-- <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Register</button> --}}
                            </form>
                            <small class="d-block text-center mt-3">Sudah memiliki akun ? <a
                                    href="{{ route('login') }}">kembali ke login!</a></small>

                            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>

                        </main>
                    </div>
                </div>
            </div>
        </div>
    @endsection
