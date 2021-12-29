
@extends('layouts.admin')

@section('content')
<!--header-->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" >
            <div class="col-sm-6">
                <ol class="breadcrumb  float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('patient.index') }}">Patient</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--end of header-->
<div class="container">
    <div class="row content-justify-center">
        <div class="col-md-8" style="margin-left:150px">

            <div class="card">
                <div class="card-header  bg-blue "  style="font-weight:bold;">
                    UPDATE PATIENT
                    <i class="fas fa-procedures " style="font-size:30px;"></i>
                </div>
                <div class="card-body">
                    <form action="{{ route('patient.update',[$patient->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
         <!--date starts here-->
                 <div class="row mb-3">
                    <label for="date">Date <span style="color: red">*</span></label>
                    <input type="date" name="date" class="form-control   @error('date') is-invalid @enderror" value="{{ $patient->date }}" autofocus>
                    @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        <!--date ends here-->

         <!--patient type starts here-->
         <div class="row mb-3">
            <label for="patient">Patient Type<span style="color: red">*</span></label>
          <select name="patient"  class="form-control   @error('patient') is-invalid @enderror">
              <option value="{{ $patient->patient }}">Select Patient--</option>
            <option>Admin</option>
            <option>General</option>

          </select>
            @error('patient')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <!--patient type ends here-->
     <!--name starts here-->
                        <div class="row mb-3">
                            <label for="name">Name <span style="color: red">*</span></label>
                            <input type="text" name="name" class="form-control   @error('name') is-invalid @enderror" value="{{ $patient->name }}" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        <!--name ends here-->

        <!--gender-checkbox-->
        <div class="row mb-3  " >
            <label for="gender">Gender</label>
            <div class="form-check">
            <label class="form-check-label" for="male" >Male</label>
            <input type="radio" class="form-check-input  @error('gender') is-invalid @enderror" id="male" name="gender"style="margin-left: 7px" value="Male" >
            @error('gender')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

            <div class="form-check">
                <label class="form-check-label " for="female">Female</label>
            <input type="radio" class="form-check-input " id="female" name="gender"style="margin-left: 7px" value="Female">

          </div>

             </div>
        <!--end-of-gender-->

         <!--date og birth starts here-->
         <div class="row mb-3">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob"  class="form-control   @error('dob') is-invalid @enderror" value="{{ $patient->dob }}" autofocus>
            @error('dob')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <!--date of birth ends here-->

    <!--occupation starts here-->
    <div class="row mb-3">
        <label for="occupation">Occupation</label>
        <input type="text" name="occupation"  class="form-control   @error('occupation') is-invalid @enderror" value="{{ $patient->occupation }}" autofocus>
        @error('occupation')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<!--occupation ends here-->


    <!--patient relative starts here-->
    <div class="row mb-3">
        <label for="relative">Relative<span style="color: red">*</span></label>
      <select name="relative"  class="form-control  @error('relative') is-invalid @enderror">
        <option value="{{ $patient->relative }}">Select  relative--</option>
        <option>Mother</option>
        <option>Father</option>
        <option>Husband</option>
        <option>Brother</option>
        <option>Sister</option>

      </select>
        @error('relative')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<!--patient  relative ends here-->


 <!--username starts here-->
 <div class="row mb-3">
    <label for="rname">Relative Name<span style="color: red">*</span></label>
    <input type="text" name="rname"  class="form-control   @error('rname') is-invalid @enderror" value="{{ $patient->rname }}" autofocus>
    @error('rname')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
<!--username ends here-->

 <!--phone sarts here-->
 <div class="row mb-3">
    <label for="phone">Patient Mobile<span style="color: red">*</span></label>
    <input type="tel" name="phone"   id="phone" class="form-control   @error('phone') is-invalid @enderror" value="{{ $patient->phone }}" autofocus>
    @error('phone')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
<!--phone ends here-->

 <!--home phone sarts here-->
 <div class="row mb-3">
    <label for="home-phone">Home Mobile</label>
    <input type="tel" name="home-phone"   id="home-phone" class="form-control   @error('home-phone') is-invalid @enderror" value="" autofocus>
    @error('home-phone')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
<!--home phone ends here-->



        <!--patient blood group starts here-->
        <div class="row mb-3">
            <label for="blood">Blood Group<span style="color: red">*</span></label>
          <select name="blood"  class="form-control  @error('blood') is-invalid @enderror">
            <option value="{{ $patient->blood }}">Select Blood Group--</option>
            <option>A-</option>
            <option>A+</option>
            <option>B-</option>
            <option>B+</option>
            <option>O-</option>
            <option>O+</option>

          </select>
            @error('blood')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <!--patient blood group ends here-->

      <!--patient religion starts here-->
      <div class="row mb-3">
        <label for="religion">Religion</span></label>
      <select name="religion"  class="form-control   @error('religion') is-invalid @enderror">
          <option value="{{ $patient->religion }}">Select Religion--</option>
        <option>Islam</option>
        <option>Christianity</option>

      </select>
        @error('religion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<!--patient religion ends here-->


    <!--address-starts-->
                  <div class="row mb-3">
                    <label for="address">Address<span style="color: red">*</span></label>
                    <input type="text" name="address"  class="form-control   @error('address') is-invalid @enderror" value="{{ $patient->address }}" autofocus>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
     <!--address-ends-here-->

       <!--patient doctor starts here-->
       <div class="row mb-3">
        <label for="doctor"> Visting Doctor</span></label>
      <select name="doctor"  class="form-control  @error('doctor') is-invalid @enderror">
          <option value="{{ $patient->doctor }}">Select Doctor--</option>
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

 <!--patient bed starts here-->
 <div class="row mb-3">
    <label for="bed">Bed</span></label>
  <select name="bed"  class="form-control  @error('bed') is-invalid @enderror">
    <option value="{{ $patient->bed }}">Select Bed--</option>
       <option>Bed 1</option>
       <option>Bed 2</option>
       <option>Bed 3</option>
  </select>
    @error('bed')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
<!--patient bed ends here-->


            <!--symptoms starts here-->
                        <div class=" row mb-2">
                            <label for="symptoms">Symptoms<span style="color: red">*</span></label>
                            <textarea name="symptoms" id="editor" class="form-control   @error('symptoms') is-invalid @enderror"    autofocus>{{$patient->symptoms}}</textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#editor' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>

                            <br><br>@error('symptoms')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <br>
            <!--symptoms ends here -->

            <!--image upload starts here-->
                        <div class="row mb-3">
                            <label for="image">Upload Image<span style="color: red">*</span></label>
                            <input type="file" name="image" class="form-control   @error('image') is-invalid @enderror" value="{{ $patient->image }}">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            <!--image upload ends here-->

             <!--username starts here-->
             <div class="row mb-3">
                <label for="username">Email<span style="color: red">*</span></label>
                <input type="text" name="username"  class="form-control   @error('username') is-invalid @enderror" value="{{ $patient->username}}" autofocus>
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    <!--username ends here-->

            <!--submit button-->
                            <div class="row  offset-5 ">
                                <button class="btn btn-danger">Save
                                    <i class="fa fa-save" aria-hidden="true"></i>
                                </button>
                            </div>
                            <br>
            <!--end of submit-->
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection


