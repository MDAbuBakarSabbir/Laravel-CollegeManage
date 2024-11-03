@extends('layouts.dashboard')

@section('content')
<x-breadcum title="Add Admin"></x-breadcum>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h4>Add Admin</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.store')}}" method="POST">
                    <div class="form-group">
                      <label for="exampleInputtext1">Name</label>
                      <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
                      <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputtext1">Address</label>
                      <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group my-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>


@endsection
