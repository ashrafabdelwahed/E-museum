@extends('admin.layouts.app')


@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href=" {{ route('admin.index') }} ">Dashboard</a>
</nav>

<div class="sl-pagebody">
    <div class="card pd-20 pd-sm-40">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="card-body-title"> {{ __('admin.all_hotels') }} </h6>
            <a href="{{ route('hotel.create') }}" class="btn btn-primary"> {{ __('admin.add_new_hotel') }} </a>
        </div>

        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
                <thead>
                    <tr>
                        <th class="wd-15p">{{ __('admin.name_en') }}</th>
                        <th class="wd-15p">{{ __('admin.name_ar') }}</th>
                        <th class="wd-15p">{{ __('admin.address_en') }}</th>
                        <th class="wd-15p">{{ __('admin.museum') }}</th>
                        <th class="wd-15p text-center">{{ __('admin.number_stars') }}</th>

                        <th class="wd-15p text-center"> {{ __('admin.actions') }} </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($hotels as $hotel)
                    <tr>
                        <td> {{ $hotel->name_en }} </td>
                        <td> {{ $hotel->name_ar }} </td>
                        <td> {{ $hotel->address_en }} </td>
                        <td> {{ $hotel->museum->name_en }} </td>
                        <td class="text-center"> {{ $hotel->stars }} </td>
                        <td class="text-center">
                            <a href="{{ route('hotel.edit',$hotel->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ route('hotel.destroy',$hotel->id) }}" method="POST" class=" d-inline">
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
