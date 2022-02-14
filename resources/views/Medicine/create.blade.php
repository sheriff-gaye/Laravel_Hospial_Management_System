
@extends('layouts.admin')

@section('content')
<!--header-->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" >
            <div class="col-sm-6">
                <ol class="breadcrumb  float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('medicine.index') }}">Medicine</a></li>
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
                    Add Medicine
                    <i class="fas fa-notes-medical"  style="font-size:30px;"></i>
                </div>
                <div class="card-body">
                    <form action="{{ route('medicine.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf


         <!--expired date starts here-->
         <div class="row mb-3">
            <label for="e_date">Expired Date <span style="color: red">*</span></label>
            <input type="date" name="e_date" class="form-control   @error('e_date') is-invalid @enderror" value="{{ old('e_date') }}" autofocus>
            @error('e_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
<!--  expired date ends here-->
                <!--name starts here-->
                        <div class="row mb-3">
                            <label for="m_name">Medicine Name <span style="color: red">*</span></label>
                            <input type="text" name="m_name" class="form-control   @error('m_name') is-invalid @enderror" value="{{ old('m_name') }}" autofocus>
                            @error('m_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <!--name ends here-->



            <!--medicine price starts here-->
            <div class="row mb-3">
                <label for="price">Medicine Price <span style="color: red">*</span></label>
                <input type="text" name="price" class="form-control   @error('price') is-invalid @enderror" value="{{ old('price') }}" autofocus>
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    <!--medicine price ends here-->

        <!--quantity sarts here-->
            <div class="row mb-3">
                <label for="qty">Medicine Qty<span style="color: red">*</span></label>
                <input type="tel" name="qty"   id="qty" class="form-control   @error('qty') is-invalid @enderror" value="{{ old('qty') }}" autofocus>
                @error('qty')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!--quantity ends here-->

          <!--descrition starts here-->
          <div class=" row mb-2">
            <label for="description ">Description<span style="color: red">*</span></label>
            <textarea name="description" id="editor" class="form-control   @error('description') is-invalid @enderror"    autofocus>{!! old('description') !!}</textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

        </div>
<!--biography ends here -->



            <!--satus starts here -->
                    <div class="row mb-3">
                        <label for="status">Medicine Status</label>
                        <div class="form-check">
                        <label class="form-check-label   @error('status') is-invalid @enderror"  for="active">Active</label>
                        <input type="radio" class="form-check-input" id="active" name="status" style="margin-left:7px " value="Active">
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                        <div class="form-check">
                        <label class="form-check-label    @error('status') is-invalid @enderror " for="inactive">Inactive</label>
                        <input type="radio" class="form-check-input" id="inactive" name="status" style="margin-left:7px" value="Inactive">
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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


