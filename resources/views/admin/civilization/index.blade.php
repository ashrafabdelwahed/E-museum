@extends('admin.layouts.app')


@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href=" {{ route('admin.index') }} ">Dashboard</a>
</nav>

<div class="sl-pagebody">
    <div class="card pd-20 pd-sm-40">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="card-body-title"> {{ __('admin.all_civilizations') }} </h6>
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_Civilization">
                {{ __('admin.add_new_civilization') }} </button> --}}

                <a href="{{ route('civilization.create') }}" class="btn btn-primary"> {{ __('admin.add_new_civilization') }} </a>

        </div>

        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
                <thead>
                    <tr>
                        <th class="wd-15p">{{ __('admin.name_en') }}</th>
                        <th class="wd-15p">{{ __('admin.name_ar') }}</th>
                        <th class="wd-15p text-center"> {{ __('admin.actions') }} </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($civilizations as $civilization)
                    <tr>
                        <td> {{ $civilization->name_en }} </td>
                        <td> {{ $civilization->name_ar }} </td>
                        <td class="text-center">
                            <a href="{{ route('civilization.edit',$civilization->id) }}"
                                class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ route('civilization.destroy',$civilization->id) }}" method="POST"
                                class=" d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div><!-- table-wrapper -->
    </div><!-- card -->
</div><!-- sl-pagebody -->



<!-- Modal -->
{{-- <div class="modal fade " id="new_Civilization" tabindex="-1" role="dialog" aria-labelledby="new_CivilizationLabel"
    aria-hidden="true">
    <div class="modal-dialog w-100" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="new_CivilizationLabel">  {{ __('admin.add_new_civilization') }} </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('civilization.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label class="form-control-label"> {{ __('admin.name_en') }} : <span
                                class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="name_en" placeholder="{{ __('admin.name_ar') }}"
                            value="{{ old('name_en') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label"> {{ __('admin.name_ar') }} : <span
                                class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="name_ar" placeholder="{{ __('admin.name_ar') }}"
                            value="{{ old('name_ar') }}">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-3"> {{ __('admin.add') }} </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div> --}}


@endsection
