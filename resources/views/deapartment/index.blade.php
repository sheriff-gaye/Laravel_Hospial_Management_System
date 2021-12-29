
@extends('layouts.admin')


@section('content')

@if (Session::has('message'))
<div class=" alert alert-success row col-md-3  offset-7">
    {{Session::get('message')}}  <i class="fa fa-check-circle" aria-hidden="true" style="margin: 5px 0 0 5px "></i>
</div>
@endif

<a href="{{ route('department.create') }}"><button class="btn btn-info offset-md-5" style="margin:30px 0 0 900px ">Add Department
    <i class="fa fa-plus-square" aria-hidden="true"></i>
</button></a>

     <div class="row offset-md-1" style="font-size:30px;margin-top:0px;">Department</div>
<div class="content">
    <div class="container-fluid">
        <table class="table table-bordered  table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>DEPARTMENT</th>
                <th>DESCRIPTION</th>
                <th>STATUS</th>
                <th>ACTION</th>

            </tr>

            <tr>
                @foreach ($departments as $key=>$department )
                <td>Dept-0{{ $key +1  }}</td>
                <td>{{ $department->name }}</td>
                <td style="width: 20%">{!! $department->description  !!}</td>
                <td>
                    @if($department->status=='Active')
                      <span class="btn btn-success btn-sm">{{ $department->status }}</span>

                    @elseif($department->status=='Inactive')

                        <span class="btn btn-warning btn-sm">{{ $department->status }}</span>

                    @endif
                </td>
                <td>
                    <div class="row ">
                    <a href="{{ route('department.edit',[$department->id]) }}" class="btn btn-primary btn-sm">Edit  <i class="fa fa-edit" aria-hidden="true"></i></a>

                  <form action="{{ route('department.destroy',[$department->id]) }}" method="POST">
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
