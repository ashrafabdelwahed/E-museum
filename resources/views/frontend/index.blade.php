@extends('frontend.layouts.app')
@include('frontend.layouts.slides')

@section('content')


<?php

$lang = App::getLocale();

?>

<main id="main">

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $museums_count->count() }}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p> {{ __('front.museums') }} </p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $civilizations->count() }}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p> {{ __('front.all_civilizations') }} </p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $antiques }}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p> {{ __('front.antiques') }} </p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $hotels }}" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p> {{ __('front.hotels') }} </p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us " class="why-us">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">

                            @foreach ($museums as $museum)
                            <div class="col-xl-3 d-flex align-items-stretch mb-5" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box mt-xl-0">
                                    <img src="{{ asset('storage/'.$museum->image_one) }}" class="img-fluid mb-3"
                                        style="height: 150px; width:250px">
                                    <h4>
                                        <a href="{{ route('museum_details',$museum->id ) }}">
                                            @if ($lang == "ar")
                                            {{ $museum->name_ar }}
                                            @else
                                            {{ $museum->name_en }}
                                            @endif
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('museums') }}" class="btn btn-dark"> عرض المزيد</a>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">

                    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            @foreach ($civilizations as $civilization)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {!! $civilization->desc_ar !!}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <h3>
                                        <a href="#">
                                            @if ($lang == 'ar')
                                            {!! $civilization->name_ar !!}
                                            @else
                                            {!! $civilization->name_en !!}
                                            @endif
                                        </a>
                                    </h3>
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



</main><!-- End #main -->


@endsection
