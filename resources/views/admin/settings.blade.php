 @extends('layouts.adminLayout.admin_design')
@section('content')

<div class="content-wrapper">
 <section class="content-header">
      <h1>
        Update Password
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class="fa fa-cogs"></i> Update Password</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif   
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('/admin/update-pwd') }}" method="POST" name="password_validate" id="password_validate">{{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Current Password</label>
                  <input type="password" name="current_pwd" id="current_pwd" class="form-control" id="exampleInputEmail1" placeholder="Current Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">New Password</label>
                  <input type="password" name="new_pwd" id="new_pwd" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" name="confirm_pwd" id="confirm_pwd" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</div>

  @endsection