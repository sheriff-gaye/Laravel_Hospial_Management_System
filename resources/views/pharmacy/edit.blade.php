
@extends('layouts.admin')

@section('content')
<!--header-->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" >
            <div class="col-sm-6">
                <ol class="breadcrumb  float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('pharmacy.index') }}">Pharmacy</a></li>
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
                    Update Pharmacy
                     <i class="fas fa-first-aid "></i>
                </div>
                <div class="card-body">
                    <form action="{{ route('pharmacy.update',[$pharmacy->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                <!--name starts here-->
                        <div class="row mb-3">
                            <label for="name">Pharmacy Holder Name <span style="color: red">*</span></label>
                            <input type="text" name="name" class="form-control   @error('name') is-invalid @enderror" value="{{ $pharmacy->name }}" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <!--name ends here-->


            <!--address-starts-->
                  <div class="row mb-3">
                    <label for="address">Pharmacy Address<span style="color: red">*</span></label>
                    <input type="text" name="address"  class="form-control   @error('address') is-invalid @enderror" value="{{ $pharmacy->address }}" autofocus>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--address-ends-here-->


            <!--departent starts here-->
                <div class="row mb-3">
                    <label for="officer_id">Marketing Officer<span style="color: red">*</span></label>
                  <select value="{{ $pharmacy->officer_id}}"  name="officer_id"  class="form-control">
                    @foreach (App\Models\Marketing::all() as $market )
                      <option value="{{ $market->id }}">{{$market->name}}</option>
                      @endforeach

                  </select>
                    @error('officer_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--department ends here -->

            <!--pharmacy name starts here-->
            <div class="row mb-3">
                <label for="pharmacy_name">Pharmacy Name <span style="color: red">*</span></label>
                <input type="text" name="pharmacy_name" class="form-control   @error('pharmacy_name') is-invalid @enderror" value="{{ $pharmacy->pharmacy_name }}" autofocus>
                @error('pharmacy_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    <!--name ends here-->

              <!--phone sarts here-->
            <div class="row mb-3">
                <label for="phone_id">Pharmacy Mobile No.<span style="color: red">*</span></label>
                <input type="tel" name="phone_id"   id="phone_id" class="form-control   @error('phone_id') is-invalid @enderror" value="{{ $pharmacy->phone_id}}" autofocus>
                @error('phone_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!--phone ends here-->


            <!--satus starts here -->
                    <div class="row mb-3">
                        <label for="status">Pharmacy Status</label>
                        <div class="form-check">
                        <label class="form-check-label" for="active">Active</label>
                        <input type="radio" class="form-check-input" id="active" name="status" style="margin-left:7px " value="{{ $pharmacy->status }}">

                    </div>
                        <div class="form-check">
                        <label class="form-check-label" for="inactive">Inactive</label>
                        <input type="radio" class="form-check-input" id="inactive" name="status" style="margin-left:7px" value="{{ $pharmacy->status }}">

                      </div>
                         </div>

                    <!--status ends here-->
                            <div class="row  offset-5 ">
                                <button class="btn btn-danger">Save
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


