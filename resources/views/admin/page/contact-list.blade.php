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
                    <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td><span class="badge bg-danger">55%</span></td>
                      <td><span class="badge bg-danger">55%</span></td>
                      <td><span class="badge bg-danger">55%</span></td>

                    </tr>
                  </tbody>
                </table>
              </div>
</div>   
@endsection