
@extends('layouts.admin')


@section('content')

@if (Session::has('message'))
<div class=" alert alert-success  row col-md-4 offset-7">
    {{Session::get('message')}}  <i class="fa fa-check-circle" aria-hidden="true"style="margin: 5px 0 0 5px"></i>
</div>
@endif

<a href="{{ route('bed.create') }}"><button class="btn btn-info offset-md-5" style="margin:30px 0 0 900px ">Add Bed
    <i class="fa fa-plus-square" aria-hidden="true"></i>
</button></a>

     <div class="row offset-md-1" style="font-size:30px;margin-top:0px;">SEAT BEDS ALLOCATION</div>
<div class="content">
    <div class="container-fluid">
        <table class="table table-bordered  table-striped">


            <tr>
                <th>ID</th>
                <th>BED SEAT NO.</th>
                <th>ROOM NO.</th>
                <th>FLOOR</th>
                <th>TYPE</th>
                <th>PRICE</th>
                <th>STATUS</th>
                <th>ACTION</th>

            </tr>

            <tr>
                @foreach ($beds as $key=>$bed )

                <td>{{ $key+1 }}</td>
                <td>BD-{{ $bed->bed }}</td>
                <td>RM-{{ $bed->room}}</td>
                <td>{{ $bed->floor }}</td>
                <td>{{ $bed->type }}</td>
                <td>${{ $bed->price }}</td>
                <td>
                    @if($bed->status=='Active')
                    <span class="btn btn-success  btn-sm">{{ $bed->status }}</span>
                    @elseif ($bed->status=='Inactive')
                    <span class="btn btn-warning btn-sm">{{ $bed->status }}</span>
                    @endif
                </td>

                <td>
                    <div class="row ">
                        <a href="{{ route('bed.edit',[$bed->id]) }}" class="btn btn-primary  btn-sm">Edit  <i class="fa fa-edit" aria-hidden="true"></i></a>

                      <form action="{{ route('bed.destroy',[$bed->id]) }}" method="POST">
                        @csrf {{ method_field('DELETE') }}
                        <button class="btn btn-danger  btn-sm">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                    {{-- <a href="" class="btn btn-secondary">View  <i class="fa fa-eye" aria-hidden="true"></i></a> --}}

                </td>

            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
