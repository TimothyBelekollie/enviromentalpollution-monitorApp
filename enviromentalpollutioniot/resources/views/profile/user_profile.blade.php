@extends('master')
@section('dashboard')
<div class="container-full">
    <!-- Content Header (Page header) -->	  
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Profile</h3>
                {{-- <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Extra</li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div> --}}
            </div>
            
        </div>
    </div>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-12 col-lg-7 col-xl-8">
            
            <div class="col-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">List of Users</h4>
                    <div class="box-controls pull-right">
                      <div class=" lookup-right">
                        {{-- <h4 class="box-title">List of Users</h4> --}}
                        <a href="{{route('add.user')}}" class="btn btn-primary">Add User</a>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            
                            <th>Action</th>
                            
                          </tr>
                          @foreach ($data as $d)
                         
                          <tr>
                            <td><a href="javascript:void(0)">{{$d->name}}</a></td>
                            <td>{{$d->email}}</td>
                            <td><span class="text-muted"></i>{{$d->phone}}</span> </td>
                          
                            <td><a href="{{route('edit.user',$d->id)}}" class="badge badge-pill badge-secondary">Edit</a><a href="{{route('destroy.user',$d->id)}}" class="badge badge-pill badge-danger">Delete</a></td>
                          
                          </tr>
                          
                          @endforeach
                        </table>
                      </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
  
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->		

          <div class="col-12 col-lg-5 col-xl-4">
             <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-img bbsr-0 bber-0" style="background: url('../images/gallery/full/10.jpg') center center;" data-overlay="5">
                  <h3 class="widget-user-username text-white">{{Auth::user()->name}}</h3>
                  <h6 class="widget-user-desc text-white"></h6>
                </div>
                <div class="widget-user-image">
                  <img class="rounded-circle" src="../images/user3-128x128.jpg" alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="description-block">
                        <h5 class="description-header">Email</h5>
                        <span class="description-tet">{{Auth::user()->email}}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    {{-- <div class="col-sm-4 be-1 bs-1">
                      <div class="description-block">
                        <h5 class="description-header">phone</h5>
                        <span class="description-text">FOLLOWERS</span>
                      </div>
                      <!-- /.description-block -->
                    </div> --}}
                    <!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Phone</h5>
                        <span class="description-text">0783472153</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
              </div>
              

          </div>

      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

@endsection