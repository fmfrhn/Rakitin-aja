{{-- history.blade.php --}}
@extends('layout.master')

@section('container')
    <div class="section-xl bg-image parallax" data-bg-src="{{ asset('img/homepage.avif') }}">
        <div class="bg-dark-05">
            <div class="container text-center">
                <h1 class="my-4">My History</h1>
                <div class="row align-items-start">
                    @foreach ($histories as $history)
                        <div class="col-lg-3 mb-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ $history->image }}" class="card-img-top" alt="History Image">
                                <div class="card-body">
                                    <p class="card-text">{{ $history->spesifikasi }}</p>
                                    <p class="card-text fw-bold">Rp. {{ $history->price }}</p>
                                    <a href="{{ $history->link }}" class="btn btn-primary" target="_blank"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div><!-- end container -->
        </div>
    </div>
    <!-- end Hero section -->
@endsection
