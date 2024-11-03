@extends('layouts.dashboard')
@section('content')
<x-breadcum title="Teacher Details"></x-breadcum>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="col md-3">
                        <img src="{{asset('dashboard/images/teachers/default/default.png')}}" alt="" id="profilerimg" style="width: 100%; height:300px; object-fit:contain;">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Profile Image</label>
                        <input type="file" onchange="document.querySelector('#profilerimg').src= window.URL.createObjectURL(this.files[0]) " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image">
                    </div>
                    <div class="dropzone-previews mt-3" id="file-previews"></div>
                </div>
            </div>
        </div>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            @csrf
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="mb-2 col-md-4">
                                        <label for="inputEmail4" class="form-label">Father's Name</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Father's Name">
                                    </div>
                                    <div class="mb-2 col-md-4">
                                        <label for="inputEmail4" class="form-label">Mother's Name</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Mother's Name">
                                    </div>
                                    <div class="mb-2 col-md-4">
                                        <label for="inputPassword4" class="form-label">Guardian's Name</label>
                                        <input type="text" class="form-control" id="inputPassword4" placeholder="Guardian's Phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-md-4">
                                        <label for="inputEmail4" class="form-label">Father's Phone</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Father's Phone">
                                    </div>
                                    <div class="mb-2 col-md-4">
                                        <label for="inputEmail4" class="form-label">Mother's Phone</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Mother's Phone">
                                    </div>
                                    <div class="mb-2 col-md-4">
                                        <label for="inputPassword4" class="form-label">Guardian's Phone</label>
                                        <input type="text" class="form-control" id="inputPassword4" placeholder="Guardian's Phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-md-4">
                                        <label for="inputEmail4" class="form-label">Student Alternative Number</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Student Alternative Number">
                                    </div>
                                    <div class="mb-2 col-md-4">
                                        <label for="inputEmail4" class="form-label">National ID No.</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="National ID No.">
                                    </div>
                                    <div class="mb-2 col-md-4">
                                        <label for="inputPassword4" class="form-label">Birth Reg ID No.</label>
                                        <input type="text" class="form-control" id="inputPassword4" placeholder="Birth Reg ID No.">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-md-3">
                                        <label for="inputEmail4" class="form-label">Blood Group</label>
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Choose Blood Group</option>
                                            <option value="1">A+</option>
                                            <option value="2">A-</option>
                                            <option value="3">B+</option>
                                            <option value="3">B-</option>
                                            <option value="3">AB+</option>
                                            <option value="3">AB-</option>
                                            <option value="3">O+</option>
                                            <option value="3">O-</option>
                                        </select>
                                    </div>
                                    <div class="mb-2 col-md-3">
                                        <label for="inputEmail4" class="form-label">Date Of Birth</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Date Of Birth">
                                    </div>
                                    <div class="mb-2 col-md-3">
                                        <label for="inputPassword4" class="form-label">Religion</label>
                                        <input type="text" class="form-control" id="inputPassword4" placeholder="Religion">
                                    </div>
                                    <div class="mb-2 col-md-3">
                                        <label for="inputPassword4" class="form-label">Gender</label>
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Choose Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="mb-2 col-md-6">
                                                <label for="inputEmail4" class="form-label">Nationality</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nationality">
                                            </div>
                                            <div class="mb-2 col-md-6">
                                                <label for="inputEmail4" class="form-label">Present Division</label>
                                                <select class="form-select" id="inputGroupSelect01">
                                                    <option selected>Choose Division</option>
                                                    <option value="1">Dhaka</option>
                                                    <option value="2">Chittagong</option>
                                                    <option value="3">Khulna</option>
                                                    <option value="3">Mymensingh</option>
                                                    <option value="3">Rajshahi</option>
                                                    <option value="3">Rangpur</option>
                                                    <option value="3">Sylhet</option>
                                                    <option value="3">Barisal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-2 col-md-6">
                                                <label for="inputPassword4" class="form-label">Present District</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Present District">
                                            </div>
                                            <div class="mb-2 col-md-6">
                                                <label for="inputPassword4" class="form-label">Present Upazila</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Present Upazila">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label for="inputPassword4" class="form-label">Present Address</label>
                                            <textarea class="form-control" id="example-textarea" rows="5" style="height: 110px;"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="mb-2 col-md-6">
                                                <label for="inputEmail4" class="form-label">Now Out Of Cuntry?</label>
                                                <select class="form-select" id="inputGroupSelect01">
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                            <div class="mb-2 col-md-6">
                                                <label for="inputEmail4" class="form-label">Present Division</label>
                                                <select class="form-select" id="inputGroupSelect01">
                                                    <option selected>Choose Division</option>
                                                    <option value="1">Dhaka</option>
                                                    <option value="2">Chittagong</option>
                                                    <option value="3">Khulna</option>
                                                    <option value="3">Mymensingh</option>
                                                    <option value="3">Rajshahi</option>
                                                    <option value="3">Rangpur</option>
                                                    <option value="3">Sylhet</option>
                                                    <option value="3">Barisal</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="mb-2 col-md-6">
                                                <label for="inputPassword4" class="form-label">Permanent District</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Permanent District">
                                            </div>
                                            <div class="mb-2 col-md-6">
                                                <label for="inputPassword4" class="form-label">Permanent Upazila</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Permanent Upazila">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label for="inputPassword4" class="form-label">Permanent Address</label>
                                            <textarea class="form-control" id="example-textarea" rows="5" style="height: 110px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-2">
                                    <label for="inputEmail4" class="form-label">Occupation</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="mb-2">
                                    <label for="inputPassword4" class="form-label">Extracurricular Activities</label>
                                    <textarea class="form-control" id="example-textarea" rows="5" style="height: 150px;"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6">
                                    <label for="inputAddress" class="form-label">Know About Us</label>
                                    <select id="inputState" class="form-select">
                                        <option>Choose</option>
                                        <option>Facebook</option>
                                        <option>Advertisement</option>
                                        <option>Online Searching</option>
                                        <option>Media</option>
                                        <option>DPC Student</option>
                                        <option>DPC Employee</option>
                                    </select>
                                </div>
                                <div class="mb-2 col-md-6">
                                    <label for="inputAddress" class="form-label">Which club would you like to join?</label>
                                    <select id="inputState" class="form-select">
                                        <option>Choose</option>
                                        <option>DPC Computer Club</option>
                                        <option>DPC Civil Club</option>
                                        <option>DPC Textile Club</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6">
                                    <label for="inputState" class="form-label">Tribal / Indigenous community?</label>
                                    <select id="inputState" class="form-select">
                                        <option>Choose</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="mb-2 col-md-6">
                                    <label for="inputState" class="form-label">Disability / Physical or cognitive Impairment?</label>
                                    <select id="inputState" class="form-select">
                                        <option>Choose</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-md-6">
                                    <label for="inputState" class="form-label">Select Last Education Degree</label>
                                    <select id="inputState" class="form-select">
                                        <option>Choose</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="mb-2 col-md-6">
                                    <label for="inputState" class="form-label">Select Education Board</label>
                                    <select id="inputState" class="form-select">
                                        <option>Choose</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="inputEmail4" class="form-label">Occupation</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-md-3">
                                        <label for="inputEmail4" class="form-label">Group Name</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Group Name">
                                    </div>
                                    <div class="mb-2 col-md-3">
                                        <label for="inputEmail4" class="form-label">Year of Passing</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Year of Passing">
                                    </div>
                                    <div class="mb-2 col-md-3">
                                        <label for="inputEmail4" class="form-label">Select Status</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Select Status">
                                    </div>
                                    <div class="mb-2 col-md-3">
                                        <label for="inputEmail4" class="form-label">CPA/CGPA</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="CPA/CGPA">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

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
