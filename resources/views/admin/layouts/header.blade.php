<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>  E-Museum  </title>


        <!-- vendor css -->
        <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

        <!-- Tags Input CDN CSS -->
        <link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />

        <!-- chart -->
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

        <!-- Datatable css -->
        <link href="{{ asset('backend/lib/highlightjs/github.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">

        <!-- Starlight CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">
        <link href="{{ asset('backend/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">


</head>

<body>


    @include('admin.layouts.slidebar')

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">


                <div class="dropdown">
                    <a href="{{ route('admin.index') }}" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name"><span class="hidden-md-down h6">  تبديل اللغة</span></span>
                        <img src="{{ asset('img/img3.jpg') }}" class="wd-32 rounded-circle" alt="">
                    </a>

                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div><!-- dropdown-menu -->





                </div>




                <div class="dropdown">
                    <a href="{{ route('admin.index') }}" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name">Jane<span class="hidden-md-down"> Doe</span></span>
                        <img src="{{ asset('img/img3.jpg') }}" class="wd-32 rounded-circle" alt="">
                    </a>

                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-block btn-dark"><i class="icon ion-power"></i> Sign Out</button>
                                </form>
                            </li>                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->



            </nav>
        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->

    <!-- ########## END: RIGHT PANEL ########## --->
