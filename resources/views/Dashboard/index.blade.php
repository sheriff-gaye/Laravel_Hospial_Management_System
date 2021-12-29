

@extends('layouts.admin')


@section('content')
<!--header-->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" >
            <div class="col-sm-6">
                <ol class="breadcrumb  float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">users</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--end of header-->
@if (Session::has('message'))
<div class=" alert alert-warning">
    {{Session::get('message')}}  <i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:25px"></i>
</div>
@endif

     <div class="row offset-md-3" style="font-weight: bold;font-size:30px;">USERS MANAGEMENT CONTROL</div>
<div class="content">
    <div class="container-fluid">
        <table class="table table-bordered  table-striped ">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>

            </tr>
            @foreach ($user as $key=>$users )
            <tr>
                <td>{{ $key +1}}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->created_at }}</td>
                <td>{{ $users->updated_at }}</td>
                <td>

                  <form action="{{ route('dashboard.destroy',[$users->id]) }}" method="POST">
                    @csrf {{ method_field('DELETE') }}
                    <button class="btn btn-danger btn-sm">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </div>
                </td>

            </tr>
            @endforeach


        </table>
    </div>
</div>




@endsection
