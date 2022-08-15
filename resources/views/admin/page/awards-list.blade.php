@extends('admin.welcome')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Blogs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blogs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif

@if ($errors->any())
     <div class="alert alert-danger">
       <ul>
         @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
         </ul>
       </div>
@endif

<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Upload Image for Awards</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('blogs.store.awards')}}"  method="POST" enctype="multipart/form-data" >
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">Image for Awards*</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input  name="awards" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                    </div>
                  </div>
                  
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Blogs Images</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 40px">Image</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($awards as $key=>$award)
                    <tr>
                      <th style="width: 10px">{{$key+1}}</th>
                      <th style="width: 40px"><img src="{{url('/storage/'.$award->awards)}}" width="100px;" alt="please upload image"></th>
                      <th>
                        <a href="{{route('awards.delete',$award->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                      </th>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
</div>   





@endsection