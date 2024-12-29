@extends('layout.master')

@section('container')
    <div class="section-xl bg-image parallax" data-bg-src="{{ asset('img/homepage.avif') }}">
        <div class="bg-dark-05">
            <div class="container">
                <div class="row g-4">
                    
                    <div class="col-12 col-lg-8 col-xl-7">
                        <h1> Skor Anda : {{ $total_score }}</h1>
                        <p class="mt-4 text-white" style="font-family: sans-serif; font-size: 20px;">
                            {{ $next_question_id }}.
                            {{ $question->pertanyaan }}
                        </p>
                        <form action="{{ route('submit.answer') }}" method="POST">
                            @csrf
                            <div class="row">
                                @foreach ($question->answer as $key => $answer)
                                    <div class="col">
                                        <div class="card shadow-sm mb-4">
                                            <div class="card-body">
                                                <div class="form-check text-start">
                                                    <input class="form-check-input me-2" type="radio" name="bobot_jawaban"
                                                        id="flexRadioDefault{{ $key + 1 }}"
                                                        value="{{ $answer->bobot }}">
                                                    <label class="form-check-label" role="button"
                                                        for="flexRadioDefault{{ $key + 1 }}">
                                                        {{ $answer->jawaban }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <input type="hidden" value=" {{ $next_question_id }}" name="next_index">
                            <button type="submit" class="button button-lg button-radius button-white-2 mt-4">Next</button>
                        </form>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
    </div>
@endsection
