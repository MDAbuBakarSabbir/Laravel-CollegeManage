@extends('layouts.dashboard')
@section('content')
<x-breadcum title="Settings"></x-breadcum>

<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h4>Change Password</h4>
            </div>
            <div class="card-body">
                <form role="form" action="" method="POST">
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Current Password</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">New Password </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
