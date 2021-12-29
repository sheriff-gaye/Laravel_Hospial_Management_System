
@extends('layouts.admin')


@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header  bg-blue"  style="font-weight:bold;text-align:center">
                    MY PROFILE
                    <i class="fa fa-user-md" aria-hidden="true" style="font-size:30px"></i>
                </div>
                <div class="card-body ">
                    <img src="{{asset('images')}}/{{$doctor->image}}" width="180" height="180" style="border-radius: 50%;border:5px solid rgba(36, 36, 216, 0.945)">
                <hr>
                <h5 style="margin-left:20px"><strong>NAME:</strong>{{ $doctor->name }}</h5>
                <h5 style="margin-left:20px"><strong>GENDER:</strong>{{ $doctor->gender }}</h5>
                <h5 style="margin-left:20px"><strong>ADDRESS:</strong>{{ $doctor->address}}</h5>
                <h5 style="margin-left:20px"><strong>COUNTRY:</strong>{{ $doctor->country }}</h5>
                <h5 style="margin-left:20px"><strong>PHONE:</strong>{{ $doctor->phone }}</h5>
                <h5 style="margin-left:20px"><strong>EMAIL:</strong>{{ $doctor->username }}</h5>
                <h5 style="margin-left:20px"><strong>SPECIALIST:</strong>{{ $doctor->specialisty->name }}</h5>
                <h5 style="margin-left:20px"><strong>DEPARTMENT:</strong>{{ $doctor->departmenty->name}}</h5>


            </div>



                </div>

            </div>

        </div>
    </div>
</div>


    </div>
</div>
@endsection
