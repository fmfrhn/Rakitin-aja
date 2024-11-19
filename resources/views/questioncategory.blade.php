@extends('layout.master')

@section('container')
    <div class="section-xl bg-image parallax" data-bg-src="{{ asset('img/homepage.avif') }}">
        <div class="bg-dark-05">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-lg-8 col-xl-7">
                        <p style="font-family:sans-serif; font-size: 20px">Untuk kebutuhan apa komputer yang
                            ingin anda buat ?</p>
                        <form action="{{ route('category.question') }}" method="POST" id="questionForm">
                            @csrf
                            @foreach ($question_categories as $key => $category)
                                <div class="card mt-1 shadow text-start">
                                    <div class="card-body">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input me-2" type="radio" name="k_id"
                                                id="flexRadioDefault{{ $key }}" value="{{ $category->id }}"
                                                required>
                                            <label class="form-check-label" for="flexRadioDefault{{ $key }}">
                                                {{ $category->nama_kategori }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="mt-4">
                                <button type="submit"
                                    class="button button-lg button-radius button-white-2 mt-4">Next</button>
                            </div>
                        </form>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Hero section -->
@endsection
