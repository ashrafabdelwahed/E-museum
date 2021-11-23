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

                                @foreach ($museums as $museum)
                                    <div class="col-xl-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                        <div class="icon-box mt-xl-0 mb-5">
                                            <a href=" {{ route('museum_details',$museum->id ) }} ">
                                                <img src="{{ asset('storage/'.$museum->image_one) }}" class="img-fluid mb-3" style="height: 150px; width:250px">
                                            </a>
                                            <h4>
                                                <a href=" {{ route('museum_details',$museum->id ) }} ">
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
            </div>
        </section><!-- End Why Us Section -->



    </main><!-- End #main -->


</main><!-- End #main -->


@endsection
