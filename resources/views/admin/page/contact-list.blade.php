@extends('admin.welcome')

@section('content')

@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif

<div class="container-fluid">
        
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($contacts as $key=>$contact)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$contact->name}}</td>
                      <td>{{$contact->email}}</td>
                      <td>{{$contact->subject}}</td>
                      <td>{{$contact->message}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
</div>   
@endsection