@extends('admin.welcome')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Achivement</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Achivement </li>
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
                <h3 class="card-title">Add your Achivements</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('achivment.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name of the event">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <input name="category" type="text" class="form-control" id="exampleInputPassword1" placeholder="enter category">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Position</label>
                    <input name="position" type="text" class="form-control" id="exampleInputPassword1" placeholder="entery your position">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Year</label>
                    <input name="year" type="year" class="form-control" id="exampleInputPassword1" placeholder="enter year">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input name="image" type="file" class="form-control" id="exampleInputPassword1" placeholder="enter image">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

<div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Achivement List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    
                    <tr>
                      <th style="width: 10px">#</th>
                      <th> Name</th>
                      <th style="width: 40px">Image</th>
                      <th> Category</th>
                      <th> Position</th>
                      <th> Year</th>
                      <th> Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($achivments as $key=>$achivment)
                    <tr>
                      <th style="width: 10px">{{$key+1}}</th>
                      <th>{{$achivment->name}}</th>
                      <th style="width: 40px"><img src="{{url('/storage/'.$achivment->image)}}" width="100px;" alt="please upload image"></th>
                      <th>{{$achivment->category}}</th>
                      <th>{{$achivment->position}}</th>
                      <th>{{$achivment->year}}</th>
                      <th>
                      <a href="{{route('achivement.edit',$achivment->id)}}" class="btn btn-warning" ><i class="fas fa-edit"></i></a>         
                      <a href="{{route('acivement.delete',$achivment->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                      </th>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
</div>   

@endsection