
@extends('layouts.admin')


@section('content')
<!--header-->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" >
            <div class="col-sm-6">
                <ol class="breadcrumb  float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">specialist</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--end of header-->
@if (Session::has('message'))
<div class=" alert alert-success  row col-md-4  offset-7" style="margin-top: -45px">
    {{Session::get('message')}}  <i class="fa fa-check-circle" aria-hidden="true"style="margin: 5px 0 0 5px"></i>
</div>
@endif
<div class="content">
    <div class="container-fluid">
        <a href="{{ route('specialist.create') }}" class="btn btn-info  offset-4">Add New Specialist
            <i class="fa fa-plus-square" aria-hidden="true"></i>
        </a>

        <br><br>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ACTION</th>

            </tr>

            <tr>
                @foreach ($specialists as $key=>$specialist )

                <td>{{ $key +1 }}</td>
                <td>{{ $specialist->name }}</td>
                <td>
                    <div class="row ">
                    <a href="{{ route('specialist.edit',[$specialist->id]) }}" class="btn btn-primary  btn-sm">Edit  <i class="fa fa-edit" aria-hidden="true"></i></a>

                  <form action="{{ route('specialist.destroy',[$specialist->id]) }}" method="POST">
                    @csrf {{ method_field('DELETE') }}
                    <button class="btn btn-danger  btn-sm">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
                </td>
            </div>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
