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
                    <h2> {{ __('front.gove') }} </h2>
                    <ol>
                        <li><a href="/"> {{ __('front.home') }} </a></li>
                        <li>{{ __('front.gove') }} </li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->
        <section id="why-us " class="why-us">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 d-flex align-items-stretch justify-content-center text-center">

                        <ul class="list-group  w-50">
                            @foreach ($goves as $gove)
                                <li class="list-group-item">
                                    <a href="{{ route('gove_museums',$gove->id) }}"> {{ $gove->name }} </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->



    </main><!-- End #main -->


</main><!-- End #main -->


@endsection
