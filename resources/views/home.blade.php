@extends('layouts.admin')

@section('content')

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside> <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $doctor->count() }}</h3>

              <p>Doctors</p>
            </div>
            <div class="icon">
              <i class="fa fa-stethoscope" aria-hidden="true"></i>
            </div>
            <a href="{{ route('doctors.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $patient->count() }}</h3>

              <p>Pateince</p>
            </div>
            <div class="icon">
                <i class="fas fa-hospital-user" aria-hidden="true"></i>

            </div>
            <a href="{{ route('patient.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3 style="color: white">{{ $user->count() }}</h3>

              <p style="color: white">User Management</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('dashboard.index') }}" style="color: white" class="small-box-footer">More info <i class="fas fa-arrow-circle-right" style="color: white"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{ $appointment->count() }}</h3>

              <p>Appointment</p>
            </div>
            <div class="icon">
           <i class="fas fa-calendar-alt    "></i>
            </div>
            <a href="{{ route('appointment.create') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->


@endsection
