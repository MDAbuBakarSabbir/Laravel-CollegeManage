@extends('layouts.dashboard')

@section('content')
<x-breadcum title="Computer Department"></x-breadcum>
<div class="row">
    <div class="col">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Semester</h3>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{route('students.computer')}}" class="btn btn-secondary">1-2</a>
                        <a href="{{route('students.sem3_4')}}" class="btn btn-secondary">3-4</a>
                        <a href="{{route('students.sem5_6')}}" class="btn btn-secondary">5-6</a>
                        <a href="{{route('students.sem7_8')}}" class="btn btn-secondary">7-8</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>5th Semester Students List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse ($users as $user) --}}
                            <tr>
                                <th scope="row">#</th>
                                <td>s</td>
                                <td>s</td>
                                <td>s</td>
                                {{-- <td>{{$user->department}}</td> --}}
                                {{-- <td>{{$user->address}}</td> --}}
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        {{-- <label class="form-check-label" for="flexSwitchCheckDefault">{{$user->status}} </label> --}}
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                                <td>
                                    <a href="{{route('students.show')}}" class="text-success"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                            {{-- @empty --}}
                            <tr>
                                <td colspan='3' class="text-danger text-center" >No Data Found</td>
                            </tr>
                            {{-- @endforelse --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>6th Semester Students List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse ($users as $user) --}}
                            <tr>
                                <th scope="row">#</th>
                                <td>s</td>
                                <td>s</td>
                                <td>s</td>
                                {{-- <td>{{$user->department}}</td> --}}
                                {{-- <td>{{$user->address}}</td> --}}
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        {{-- <label class="form-check-label" for="flexSwitchCheckDefault">{{$user->status}} </label> --}}
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                                <td>
                                    <a href="{{route('students.show')}}" class="text-success"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                            {{-- @empty --}}
                            <tr>
                                <td colspan='3' class="text-danger text-center" >No Data Found</td>
                            </tr>
                            {{-- @endforelse --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
