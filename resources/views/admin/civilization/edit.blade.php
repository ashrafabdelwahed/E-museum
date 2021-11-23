@extends('admin.layouts.app')


@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href=" {{ route('admin.index') }} ">Dashboard</a>
</nav>


<div class="container mt-2">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ol>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ol>
    </div>
    @endif
</div>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5> {{ __('admin.edit_civilization') }} </h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40" style="padding-bottom: 0px">
        <div class="form-layout">
            <form action="{{ route('civilization.update',$civilization->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.name_en') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="name_en"
                                placeholder="{{ __('admin.name_en') }}" value="{{ $civilization->name_en }}">
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.name_ar') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="name_ar"
                                placeholder="{{ __('admin.name_ar') }}" value="{{ $civilization->name_ar }}">
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.desc_en') }} : <span
                                    class="tx-danger">*</span></label>
                            <textarea class="form-control summernote" type="text"
                                name="desc_en"> {{ $civilization->desc_en }} </textarea>
                        </div>
                    </div><!-- col-6 -->


                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.desc_ar') }} : <span
                                    class="tx-danger">*</span></label>
                            <textarea class="form-control summernote" type="text"
                                name="desc_ar"> {{ $civilization->desc_ar }} </textarea>
                        </div>
                    </div><!-- col-6 -->



                    <div class="mx-auto mt-5">
                        <button type="submit" class="btn btn-info">{{ __('admin.update') }}</button>
                    </div><!-- form-layout-footer -->
            </form>
        </div><!-- form-layout -->
    </div><!-- card -->


</div>

@endsection
