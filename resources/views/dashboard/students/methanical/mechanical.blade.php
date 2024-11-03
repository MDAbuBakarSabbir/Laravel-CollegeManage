@extends('layouts.dashboard')
@section('content')
<x-breadcum title="Mechanical Department"></x-breadcum>



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
