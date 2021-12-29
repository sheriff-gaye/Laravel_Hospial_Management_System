
@extends('layouts.admin')

@section('content')
<!--header-->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" >
            <div class="col-sm-6">
                <ol class="breadcrumb  float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Appointmet</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--end of header-->
@if (Session::has('message'))
<div class=" alert alert-success  row col-md-3  offset-7">
    {{Session::get('message')}}  <i class="fa fa-check-circle" aria-hidden="true"style="margin: 5px 0 0 5px"></i>
</div>
@endif
<div class="container">
    <div class="row content-justify-center">
        <div class="col-md-8" style="margin-left:150px">

            <div class="card">
                <div class="card-header  bg-blue "  style="font-weight:bold;">
                    MAKE AN APPOINTMENT
                    <i class="fa fa-calendar-alt" aria-hidden="true" style="font-size: 20px"></i>(It's Free)
                </div>
                <div class="card-body">
                    <form action="{{ route("appointment.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                 <!--patient doctor starts here-->
       <div class="row mb-3">
        <label for="doctor"> Visting Doctor</span></label>
      <select name="doctor"  class="form-control  @error('doctor') is-invalid @enderror">
          <option value="">Select Doctor--</option>
          @foreach ( App\Models\Doctors::all() as $doctor  )
        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
        @endforeach

      </select>
        @error('doctor')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<!--patient doctor ends here-->
                <!--name starts here-->
                        <div class="row mb-3">
                            <label for="name">Full Name <span style="color: red">*</span></label>
                            <input type="text" name="name" class="form-control   @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <!--name ends here-->

                <!--username starts here-->
                        <div class="row mb-3">
                            <label for="username">Email<span style="color: red">*</span></label>
                            <input type="text" name="username"  class="form-control   @error('username') is-invalid @enderror" value="{{ old('username') }}" autofocus>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <!--username ends here-->

                 <!--phone sarts here-->
            <div class="row mb-3">
                <label for="phone">Phone<span style="color: red">*</span></label>
                <input type="tel" name="phone"   id="phone" class="form-control   @error('phone') is-invalid @enderror" value="{{ old('phone') }}" autofocus>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!--phone ends here-->

                <!--date og birth starts here-->
                <div class="row mb-3">
                        <label for="date">Date </label>
                        <input type="date" name="date"  class="form-control   @error('date') is-invalid @enderror" value="{{ old('date') }}" autofocus>
                        @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!--date of birth ends here-->

                <!--time starts here-->
                <div class="row mb-3">
                    <label for="time">Time</label>
                    <input type="time" name="time"  class="form-control   @error('time') is-invalid @enderror" value="{{ old('time') }}" autofocus>
                    @error('time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--date of birth ends here-->



            <!--biography starts here-->
                        <div class=" row mb-2">
                            <label for="message">Message<span style="color: red">*</span></label>
                            <textarea name="message" id="editor" class="form-control   @error('message') is-invalid @enderror"    autofocus>{{ old('message') }}</textarea>

                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

            <!--biography ends here -->


                            <div class="row  offset-5 ">
                                <button class="btn btn-danger">Send
                                    <i class="fa fa-save" aria-hidden="true"></i>
                                </button>
                            </div>
                            <br>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection


