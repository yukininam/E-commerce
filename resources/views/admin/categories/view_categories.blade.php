@extends('layouts.adminLayout.admin_design')
@section('content')


<div class="content-wrapper">
 <section class="content-header">
      <h1>
        View Categories
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class="fa fa-list"></i> View Categories</li>
      </ol>
    </section>
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
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">View Categoris</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Category ID</th>
                  <th>Category Name</th>
                  <th>Levels</th>
                  <th>Category URL</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($categories as $category)
                <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->parent_id }}</td>
                  <td>{{ $category->url }}</td>
                  <td>
                  <a href="{{ url('/admin/edit-category/'.$category->id) }}" class="btn btn-primary btn-mini">Edit</a> 
                    <a <?php /* id="delCat" href="{{ url('/admin/delete-category/'.$category->id) }}" */ ?> rel="{{ $category->id }}" rel1="delete-category" href="javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a></td>
                </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Category ID</th>
                  <th>Category Name</th>
                  <th>Levels</th>
                  <th>Category URL</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
	 </section>
 </div>



@endsection