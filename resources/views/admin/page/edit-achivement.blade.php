@extends('admin.welcome')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Achivement</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Achivement </li>
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
              <form action="{{route('acivement.update',$achivements->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" value="{{$achivements->name}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name of the event">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <input name="category" value="{{$achivements->category}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="enter category">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Position</label>
                    <input name="position" value="{{$achivements->position}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="entery your position">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Year</label>
                    <input name="year" value="{{$achivements->year}}" type="year" class="form-control" id="exampleInputPassword1" placeholder="enter year">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input name="image"  type="file" class="form-control" id="exampleInputPassword1" placeholder="enter image">
                    <img src="{{url('/storage/'.$achivements->image)}}" width="100px;" alt="please upload image">                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update</button>

                  <a href="{{route('achivement-list')}}" class="btn btn-danger" >Back</a>         

                </div>
              </form>
            </div>



@endsection