@extends('frontend.layouts.app')

@section('content')


<?php

$lang = App::getLocale();

?>

<main id="main ">

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2> {{ __('front.museums') }} </h2>
                    <ol>
                        <li><a href="/"> {{ __('front.home') }} </a></li>
                        <li>{{ __('front.museums') }} </li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->
        <section id="why-us " class="why-us">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">

                                @foreach ($civilizations as $civilization)
                                <div class="col-xl-3 d-flex align-items-stretch" data-aos="zoom-in"
                                    data-aos-delay="100">
                                    <div class="icon-box mt-xl-0">
                                        <a href="#">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            @if ($lang == "ar")
                                            {{ $civilization->desc_ar }}
                                            @else
                                            {{ $civilization->desc_en }}
                                            @endif <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>

                                        <h4>
                                                @if ($lang == "ar")
                                                {{ $civilization->name_ar }}
                                                @else
                                                {{ $civilization->name_en }}
                                                @endif
                                        </h4>
                                        </a>
                                    </div>
                                </div>
                                @endforeach



                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->



    </main><!-- End #main -->


</main><!-- End #main -->


@endsection
