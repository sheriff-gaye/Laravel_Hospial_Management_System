
@extends('layouts.admin')


@section('content')

@if (Session::has('message'))
<div class=" alert alert-success  row col-md-4 offset-7">
    {{Session::get('message')}}  <i class="fa fa-check-circle" aria-hidden="true"style="margin: 5px 0 0 5px"></i>
</div>
@endif

<a href="{{ route('medicine.create') }}"><button class="btn btn-info offset-md-5" style="margin:30px 0 0 900px ">Add Medicine
    <i class="fa fa-plus-square" aria-hidden="true"></i>
</button></a>

     <div class="row offset-md-1" style="font-size:30px;margin-top:0px;">MEDICINE/DRUGS</div>
<div class="content">
    <div class="container-fluid">
        <table class="table table-bordered  table-striped">


            <tr>
                <th>MED ID</th>
                <th>NAME</th>
                <th>MED QTY</th>
                <th>PRICE</th>
                <th>STOCK LEVEL</th>
                <th>EXPIRATION DATE</th>
                <th>STATUS</th>
                <th>ACTION</th>

            </tr>

            <tr>
                @foreach ($medicines as $key=>$medicine )

                <td>{{ $key +1  }}</td>
                <td>{{ $medicine->m_name }}</td>
                <td>{{ $medicine->qty }}</td>
                <td>${{ $medicine->price }}.00</td>
                <td>
                    @if($medicine->qty <= 100)
                    <span class="btn btn-outline-danger  btn-sm">{{ $medicine->qty }}</span>
                    @elseif ($medicine->qty >100)
                    <span class="btn btn-outline-success btn-sm">{{ $medicine->qty }}</span>
                    @endif
                </td>
                <td>{{ $medicine->e_date }}</td>
                <td>
                    @if($medicine->status=='Active')
                    <span class="btn btn-success btn-sm">{{ $medicine->status }}</span>
                    @elseif ($medicine->status=='Inactive')
                    <span class="btn btn-warning btn-sm">{{ $medicine->status }}</span>
                    @endif
                </td>
                <td>
                    <div class="row ">
                        <a href="{{ route('medicine.edit',[$medicine->id]) }}" class="btn btn-primary  btn-sm">Edit  <i class="fa fa-edit" aria-hidden="true"></i></a>

                      <form action="{{ route('medicine.destroy',[$medicine->id]) }}" method="POST">
                        @csrf {{ method_field('DELETE') }}
                        <button class="btn btn-danger  btn-sm">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>

                </td>

            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
