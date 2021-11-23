@extends('admin.layouts.app')

@section('content')



<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href=" {{ route('admin.index') }} ">Dashboard</a>
</nav>

<div class="sl-pagebody">

    <div class="row row-sm">
        <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                    <h4 class="tx-uppercase mg-b-0 tx-spacing-1  tx-white"> {{ __('admin.museums') }} </h4>
                    <a href="{{ route('museum.index') }}" class="tx-white-8 hover-white"><i
                            class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="mg-b-0 tx-white tx-lato tx-bold text-center m-auto"> {{$museums}} </h3>
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col-3 -->

        <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-info">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                    <h4 class="tx-uppercase mg-b-0 tx-spacing-1  tx-white"> {{ __('admin.all_civilizations') }} </h4>
                    <a href="{{ route('civilization.index') }}" class="tx-white-8 hover-white"><i
                            class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="mg-b-0 tx-white tx-lato tx-bold text-center m-auto"> {{$civilizations}} </h3>
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col-3 -->


        <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-purple">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                    <h4 class="tx-uppercase mg-b-0 tx-spacing-1  tx-white"> {{ __('admin.antiques') }} </h4>
                    <a href="{{ route('antique.index') }}" class="tx-white-8 hover-white"><i
                            class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="mg-b-0 tx-white tx-lato tx-bold text-center m-auto"> {{$antiques}} </h3>
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col-3 -->


        <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-sl-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                    <h4 class="tx-uppercase mg-b-0 tx-spacing-1  tx-white"> {{ __('admin.hotels') }} </h4>
                    <a href="{{ route('hotel.index') }}" class="tx-white-8 hover-white"><i
                            class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="mg-b-0 tx-white tx-lato tx-bold text-center m-auto"> {{$hotels}} </h3>
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col-3 -->
    </div><!-- row -->
</div><!-- sl-pagebody -->



@endsection
