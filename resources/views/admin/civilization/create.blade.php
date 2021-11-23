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
        <h5> {{ __('admin.add_new_civilization') }} </h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <div class="form-layout">
            <form action="{{ route('civilization.store') }}" method="POST">
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

<script>
    $('.summernote').summernote({
        height: 150
    })

</script>


@endsection
