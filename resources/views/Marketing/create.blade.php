
@extends('layouts.admin')

@section('content')
<!--header-->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" >
            <div class="col-sm-6">
                <ol class="breadcrumb  float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('marketing.index') }}">Marketing</a></li>
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
                    Add Marketing Officer
                  <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="card-body">
                    <form action="{{ route('marketing.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                <!--name starts here-->
                        <div class="row mb-3">
                            <label for="name">Officer Name <span style="color: red">*</span></label>
                            <input type="text" name="name" class="form-control   @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <!--name ends here-->
            <!--phone sarts here-->
            <div class="row mb-3">
                <label for="phone">Officer Phone<span style="color: red">*</span></label>
                <input type="tel" name="phone"   id="phone" class="form-control   @error('phone') is-invalid @enderror" value="{{ old('phone') }}" autofocus>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!--phone ends here-->

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


