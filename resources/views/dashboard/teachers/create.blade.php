@extends('layouts.dashboard')

@section('content')
<x-breadcum title="Add Teacher"></x-breadcum>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h4>Add New Teacher</h4>
            </div>
            <div class="card-body">
                <form role="form" action="{{route('teachers.store')}}" method="POST">
                    @csrf
                    {{-- @method('PATCH') --}}
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Full Name" name="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4">Phone</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Phone" name="phone">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPassword4">Email</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Email" name="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                        @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputState">Department</label>
                            <select id="inputState" class="form-control" name="department_id">
                                <option selected>Select Dipartment</option>
                                @forelse ($departments as $department)
                                <option value="{{department->id}}">{{department->title}}</option>
                                @empty
                                    <td colspan='11' class="text-danger text-center" >No Data Found</td>
                                @endforelse
                            </select>
                            @error('department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
