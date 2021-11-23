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
                    {{ $antique->name_ar }}
                    @else
                    {{ $antique->name_en }}
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
                                <img src="{{ asset('storage/'.$antique->image_one) }}" class="img-fluid" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('storage/'.$antique->image_two) }}" class="img-fluid" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('storage/'.$antique->image_three) }}" class="img-fluid" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>
                            @if ($lang == "ar")
                            {{ $antique->name_ar }}
                            @else
                            {{ $antique->name_en }}
                            @endif
                        </h3>
                        <ul>
                            <li>
                                @if ($lang == "ar")
                                {!! $antique->desc_ar !!}
                                @else
                                {!! $antique->desc_en !!}
                                @endif
                            </li>

                            <li>
                                <hr>
                                <strong> {{ __('admin.civilization') }} </strong> :

                                @if ($lang == "ar")
                                {{ $antique->civilization->name_ar }}
                                @else
                                {{ $antique->civilization->name_en }}
                                @endif
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->




@endsection
