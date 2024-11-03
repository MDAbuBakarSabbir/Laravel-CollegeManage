@extends('layouts.dashboard')

@section('content')
<x-breadcum title="Department List"></x-breadcum>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Teachers List</h4>
                <a href="{{route('teachers.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add</a>
            </div>
            <div class="card-body">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                      <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Department</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($teachers as $teacher)
                        <tr>
                            <td>#</td>
                          <td>
                            <div class="d-flex align-items-center">
                                @if ($teacher->image == 'default.jpg')
                                <img src="{{asset('dashboard/images/teachers/default/default.jpg')}}" alt="" style="width: 45px; height: 45px" class="rounded-circle">
                                @endif
                                <img src="{{asset('dashboard/images/teachers/uploads')}}/{{$teacher->image}}" alt="" style="width: 45px; height: 45px" class="rounded-circle">
                            </div>
                          </td>
                          <td>
                            <p class="fw-normal mb-1">{{$teacher->title}}</p>
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
                            <td colspan="9" class="text-danger text-center">Teachers List not found!!</td>
                        </tr>
                        @endforelse
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>


@endsection


@section('script')
    @if (session('image_update'))
        <script>
            Toastify({
            text: "{{ session('image_update') }}",
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
            },
            onClick: function(){} // Callback after click
            }).showToast();
        </script>
    @endif
@endsection
