@extends('layouts.dashboard')

@section('content')
<x-breadcum title="Edit Teachers Details"></x-breadcum>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4>Add New Teacher</h4>
            </div>
            <div class="card-body">
                <form action="{{route('teacher.create')}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Full Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Phone</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Phone ">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Department</label>
                            <select id="inputState" class="form-control">
                            <option selected>Select Dipartment</option>
                            <option>Computer</option>
                            <option>Civil</option>
                            <option>Electrical</option>
                            <option>Textile</option>
                            <option>Mechanical</option>
                            <option>Nursing</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
