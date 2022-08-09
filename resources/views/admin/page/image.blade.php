@extends('admin.welcome')

@section('content')

@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif

<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Upload Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('BackgroundImage.store')}}"  method="POST" enctype="multipart/form-data" >
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input  name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    </div>
                  </div>
                  @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                        @endif
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
                <h3 class="card-title">Background Images</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image name</th>
                      <th style="width: 40px">Image</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($images as $key=>$image)
                    <tr>
                      <th style="width: 10px">{{$key+1}}</th>
                      <th>{{$image->image}}</th>
                      <th style="width: 40px"><img src="{{url('/storage/'.$image->image)}}" width="100px;" alt="please upload image"></th>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
</div>   
@endsection