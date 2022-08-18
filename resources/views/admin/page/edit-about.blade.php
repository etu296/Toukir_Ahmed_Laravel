@extends('admin.welcome')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit About</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit About</li>
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
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Achivements</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('about.update',$abouts->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">phone</label>
                    <input name="phone" value="{{$abouts->phone}}"  type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter phone number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Degree</label>
                    <input name="degree" value="{{$abouts->degree}}"   type="text" class="form-control" id="exampleInputPassword1" placeholder="enter Degree">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">age</label>
                    <input name="age" value="{{$abouts->age}}"   type="number" class="form-control" id="exampleInputPassword1" placeholder="entery your age">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">email</label>
                    <input name="email" value="{{$abouts->email}}"   type="email" class="form-control" id="exampleInputPassword1" placeholder="enter email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">description</label>
                    <input name="description" value="{{$abouts->description}}"   type="text" class="form-control" id="exampleInputPassword1" placeholder="enter description">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input name="image"  type="file" class="form-control" id="exampleInputPassword1" placeholder="enter image">
                    <img src="{{url('/storage/'.$abouts->image)}}" width="100px;" alt="please upload image">                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update</button>

                  <a href="{{route('about-list')}}" class="btn btn-danger" >Back</a>         

                </div>
              </form>
            </div>



@endsection