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
        <h5> {{ __('admin.edit_museum') }} </h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <div class="form-layout">
            <form action="{{ route('museum.update',$museum->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.name_en') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="name_en"
                                placeholder="{{ __('admin.museum_name_english') }}" value="{{ $museum->name_en }}">
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.name_ar') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="name_ar"
                                placeholder="{{ __('admin.museum_name_arabic') }}" value="{{ $museum->name_ar }}">
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.address_en') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="address_en"
                                placeholder="{{ __('admin.address') }}" value="{{ $museum->address_en }}">
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.address_ar') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="address_ar"
                                placeholder="{{ __('admin.address') }}" value="{{ $museum->address_ar }}">
                        </div>
                    </div><!-- col-6 -->


                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.start_work_time') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="start_work_time"
                                placeholder="{{ __('admin.start_work_time') }}" value="{{ $museum->start_work_time }}">
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.end_work_time') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="end_work_time"
                                placeholder="{{ __('admin.end_work_time') }}" value="{{ $museum->end_work_time }}">
                        </div>
                    </div><!-- col-6 -->


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.ticket_price') }} : <span
                                    class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="ticket_price"
                                placeholder="{{ __('admin.ticket_price') }}" value="{{ $museum->ticket_price }}">
                        </div>
                    </div><!-- col-6 -->


                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.desc_en') }} : <span
                                    class="tx-danger">*</span></label>
                            <textarea class="form-control summernote" type="text"
                                name="desc_en"> {{ $museum->desc_en }} </textarea>
                        </div>
                    </div><!-- col-6 -->


                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label"> {{ __('admin.desc_ar') }} : <span
                                    class="tx-danger">*</span></label>
                            <textarea class="form-control summernote" type="text"
                                name="desc_ar"> {{ $museum->desc_ar }} </textarea>
                        </div>
                    </div><!-- col-6 -->



                    <div class="col-lg-12">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Governorate: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" data-placeholder="Choose country" name="governorate_id">
                                <option label="Choose Brand"></option>
                                @foreach($governorates as $governorate)
                                <option @if ($museum->governorate_id == $governorate->id)
                                    {{ "selected" }}
                                    @endif

                                    value="{{ $governorate->id }}">{{ $governorate->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- col-6 -->


                    {{-- Images --}}



                    <div class="row mb-1">
                        <div class="col-lg-6 col-sm-6">

                            <label class="form-control-label">Image One ( Main Thumbnali): <span
                                    class="tx-danger">*</span></label><br>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="image_one"
                                    onchange="readURL(this);">
                                <span class="custom-file-control"></span>
                            </label>
                            <img src="" id="one">
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <img src=" {{ asset('storage/'.$museum->image_one) }} " style="width: 80px; height: 80px;">
                        </div>

                    </div><!-- col-4 -->

                    <div class="row mb-1">
                        <div class="col-lg-6 col-sm-6">

                            <label class="form-control-label">Image Two: <span class="tx-danger">*</span></label><br>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="image_two"
                                    onchange="readURL2(this);">
                                <span class="custom-file-control"></span>
                            </label>
                            <img src="" id="two">
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <img src=" {{ asset('storage/'.$museum->image_two) }} " style="width: 80px; height: 80px;">
                        </div>
                    </div><!-- col-4 -->


                    <div class="row mb-1">
                        <div class="col-lg-6 col-sm-6">

                            <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label><br>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="image_three"
                                    onchange="readURL3(this);">
                                <span class="custom-file-control"></span>
                            </label>
                            <img src="" id="three">
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <img src=" {{ asset('storage/'.$museum->image_three) }} "
                                style="width: 80px; height: 80px;">
                        </div>
                    </div><!-- col-4 -->





                    <div class="form-layout-footer text-center mt-5">
                        <button type="submit" class="btn btn-info mg-r-5">{{ __('admin.update') }}</button>
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
