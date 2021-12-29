
@extends('layouts.admin')


@section('content')

@if (Session::has('message'))
<div class=" alert alert-success  row col-md-3  offset-7">
    {{Session::get('message')}}  <i class="fa fa-check-circle" aria-hidden="true"style="margin: 5px 0 0 5px"></i>
</div>
@endif

<a href="{{ route('doctors.create') }}"><button class="btn btn-info offset-md-5" style="margin:30px 0 0 900px ">Add Doctor
    <i class="fa fa-plus-square" aria-hidden="true"></i>
</button></a>

     <div class="row offset-md-1" style="font-size:30px;margin-top:0px;">DOCTORS</div>
<div class="content">
    <div class="container-fluid">
        <table class="table table-bordered  table-striped">


            <tr>
                <th>ID</th>
                <th style="width: 20%">NAME</th>
                <th>EMAIL</th>
                <th>SPECIALIST</th>
                <th>COUNTRY</th>
                <th>PHONE</th>
                <th>STATUS</th>
                <th style="width: 27%">ACTION</th>

            </tr>

            <tr>
                @foreach ($doctors as $key=>$doctor )

                <td>{{ $key +1  }}</td>
                <td>
                    <img src="{{asset('images')}}/{{$doctor->image}}" width="45" height="45" style="border-radius: 30px;" >
                    {{ $doctor->name }}
                </td>
                <td>{{ $doctor->username }}</td>
                <td>{{ $doctor->specialisty->name}}</td>
                <td>{{ $doctor->country }}</td>
                <td>{{ $doctor->phone }}</td>
                <td>
                    @if($doctor->status=='Active')
                    <span class="btn btn-success  btn-sm">{{ $doctor->status }}</span>
                    @elseif ($doctor->status=='Inactive')
                    <span class="btn btn-warning btn-sm">{{ $doctor->status }}</span>
                    @endif
                </td>
                <td>
                    <div class="row ">
                        <a href="{{ route('doctors.edit',[$doctor->id]) }}" class="btn btn-primary btn-sm">Edit  <i class="fa fa-edit" aria-hidden="true"></i></a>

                       <form action="{{ route('doctors.destroy',[$doctor->id]) }}" method="POST">
                        @csrf {{ method_field('DELETE') }}
                        <button class="btn btn-danger btn-sm">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                       </form>

                        <a href="{{ route('doctors.show',[$doctor->id]) }}" class="btn btn-secondary btn-sm">View  <i class="fa fa-eye" aria-hidden="true"></i></a>
                    </div>

                </td>

            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
