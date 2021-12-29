
@extends('layouts.admin')


@section('content')

@if (Session::has('message'))
<div class=" alert alert-success  row col-md-3  offset-7">
    {{Session::get('message')}}  <i class="fa fa-check-circle" aria-hidden="true"style="margin: 5px 0 0 5px"></i>
</div>
@endif

<a href="{{ route('pharmacy.create')}}"><button class="btn btn-info offset-md-5" style="margin:30px 0 0 900px ">Add Pharmacy
    <i class="fa fa-plus-square" aria-hidden="true"></i>
</button></a>

     <div class="row offset-md-1" style="font-size:30px;margin-top:0px;">PHARMACY</div>
<div class="content">
    <div class="container-fluid">
        <table class="table table-bordered  table-striped">


            <tr>
                <th>PHARMACY ID</th>
                <th>PHARMACY NUMBER</th>
                <th>HOLDER NAME</th>
                <th>MARKETING OFFICER</th>
                <th>ADDRESS</th>
                <th>PHONE</th>
                <th>STATUS</th>
                <th>ACTION</th>

            </tr>

            <tr>
                @foreach ($pharmacies as $key=>$pharmacy )
                <td>Phar00{{ $key +1  }}</td>
                <td>{{ $pharmacy->pharmacy_name }}</td>
                <td>{{ $pharmacy->name }}</td>
                <td>{{ $pharmacy->marketing->name}}</td>
                <td>{{ $pharmacy->address }}</td>
                <td>{{ $pharmacy->phone_id}}</td>
                <td>
                    @if($pharmacy->status=='Active')
                    <span class="btn btn-success btn-sm">{{ $pharmacy->status }}</span>
                    @elseif ($pharmacy->status=='Inactive')
                    <span class="btn btn-warning btn-sm">{{ $pharmacy->status }}</span>
                    @endif
                </td>
                <td>
                    <div class="row ">
                        <a href="{{ route('pharmacy.edit',[$pharmacy->id]) }}" class="btn btn-primary btn-sm ">Edit  <i class="fa fa-edit" aria-hidden="true"></i></a>

                      <form action="{{ route('pharmacy.destroy',[$pharmacy->id]) }}" method="POST">
                        @csrf {{ method_field('DELETE') }}
                        <button class="btn btn-danger btn-sm">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </td>

            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
