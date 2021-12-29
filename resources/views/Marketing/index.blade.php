
@extends('layouts.admin')


@section('content')

@if (Session::has('message'))
<div class=" alert alert-success row col-md-3  offset-7">
    {{Session::get('message')}}  <i class="fa fa-check-circle" aria-hidden="true" style="margin: 5px 0 0 5px" ></i>
</div>
@endif

<a href="{{ route('marketing.create') }}"><button class="btn btn-info offset-md-5" style="margin:30px 0 0 900px ">Add Officer
    <i class="fa fa-plus-square" aria-hidden="true"></i>
</button></a>

     <div class="row offset-md-1" style="font-size:30px;margin-left:13px;">MARKETING OFFICER</div>
<div class="content">
    <div class="container-fluid">
        <table class="table table-bordered  table-striped">
            <tr>
                <th>ID</th>
                <th>OFFICER NAME</th>
                <th>PHONE</th>
                <th>ACTION</th>
            </tr>

            <tr>
                @foreach ($marketings as $key=>$marketing )
                <td>Mrk0{{ $key +1 }}</td>
                <td>{{ $marketing->name }}</td>
                <td>{{ $marketing->phone }}</td>
                <td>
                    <div class="row ">
                    <a href="{{ route('marketing.edit',[$marketing->id]) }}" class="btn btn-primary btn-sm">Edit  <i class="fa fa-edit" aria-hidden="true"></i></a>

                  <form action="{{ route('marketing.destroy',[$marketing->id]) }}" method="POST">
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
