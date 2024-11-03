@extends('layouts.dashboard')

@section('content')
<x-breadcum title="Add Department"></x-breadcum>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h4>Add New Department</h4>
            </div>
            <div class="card-body">
                <form role="form" action="{{route('departents.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PATCH') --}}
                    <div class="form-row">
                        <div class="row mb-3">
                            <img id="departmenterimage" src="{{asset('dashboard/images/departments/default/default.jpg')}}" alt="" style="width: 100%; height:300px; object-fit:contain;">
                        </div>
                        <div class="form-group">
                            <div class="row mb-2">
                                <label for="inputPassword5" class="col-sm-3 col-form-label">Image</label>
                                <input onchange="document.querySelector('#departmenterimage').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="inputPassword5"  name="image">
                                @error('image')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group my-2">
                            <label for="inputEmail4">Title</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Department Title" name="title">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group my-2">
                            <label for="inputEmail4">Description</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Description" name="description">
                            @error('name')
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
