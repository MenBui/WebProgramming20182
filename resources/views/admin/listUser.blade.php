@extends('admin.layout.layout')
@section('content')
<div id="content-wrapper">

          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('index') }}">Home</a>
              </li>
              <li class="breadcrumb-item active">User</li>
            </ol>
            <!-- DataTables Example -->

            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
              User</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>  
                        <th>Point</th> 
                        <th><a href="{{URL::route('addUser')}}">Thêm</a></th>                 
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>  
                        <td>{{ $user->user_point }}</td>  
                        <td>Chi Tiết</a></td>                
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

          </div>
@endsection()