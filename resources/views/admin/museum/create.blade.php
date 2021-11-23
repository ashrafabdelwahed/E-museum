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
        <h5> {{ __('admin.create_museum') }} </h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <div class="form-layout">
            <form action="{{ route('museum.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.name_en') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="name_en"
                                placeholder="{{ __('admin.museum_name_english') }}" value="{{ old('name_en') }}">
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.name_ar') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="name_ar"
                                placeholder="{{ __('admin.museum_name_arabic') }}" value="{{ old('name_ar') }}">
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.address_en') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="address_en"
                                placeholder="{{ __('admin.address') }}" value="{{ old('address_en') }}">
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.address_ar') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="address_ar"
                                placeholder="{{ __('admin.address') }}" value="{{ old('address_ar') }}">
                        </div>
                    </div><!-- col-6 -->


                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.start_work_time') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="start_work_time"
                                placeholder="{{ __('admin.start_work_time') }}" value="{{ old('start_work_time') }}">
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.end_work_time') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="end_work_time"
                                placeholder="{{ __('admin.end_work_time') }}" value="{{ old('end_work_time') }}">
                        </div>
                    </div><!-- col-6 -->


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.ticket_price') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="ticket_price"
                                placeholder="{{ __('admin.ticket_price') }}" value="{{ old('ticket_price') }}">
                        </div>
                    </div><!-- col-6 -->


                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.desc_en') }} : <span
                                    class="tx-danger">*</span></label>
                            <textarea class="form-control summernote" type="text"
                                name="desc_en"> {{ old('desc_en') }} </textarea>
                        </div>
                    </div><!-- col-6 -->


                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.desc_ar') }} : <span
                                    class="tx-danger">*</span></label>
                            <textarea class="form-control summernote" type="text"
                                name="desc_ar"> {{ old('desc_ar') }} </textarea>
                        </div>
                    </div><!-- col-6 -->






                    <div class="col-lg-12">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">المحافظة: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" data-placeholder="Choose country" name="governorate_id">
                                <option label="اختار المحاظفة" disabled selected></option>

                                @foreach($governorates as $governorate)
                                <option value="{{ $governorate->id }}">{{ $governorate->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- col-6 -->







                    {{-- Images --}}


                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.image_one') }} (
                                {{ __('admin.main_thumbnail') }} ): <span class="tx-danger">*</span></label>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="image_one"
                                    onchange="readURL(this);" required="">
                                <span class="custom-file-control"></span>
                                <img src="#" id="one" class="mt-4">
                            </label>

                        </div>
                    </div><!-- col-4 -->


                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.image_two') }} : <span
                                    class="tx-danger">*</span></label>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="image_two"
                                    onchange="readURL2(this);" required="">
                                <span class="custom-file-control"></span>
                                <img src="#" id="two" class="mt-4">
                            </label>

                        </div>
                    </div><!-- col-4 -->




                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.image_three') }} : <span
                                    class="tx-danger">*</span></label>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="image_three"
                                    onchange="readURL3(this);" required="">
                                <span class="custom-file-control"></span>
                                <img src="#" id="three" class="mt-4">
                            </label>

                        </div>
                    </div><!-- col-4 -->




                </div><!-- row -->

                <div class="form-layout-footer text-center">
                    <button type="submit" class="btn btn-info mg-r-5">{{ __('admin.add') }}</button>
                </div><!-- form-layout-footer -->
            </form>
        </div><!-- form-layout -->
    </div><!-- card -->


</div>

@endsection


@section('js')

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#one')
                    .attr('src', e.target.result)
                    .width(80)
                    .height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

<script type="text/javascript">
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#two')
                    .attr('src', e.target.result)
                    .width(80)
                    .height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>



<script type="text/javascript">
    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#three')
                    .attr('src', e.target.result)
                    .width(80)
                    .height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>


@endsection
