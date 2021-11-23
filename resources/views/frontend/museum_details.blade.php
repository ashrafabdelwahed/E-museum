@extends('frontend.layouts.app')

@section('content')


<?php

$lang = App::getLocale();

?>



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>
                    @if ($lang == "ar")
                    {{ $museum->name_ar }}
                    @else
                    {{ $museum->name_en }}
                    @endif
                </h2>
                <ol>
                    <li><a href="/"> {{ __('front.home') }} </a></li>
                    <li> {{ __('front.museums') }} </li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper-container">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ asset('storage/'.$museum->image_one) }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('storage/'.$museum->image_two) }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('storage/'.$museum->image_three) }}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>
                            @if ($lang == "ar")
                            {{ $museum->name_ar }}
                            @else
                            {{ $museum->name_en }}
                            @endif
                        </h3>
                        <ul>

                            <li><strong>{{ __('admin.about_museum') }}</strong>
                                @if ($lang == "ar")
                                {!! $museum->desc_ar !!}
                                @else
                                {!! $museum->desc_en !!}
                                @endif
                                <hr>
                            </li>


                            <li><strong>{{ __('admin.address') }}</strong>
                                @if ($lang == "ar")
                                {{ $museum->address_ar }}
                                @else
                                {{ $museum->address_en }}
                                @endif </li>
                            <li><strong> {{ __('admin.start_work_time') }} </strong> : {{ $museum->start_work_time }}
                            </li>
                            <li><strong> {{ __('admin.end_work_time') }} </strong> : {{ $museum->end_work_time }} </li>
                            <li><strong> {{ __('admin.ticket_price') }} </strong>: {{ $museum->ticket_price }}</li>
                        </ul>
                    </div>



                    <div class="portfolio-description">
                        <h2> {{ __('front.hotel_near') }} </h2>


                        <section id="testimonials" class="testimonials section-bg">
                            <div class="container">

                                <div class="row">
                                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">

                                        <div class="testimonials-slider-museum swiper-container" data-aos="fade-up"
                                            data-aos-delay="100">
                                            <div class="swiper-wrapper">

                                                @forelse ($museum->hotels as $hotel)
                                                <div class="swiper-slide">
                                                    <div class="testimonial-item">
                                                        <p>
                                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                            @if ($lang == 'ar')
                                                            {{ $hotel->name_ar }}
                                                            @else
                                                            {{ $hotel->name_en }}
                                                            @endif
                                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                                        </p>
                                                        <div>
                                                            <img src="{{ asset('storage/'.$hotel->image_one) }}"
                                                                class="img-fluid mb-3"
                                                                style="height: 150px; width:250px">
                                                        </div>
                                                        @while ($hotel->stars)
                                                        <img
                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABjklEQVRIS8WW7TEEQRCGn4sAGRABGSACROBkQATIgAiQAREgAicCQiAC6q2a2Rpjer52r7b/3NbtTj/zTn9ML5jJFjNxGQM+dpt+7Nl8L/gAeHbAQ+ClFd4LFmjfwfQseJP1gLeBj4iyA3y2kHvA98BpBHkAlusEp9R63hbwVQtvVXwFXBrOrwG9r7IW8KaLrX5TJrWKdZXqGKza3HVeBdgLCCqhGgtLaxVsRM9P3kEIVnLc1Xge8c0ZoOT807nCpjDCd3bp0Gzio16n6kFtrNhvdWr4N6DTVIwHs7J6KngSaimeSvk7oCpJttJSHfcqF1THa9Z0CSz1Px0pfguc59aVwL0lpuNVFzOtBM715tJBZK/KElhjzVGJYLy/AG6stSWwkmPDWKxSkVnv1Zf9XPbPRQ6sC+LNgL4GF796rx+D4s9N/zlwqpSkUnGPj1AZrP9j9SdAcgrNgeMRx6u0ZitNJ7F6s6xyYJ9Ylkorb0L1ZpxzYA0CciIVTRMkIPUKlUKS7F6lrO6spPKy2cC/9iVIHwKwHeoAAAAASUVORK5CYII=" />
                                                        @php
                                                        $hotel->stars--
                                                        @endphp
                                                        @endwhile
                                                    </div>
                                                </div><!-- End testimonial item -->

                                                @empty
                                                <div class="swiper-slide">
                                                    <div class="testimonial-item">
                                                        <p>
                                                            لم يتم العثور علي فنادق بالقرب بعد
                                                        </p>
                                                    </div>
                                                </div><!-- End testimonial item -->
                                                @endforelse

                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section><!-- End Testimonials Section -->



                    </div>
                </div>

            </div>


            <section id="testimonials" class="testimonials">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                        <h2> {{ __('front.antique_in_museum') }} </h2>

                            <div class="testimonials-slider-antique swiper-container" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="swiper-wrapper">

                                    @foreach ($museum->antiques as $antique)
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <p>
                                                <a href=" {{ route('antique_details',$antique->id) }} ">
                                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                    @if ($lang == 'ar')
                                                    {{ $antique->name_ar }}
                                                    @else
                                                    {{ $antique->name_en }}
                                                    @endif
                                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                                </a>
                                            </p>
                                            <div>
                                                <a href=" {{ route('antique_details',$antique->id) }} ">
                                                    <img src="{{ asset('storage/'.$antique->image_one) }}"
                                                    class="img-fluid mb-3"
                                                    style="height: 250px; width:250px">
                                                </a>

                                            </div>
                                        </div>
                                    </div><!-- End testimonial item -->
                                    @endforeach

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End Testimonials Section -->

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->




@endsection
