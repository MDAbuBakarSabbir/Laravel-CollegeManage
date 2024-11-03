@extends('layouts.dashboard')

@section('content')
<x-breadcum title="Department List"></x-breadcum>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Institute Department List</h4>
                <a href="{{route('departents.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add</a>
            </div>
            <div class="card-body">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                      <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($departments as $department)
                        <tr>
                            <td>#</td>
                          <td>
                            <div class="d-flex align-items-center">
                                <img src="{{asset('dashboard/images/departments')}}/{{$department->image}}" alt="" style="width: 45px; height: 45px" class="rounded-circle">
                            </div>
                          </td>
                          <td>
                            <p class="fw-normal mb-1">{{$department->title}}</p>
                          </td>
                          <td>
                            <form id="abubokorkharap" action="" method="POST">
                                @csrf
                            <div class="form-check form-switch">
                                <input onchange="document.querySelector('#abubokorkharap').submit()" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            </div>
                            </form>
                          </td>
                          <td>
                            <a href="" class="btn btn-link btn-sm btn-rounded text-info">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <a href="" class="btn btn-link btn-sm btn-rounded text-danger">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>
                          </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-danger text-center">Department not found!!</td>
                        </tr>
                        @endforelse
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>


@endsection
