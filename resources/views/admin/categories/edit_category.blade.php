@extends('layouts.adminLayout.admin_design')
@section('content')

<div class="content-wrapper">
 <section class="content-header">
      <h1>
        Add Category
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class="fa fa-list"></i> Add Category</li>
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
              <h3 class="box-title">Add Categories</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/edit-category/'.$categoryDetails->id) }}" method="POST"  name="add_category" id="add_category">{{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text" name="category_name" id="category_name" value="{{ $categoryDetails->name }}" class="form-control" placeholder="Category Name">
                </div>
                  <!-- select -->
                <div class="form-group">
                  <label>Category Level</label>
                  <select class="form-control" name="parent_id" id="parent_id">
                    <option value="0">Main Category</option>
                     @foreach($levels as $val)
                    <option value="{{ $val->id }}"@if($val->id==$categoryDetails->parent_id) selected @endif>{{ $val->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description ...">{{ $categoryDetails->description }}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">URL</label>
                  <input type="text" name="url" id="url"  value="{{ $categoryDetails->url }}" class="form-control" placeholder="url">
                </div>

                 <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" id="status" value="1" @if($categoryDetails->status == "1") checked @endif value="1"> Enable
                  </label>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Category</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</div>

@endsection