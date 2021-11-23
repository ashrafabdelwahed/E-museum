@extends('admin.layouts.app')


@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href=" {{ route('admin.index') }} ">Dashboard</a>
</nav>

<div class="sl-pagebody">
    <div class="card pd-20 pd-sm-40">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="card-body-title"> {{ __('admin.all_museums') }} </h6>
            <a href="{{ route('museum.create') }}" class="btn btn-primary">Add A New Museum</a>
        </div>

        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
                <thead>
                    <tr>
                        <th class="wd-15p">{{ __('admin.name_ar') }}</th>
                        <th class="wd-15p">{{ __('admin.address_ar') }}</th>
                        <th class="wd-15p">{{ __('admin.start_work_time') }}</th>
                        <th class="wd-15p">{{ __('admin.end_work_time') }}</th>
                        <th class="wd-15p">{{ __('admin.ticket_price') }}</th>
                        <th class="wd-50p"> {{ __('admin.actions') }} </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($museums as $museum)
                        <tr>
                            <td> {{ $museum->name_ar }} </td>
                            <td> {{ $museum->address_ar }} </td>
                            <td> {{ $museum->start_work_time }} </td>
                            <td> {{ $museum->end_work_time }} </td>
                            <td>$ {{ $museum->ticket_price }} </td>
                            <td class="text-center">
                                <a href="{{ route('museum.edit',$museum->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('museum.destroy',$museum->id) }}" method="POST" class=" d-inline">
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


@endsection
