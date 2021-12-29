
@extends('layouts.admin')

@section('content')
<!--header-->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" >
            <div class="col-sm-6">
                <ol class="breadcrumb  float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('doctors.index') }}">Doctors</a></li>
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
                    Add Doctor
                    <i class="fas fa-user-md" style="font-size:30px;"></i>
                </div>
                <div class="card-body">
                    <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                <!--name starts here-->
                        <div class="row mb-3">
                            <label for="name">Name <span style="color: red">*</span></label>
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
                            <label for="username">Username<span style="color: red">*</span></label>
                            <input type="text" name="username"  class="form-control   @error('username') is-invalid @enderror" value="{{ old('username') }}" autofocus>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <!--username ends here-->

                <!--date og birth starts here-->
                <div class="row mb-3">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob"  class="form-control   @error('dob') is-invalid @enderror" value="{{ old('dob') }}" autofocus>
                        @error('dob')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!--date of birth ends here-->

                <!--gender-checkbox-->
                     <div class="row mb-3">
                    <label for="gender">Gender</label>
                    <div class="form-check">
                    <label class="form-check-label " for="male" >Male</label>
                    <input type="radio" class="form-check-input" id="male" name="gender"style="margin-left: 7px" value="Male" >

                </div>

                    <div class="form-check">
                        <label class="form-check-label " for="female">Female</label>
                    <input type="radio" class="form-check-input" id="female" name="gender"style="margin-left: 7px" value="Female">

                  </div>
                     </div>
                <!--end-of-gender-->

            <!--address-starts-->
                  <div class="row mb-3">
                    <label for="address">Address<span style="color: red">*</span></label>
                    <input type="text" name="address"  class="form-control   @error('address') is-invalid @enderror" value="{{ old('address') }}" autofocus>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--address-ends-here-->

            <!--country starts here-->
            <div class="row mb-3">
                <label for="country">Country<span style="color: red">*</span></label>
              <select name="country"  class="form-control">
                  <option value="">Select Country--</option>
                <option>Gambia</option>
                 <option>Senegal</option>
                 <option>Mali</option>
                 <option >Nigeria</option>
                <option>Ghana</option>

              </select>
                @error('country')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!--country ends here-->

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

        <!--specialist starts here-->
                    <div class="row mb-3">
                        <label for="specialist">Specialist<span style="color: red">*</span></label>
                      <select  autofocus name="specialist"  class="form-control">
                          <option value="">Select Specialist--</option>
                          @foreach ( App\Models\Specialist::all() as $specialist  )
                          <option value="{{ $specialist->id }}">{{ $specialist->name }}</option>
                          @endforeach

                      </select>
                        @error('specialist')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            <!--specialist ends --here-->

            <!--departent starts here-->
                <div class="row mb-3">
                    <label for="department">Department<span style="color: red">*</span></label>
                  <select  autofocus name="department"  class="form-control">
                      <option value="">Select Department--</option>
                      @foreach (App\Models\Department::all() as $drop )
                      <option value="{{ $drop->id }}">{{ $drop->name }}</option>
                      @endforeach

                  </select>
                    @error('department')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--department ends here -->

            <!--biography starts here-->
                        <div class=" row mb-2">
                            <label for="biography">Short Biography<span style="color: red">*</span></label>
                            <textarea name="biography" id="editor" class="form-control   @error('biography') is-invalid @enderror"    autofocus>{{ old('biography') }}</textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#editor' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>

                            <br><br>@error('biography')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <br>
            <!--biography ends here -->

            <!--image upload starts here-->
                        <div class="row mb-3">
                            <label for="image">Upload Image<span style="color: red">*</span></label>
                            <input type="file" name="image" class="form-control   @error('image') is-invalid @enderror" value="{{ old('image') }}">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            <!--image upload ends here-->

            <!--satus starts here -->
                    <div class="row mb-3">
                        <label for="status">Status</label>
                        <div class="form-check">
                        <label class="form-check-label" for="active">Active</label>
                        <input type="radio" class="form-check-input" id="active" name="status" style="margin-left:7px " value="Active">

                    </div>
                        <div class="form-check">
                        <label class="form-check-label" for="inactive">Inactive</label>
                        <input type="radio" class="form-check-input" id="inactive" name="status" style="margin-left:7px" value="Inactive">

                      </div>
                         </div>

                    <!--status ends here-->
                            <div class="row  offset-5 ">
                                <button class="btn btn-danger">Submit
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


