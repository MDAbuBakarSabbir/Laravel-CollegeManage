@extends('layouts.dashboard')
@section('content')
<x-breadcum title="Account"></x-breadcum>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4>My Account</h4>
                </div>
                <div class="card-body">
                    <form role="form" action="{{route('myaccount.update')}}" method="POST">
                        <div class="row mb-3">
                            <img src="{{asset('dashboard/images/teachers/default/default.png')}}" alt="" id="profilerimg" style="width: 100%; height:300px; object-fit:contain;">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Profile Image</label>
                            <input type="file" onchange="document.querySelector('#profilerimg').src= window.URL.createObjectURL(this.files[0]) " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{Auth::user()->name}}">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputPassword1" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" value="{{Auth::user()->phone}}">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{Auth::user()->email}}">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address" value="{{Auth::user()->address}}">
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        Toastify({
        text: "This is a toast",
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
@endsection
{{-- Confirmation --}}
{{-- Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, Update!"
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: "Updateded!",
        text: "Your Data has been Updated.",
        icon: "success"
      });
    }
  }); --}}
