@extends('layouts.dashboard')

@section('content')
<x-breadcum title="Notice"></x-breadcum>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('notice.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('') --}}
                        <div class="form-group my-2">
                          <label for="exampleInputPassword1">Name</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group my-2">
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
                        <div class="row mb-3">
                            <img src="" alt="" id="noticeerimg" style="width: 100%; height:300px; object-fit:contain;">
                        </div>
                        <div class="form-group my-2">
                            <label  for="example">Notice File</label>
                          <input type="file" class="form-control" onchange="document.querySelector('#noticeerimg').src= window.URL.createObjectURL(this.files[0])">
                        </div>
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>

@endsection
