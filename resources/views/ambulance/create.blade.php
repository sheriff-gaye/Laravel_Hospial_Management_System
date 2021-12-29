
@extends('layouts.admin')

@section('content')
<!--header-->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" >
            <div class="col-sm-6">
                <ol class="breadcrumb  float-sm-right">
                    <li class="breadcrumb-item"><a href="">Ambulance</a></li>
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
                    Add Ambulance
                   <i class="fa fa-ambulance" aria-hidden="true"></i>
                </div>
                <div class="card-body">
                    <form action="{{ route('ambulance.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                <!--name starts here-->
                        <div class="row mb-3">
                            <label for="name">Ambulance Name <span style="color: red">*</span></label>
                            <input type="text" name="name" class="form-control   @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <!--name ends here-->

                @csrf
                <!--plate starts here-->
                        <div class="row mb-3">
                            <label for="plate">Plate No.<span style="color: red">*</span></label>
                            <input type="text" name="plate" class="form-control   @error('plate') is-invalid @enderror" value="{{ old('plate') }}" autofocus>
                            @error('plate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <!--plate ends here-->

                 <!--type starts here-->
    <div class="row mb-3">
        <label for="type">Type<span style="color: red">*</span></label>
      <select name="type"  class="form-control  @error('type') is-invalid @enderror">
        <option value="">Select  Ambulance Type--</option>
        <option>Individual Ambulance</option>
        <option>Collective Ambulance</option>
        <option>Basi Life support</option>
        <option>Medicals/Nursing Care Vehicle</option>


      </select>
        @error('type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<!--type ends here-->

<!--status strarts here-->
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


