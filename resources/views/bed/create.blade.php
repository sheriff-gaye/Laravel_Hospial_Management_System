
@extends('layouts.admin')

@section('content')
<!--header-->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" >
            <div class="col-sm-6">
                <ol class="breadcrumb  float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('bed.index') }}">Beds</a></li>
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
                    Add Bed
                   <i class="fa fa-bed" aria-hidden="true"></i>
                </div>
                <div class="card-body">
                    <form action="{{ route('bed.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                <!--room starts here-->
                        <div class="row mb-3">
                            <label for="room">Room No. <span style="color: red">*</span></label>
                            <input type="text" name="room" class="form-control   @error('room') is-invalid @enderror" value="{{ old('room') }}" autofocus>
                            @error('room')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <!--room ends here-->

                @csrf
                <!--bed starts here-->
                        <div class="row mb-3">
                            <label for="bed">Bed No. <span style="color: red">*</span></label>
                            <input type="text" name="bed" class="form-control   @error('bed') is-invalid @enderror" value="{{ old('bed') }}" autofocus>
                            @error('bed')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <!--bed ends here-->

                 <!--type starts here-->
    <div class="row mb-3">
        <label for="type">Type<span style="color: red">*</span></label>
      <select name="type"  class="form-control  @error('type') is-invalid @enderror">
        <option value="">Select  Floor--</option>
        <option>General</option>
        <option>Cabin</option>


      </select>
        @error('type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<!--type ends here-->


    <!--floor starts here-->
    <div class="row mb-3">
        <label for="floor">Floor<span style="color: red">*</span></label>
      <select name="floor"  class="form-control  @error('floor') is-invalid @enderror">
        <option value="">Select  Floor--</option>
        <option>Floor 1</option>
        <option>Floor 2</option>
        <option>Floor 3</option>
        <option>Floor 4</option>


      </select>
        @error('floor')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<!--floor ends here-->

    <!--price starts here-->
    <div class="row mb-3">
        <label for="price">Rent/Day <span style="color: red">*</span></label>
        <input type="text" name="price" class="form-control   @error('price') is-invalid @enderror" value="{{ old('price') }}" autofocus>
        @error('price')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<!--price ends here-->

            <!--satus starts here -->
                    <div class="row mb-3">
                        <label for="gender">Status</label>
                        <div class="form-check">
                         <label class="form-check-label" for="Active">Active</label>
                        <input type="radio" class="form-check-input" id="Active" name="status" style="margin-left: 7px" value="Active">

                    </div>

                        <div class="form-check">
                         <label class="form-check-label" for="Inactive">Inactive</label>
                        <input type="radio" class="form-check-input" id="Inactive" name="status" style="margin-left: 7px" value="Inactive">

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


