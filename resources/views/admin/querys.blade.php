@extends('layouts.admin_layout.admin_layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Appointment</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Appointment</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
              
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Service</th> 
                 
                </tr>
                </thead>
                <tbody>
                @foreach($querys  as $query)  
                <tr>
                 
                  <td>{{ $query['name'] }}</td>
                  <td><a href="tel:{{ $query['phone'] }}">{{ $query['phone'] }}</a></td>
                  <td>{{ $query['service'] }}</td>
                  
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Service</th> 
                 
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection