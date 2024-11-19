@extends('layout.master')

@section('container')
    <!-- Hero section -->
    <div class="section-xl bg-image parallax" data-bg-src="{{ asset('img/homepage.avif') }}">
        <div class="bg-dark-05">
            <div class="container">
                @if (session('no_history'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Info:</strong> {{ session('no_history') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="row g-4">
                    <div class="col-12 col-lg-8 col-xl-7">
                        <h1 class="fw-light">Solusi tepat untuk kamu yang ingin merakit Personal Computer.</h1>
                        <a class="button button-lg button-radius button-white-2 mt-4"
                            href="{{ route('select.category') }}">Rakit PC impian mu sekarang!</a>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Hero section -->

    <!-- Clients section -->
    <div class="container text-center n-margin-4">
        <div class="bg-white p-4 p-lg-5 border-radius-1 box-shadow">
            <div class="owl-carousel" data-owl-dots="false" data-owl-margin="50" data-owl-autoplay="true" data-owl-xs="1"
                data-owl-sm="2" data-owl-md="3" data-owl-lg="4" data-owl-xl="5">
                <!-- Client box -->
                <div class="client-box">
                    <a href="#"><img src="{{ asset('img/logo/amd.png') }}" alt=""
                            class="img-fluid mx-auto d-block" style="max-width: 100px; max-height: 100px;"></a>
                </div>
                <div class="client-box">
                    <a href="#"><img src="{{ asset('img/logo/asus.png') }}" alt=""
                            class="img-fluid mx-auto d-block" style="max-width: 100px; max-height: 100px;"></a>
                </div>
                <div class="client-box">
                    <a href="#"><img src="{{ asset('img/logo/dell.png') }}" alt=""
                            class="img-fluid mx-auto d-block" style="max-width: 100px; max-height: 100px;"></a>
                </div>
                <div class="client-box">
                    <a href="#"><img src="{{ asset('img/logo/gigabyte.png') }}" alt=""
                            class="img-fluid mx-auto d-block" style="max-width: 100px; max-height: 100px;"></a>
                </div>
                <div class="client-box">
                    <a href="#"><img src="{{ asset('img/logo/hp.png') }}" alt=""
                            class="img-fluid mx-auto d-block" style="max-width: 100px; max-height: 100px;"></a>
                </div>
                <div class="client-box">
                    <a href="#"><img src="{{ asset('img/logo/intel.png') }}" alt=""
                            class="img-fluid mx-auto d-block" style="max-width: 100px; max-height: 100px;"></a>
                </div>
                <div class="client-box">
                    <a href="#"><img src="{{ asset('img/logo/microsoft.jpg') }}" alt=""
                            class="img-fluid mx-auto d-block" style="max-width: 100px; max-height: 100px;"></a>
                </div>
                <div class="client-box">
                    <a href="#"><img src="{{ asset('img/logo/nvidia.png') }}" alt=""
                            class="img-fluid mx-auto d-block" style="max-width: 100px; max-height: 100px;"></a>
                </div>
                <div class="client-box">
                    <a href="#"><img src="{{ asset('img/logo/qualcomm.png') }}" alt=""
                            class="img-fluid mx-auto d-block" style="max-width: 100px; max-height: 100px;"></a>
                </div>
            </div><!-- end owl-carousel -->
        </div>
    </div>
    <!-- end container -->
    <!-- end Clients section -->

    <!-- About section -->
    <div class="section bg-gray-lightest">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="lightbox-media-box border-radius box-shadow icon-xl"
                                href="https://www.youtube.com/watch?v=cWesnhx9k80">
                                <img src="{{ asset('img/section-video.avif') }}" alt="">
                                <i class="bi bi-play"></i>
                            </a>
                        </div>
                        <div class="col-6">
                            <img class="border-radius box-shadow" src="{{ asset('img/section-video-pic.avif') }}"
                                alt="">
                        </div>
                        <div class="col-6">
                            <img class="border-radius box-shadow" src="{{ asset('img/section-video-pic2.avif') }}"
                                alt="">
                        </div>
                    </div><!-- end row(inner) -->
                </div>
                <div class="col-12 col-lg-6">
                    <h2 class="fw-light mb-3">Apa sih rakitin aja ?</h2>
                    <p><strong>Rakitin Aja</strong>
                        adalah sebuah platform yang dirancang untuk membantu kamu merakit PC dengan lebih
                        efisien, cepat, dan sesuai kebutuhan. Kami memahami bahwa merakit PC bisa menjadi tugas yang
                        menantang, terutama dengan begitu banyaknya pilihan komponen di pasar. Oleh karena itu, Rakitin Aja
                        hadir untuk memberikan solusi praktis dengan fitur-fitur yang memudahkan kamu dalam memilih komponen
                        terbaik berdasarkan anggaran, performa, dan kompatibilitas.</p>
                    <div class="row g-4 mt-2">
                        <!-- Progress bar 1 -->
                        <div class="col-12 col-sm-6">
                            <div class="progress-box progress-theme">
                                <h6 class="fw-medium">Hardware Compatibility</h6>
                                <div class="animated-progress">
                                    <div data-progress="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Progress bar 2 -->
                        <div class="col-12 col-sm-6">
                            <div class="progress-box progress-theme">
                                <h6 class="fw-medium">Component Selection Expertise</h6>
                                <div class="animated-progress">
                                    <div data-progress="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Progress bar 3 -->
                        <div class="col-12 col-sm-6">
                            <div class="progress-box progress-theme">
                                <h6 class="fw-medium">Performance Optimization</h6>
                                <div class="animated-progress">
                                    <div data-progress="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Progress bar 4 -->
                        <div class="col-12 col-sm-6">
                            <div class="progress-box progress-theme">
                                <h6 class="fw-medium">Customer Support</h6>
                                <div class="animated-progress">
                                    <div data-progress="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end Progress bar 4 -->
                    </div><!-- end row(inner) -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end About section -->

    <!-- Features section -->
    <div class="section pt-0 mt-5">
        <div class="container icon-5xl text-lg-center">
            <div class="row g-4 g-lg-5">
                <!-- Feature box 1 -->
                <div class="col-12 col-lg-4">
                    <div class="text-dark mb-2">
                        <i class="bi bi-tools"></i>
                    </div>
                    <h6 class="fw-medium font-small uppercase">Rekomendasi Komponen Terbaik</h6>
                    <p>Kami menyediakan saran komponen yang kompatibel dan sesuai dengan anggaranmu, memastikan performa
                        maksimal tanpa menguras kantong.</p>
                </div>
                <!-- Feature box 2 -->
                <div class="col-12 col-lg-4">
                    <div class="text-dark mb-2">
                        <i class="bi bi-check-circle"></i>
                    </div>
                    <h6 class="fw-medium font-small uppercase">Pengecekan Kompatibilitas Otomatis</h6>
                    <p>Tidak perlu bingung mencocokkan motherboard, CPU, atau GPU. Sistem kami memverifikasi semuanya
                        untukmu.</p>
                </div>
                <!-- Feature box 3 -->
                <div class="col-12 col-lg-4">
                    <div class="text-dark mb-2">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <h6 class="fw-medium font-small uppercase">Kami Rakitin Untukmu</h6>
                    <p>Kamu tidak perlu susah payah memikirkan bagaimana ngerakit computer-nya, kami bakal kasih kamu akses
                        ke computer yang sudah di build</p>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Features section -->

    <!-- Testimonial section -->
    <div class="container">
        <div class="bg-gray-lighter p-4 p-lg-5 border-radius-1">
            <div class="owl-carousel" data-owl-items="1" data-owl-nav="true">
                <!-- Testimonial box 1 -->
                <div class="testimonial-box">
                    <img class="mb-3" src="{{ asset('img/elon-musk.avif') }}" alt="">
                    <h5 class="fw-normal line-height-140 m-0">Elon Musk</h5>
                    <span class="font-small fw-normal">CEO - Tesla & SpaceX</span>
                    <p class="mt-3">"When something is important enough, you do it even if the odds are not in your
                        favor.
                        True innovation requires taking risks and daring to dream big.
                        Whether it’s making humanity multi-planetary, advancing sustainable energy, or revolutionizing
                        transportation,
                        it’s about believing in a vision and relentlessly pursuing it."</p>
                </div>
                <!-- Testimonial box 2 -->
                <div class="testimonial-box">
                    <img class="mb-3" src="{{ asset('img/grace-hopper.jpg') }}" alt="">
                    <h5 class="fw-normal line-height-140 m-0">Grace Hopper</h5>
                    <span class="font-small fw-normal">Computer Scientist - Inventor of COBOL</span>
                    <p class="mt-3">"The most dangerous phrase in the language is, 'We've always done it this way.'
                        Progress requires questioning the status quo and challenging traditional methods.
                        Only by stepping outside of our comfort zones can we achieve meaningful change and innovation."</p>
                </div>
                <!-- Testimonial box 3 -->
                <div class="testimonial-box">
                    <img class="mb-3" src="{{ asset('img/steve-jobs.jpeg') }}" alt="">
                    <h5 class="fw-normal line-height-140 m-0">Steve Jobs</h5>
                    <span class="font-small fw-normal">Co-founder - Apple Inc.</span>
                    <p class="mt-3">"Innovation distinguishes between a leader and a follower.
                        It’s not about doing what’s expected, but about creating something entirely new and meaningful.
                        True leaders focus on building products and solutions that redefine industries and inspire the
                        world."</p>
                </div>
            </div><!-- end owl-carousel -->
        </div>
    </div>


    <!-- end container -->
    <!-- end Testimonial section -->

    <!-- Services section -->
    <div class="section">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Service box 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box">
                        <div class="feature-box-icon bg-primary text-white">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <h5 class="fw-normal">Quisioner Kebutuhan</h5>
                        <p>Isi quisioner untuk membantu kami memahami kebutuhan komputasi Anda, dari gaming hingga editing.
                        </p>
                    </div>
                </div>
                <!-- Service box 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box">
                        <div class="feature-box-icon bg-success text-white">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h5 class="fw-normal">Rekomendasi Komponen</h5>
                        <p>Dapatkan rekomendasi komponen terbaik yang sesuai dengan anggaran dan kebutuhan Anda.</p>
                    </div>
                </div>
                <!-- Service box 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box">
                        <div class="feature-box-icon bg-warning text-white">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h5 class="fw-normal">Estimasi Anggaran</h5>
                        <p>Lihat estimasi total biaya untuk PC build Anda sebelum memutuskan untuk membeli.</p>
                    </div>
                </div>
                <!-- Service box 4 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box">
                        <div class="feature-box-icon bg-danger text-white">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <h5 class="fw-normal">Perbandingan Komponen</h5>
                        <p>Bandingkan komponen PC seperti prosesor, GPU, dan lainnya untuk pilihan terbaik.</p>
                    </div>
                </div>
                <!-- Service box 5 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box">
                        <div class="feature-box-icon bg-info text-white">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h5 class="fw-normal">Kerja Sama dengan Toko</h5>
                        <p>Temukan toko terpercaya untuk membeli komponen dengan harga terbaik.</p>
                    </div>
                </div>
                <!-- Service box 6 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box">
                        <div class="feature-box-icon bg-secondary text-white">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5 class="fw-normal">Analisis Kinerja PC</h5>
                        <p>Optimalkan performa PC Anda dengan laporan kinerja mendetail dan rekomendasi peningkatan.</p>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Services section -->

    <!-- Parallax section -->
    <div class="section-xl bg-image parallax" data-bg-src="{{ asset('img/bg-hero-bottom.avif') }}">
        <div class="bg-dark-05">
            <div class="container text-end">
                <h1 class="fw-light">
                    Buatlah personal computer idamanmu <br> bersama <strong>Rakitin-aja</strong>
                </h1>
                <a class="button button-lg button-radius button-white-2 mt-3" href="{{ route('select.category') }}">
                    Rakit PC impian mu sekarang!
                </a>
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Parallax section -->
@endsection
