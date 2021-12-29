
@extends('layouts.admin')


@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header  bg-blue"  style="font-weight:bold;text-align:center">
                    MY PROFILE
                    <i class="fas fa-procedures " style="font-size:30px;"></i>
                </div>
                <div class="card-body ">
                    <img src="{{asset('images')}}/{{$patient->image}}" width="180" height="180" style="border-radius: 50%;border:5px solid rgba(36, 36, 216, 0.945)">
                <hr>
                <h5 style="margin-left:20px"><strong>NAME:</strong>{{ $patient->name }}</h5>
                <h5 style="margin-left:20px"><strong>GENDER:</strong>{{ $patient->gender }}</h5>
                <h5 style="margin-left:20px"><strong>ADDRESS:</strong>{{ $patient->address}}</h5>
                <h5 style="margin-left:20px"><strong>PHONE:</strong>{{ $patient->phone }}</h5>
                <h5 style="margin-left:20px"><strong>EMAIL:</strong>{{  $patient->username }}</h5>
                <h5 style="margin-left:20px"><strong>BLOOD GROUP:</strong>{{ $patient->blood }}</h5>
                <h5 style="margin-left:20px"><strong>DOCTOR:</strong>{{ $patient->docters->name}}</h5>


            </div>



                </div>

            </div>

        </div>
    </div>
</div>


    </div>
</div>
@endsection
