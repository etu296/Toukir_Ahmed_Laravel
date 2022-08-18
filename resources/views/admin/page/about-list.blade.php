@extends('admin.welcome')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">About</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About </li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Personal Information List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    
                    <tr>
                      <th style="width: 10px">#</th>
                      <th> Email</th>
                      <th style="width: 40px">Image</th>
                      <th> Degree</th>
                      <th> Phone</th>
                      <th> Age</th>
                      <th> Description</th>
                      <th> Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($abouts as $key=>$about)
                    <tr>
                      <th style="width: 10px">{{$key+1}}</th>
                      <th>{{$about->email}}</th>
                      <th style="width: 40px"><img src="{{url('/storage/'.$about->image)}}" width="100px;" alt="please upload image"></th>
                      <th>{{$about->degree}}</th>
                      <th>{{$about->phone}}</th>
                      <th>{{$about->age}}</th>
                      <th>{{$about->description}}</th>

                      <th>
                      <a href="{{route('about.edit',$about->id)}}" class="btn btn-warning" ><i class="fas fa-edit"></i></a>         
                      </th>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
</div>   

@endsection