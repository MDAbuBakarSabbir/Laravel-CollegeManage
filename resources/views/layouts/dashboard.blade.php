
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('dashboard')}}/assets/images/favicon.ico">

    <link href="{{asset('dashboard')}}/assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css"/>

    <!-- App css -->
    <link href="{{asset('dashboard')}}/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="{{asset('dashboard')}}/assets/js/config.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <div class="main-menu">
            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a class='logo-light' href='{{route('home')}}'>
                    <img src="{{asset('dashboard')}}/assets/images/light-logo.png" alt="logo" class="logo-lg" height="28">
                    {{-- <img src="{{asset('dashboard')}}/assets/images/dpclogo.jpg" alt="logo" class="logo-lg" height="28"> --}}
                    <img src="{{asset('dashboard')}}/assets/images/Dpc.png" alt="small logo" class="logo-sm" height="28">
                </a>

                <!-- Brand Logo Dark -->
                <a class='logo-dark' href='{{route('home')}}'>
                    <img src="{{asset('dashboard')}}/assets/images/dpclogo-black.png" alt="dark logo" class="logo-lg" height="28">
                    <img src="{{asset('dashboard')}}/assets/images/Dpc.png" alt="small logo" class="logo-sm" height="28">
                </a>
            </div>

            <!--- Menu -->
            <div data-simplebar>
                <ul class="app-menu">

                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect waves-light' href='{{route('home')}}'>
                            <span class="menu-icon"><i class="fa-solid fa-house"></i></span>
                            <span class="menu-text"> Dashboards </span>
                            {{-- <span class="badge bg-primary rounded ms-auto">01</span> --}}
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class='menu-link waves-effect waves-light' href='{{route('departents.index')}}'>
                            <span class="menu-icon"><i class="fa-solid fa-graduation-cap"></i></span>
                            <span class="menu-text"> Departments </span>
                        </a>
                    </li>

                    {{-- <li class="menu-title">Custom</li> --}}

                    {{-- <li class="menu-item">
                        <a class='menu-link waves-effect waves-light' href='{{ route('teachers.index') }}'>
                            <span class="menu-icon"><i class="fa-solid fa-user-tie"></i></span>
                            <span class="menu-text"> Teachers </span>
                        </a>
                    </li> --}}

                    <li class="menu-item">
                        <a href="#menuTeachers" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="fa-solid fa-user-tie"></i></span>
                            <span class="menu-text"> Teachers </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuTeachers">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='{{route('teachers.create')}}'>
                                        <span class="menu-text">Add Teachers</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='{{route('teachers.index')}}'>
                                        <span class="menu-text">Show Teachers</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a class='menu-link waves-effect waves-light' href='{{route('students.create')}}'>
                            <span class="menu-icon"><i class="fa-solid fa-user-plus"></i></span>
                            <span class="menu-text"> Add Student </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#menuStudents" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="fa-solid fa-user-graduate"></i></span>
                            <span class="menu-text"> All Students </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuStudents">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='{{route('students.computer')}}'>
                                        <span class="menu-text">Computer Depertment</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='{{route('students.civil')}}'>
                                        <span class="menu-text">Civil Depertment</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='{{route('students.electrical')}}'>
                                        <span class="menu-text">Electrical Depertment</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='{{route('students.textile')}}'>
                                        <span class="menu-text">Textile Depertment</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='{{route('students.mechanical')}}'>
                                        <span class="menu-text">Mechanical Depertment</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='{{route('students.nursing')}}'>
                                        <span class="menu-text">Nursing Depertment</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a href="#menuEmployee" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="fa-solid fa-user"></i></span>
                            <span class="menu-text"> Employee </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuEmployee">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='{{route('employee.create')}}'>
                                        <span class="menu-text">Add Employee</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='{{route('employee.index')}}'>
                                        <span class="menu-text">Show Employee</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a class='menu-link waves-effect waves-light' href='{{route('notice.index')}}'>
                            <span class="menu-icon"><i class="fa-solid fa-file-lines"></i></i></span>
                            <span class="menu-text"> Notice </span>
                        </a>
                    </li>

                    {{-- <li class="menu-title">Components</li>

                    <li class="menu-item">
                        <a href="#menuComponentsui" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-cookie"></i></span>
                            <span class="menu-text"> UI Elements </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuComponentsui">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-alerts.html'>
                                        <span class="menu-text">Alerts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-buttons.html'>
                                        <span class="menu-text">Buttons</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-cards.html'>
                                        <span class="menu-text">Cards</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-carousel.html'>
                                        <span class="menu-text">Carousel</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-dropdowns.html'>
                                        <span class="menu-text">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-video.html'>
                                        <span class="menu-text">Embed Video</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-general.html'>
                                        <span class="menu-text">General UI</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-grid.html'>
                                        <span class="menu-text">Grid</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-images.html'>
                                        <span class="menu-text">Images</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-list-group.html'>
                                        <span class="menu-text">List Group</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-modals.html'>
                                        <span class="menu-text">Modals</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-offcanvas.html'>
                                        <span class="menu-text">Offcanvas</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-placeholders.html'>
                                        <span class="menu-text">Placeholders</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-progress.html'>
                                        <span class="menu-text">Progress</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-spinners.html'>
                                        <span class="menu-text">Spinners</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-tabs-accordions.html'>
                                        <span class="menu-text">Tabs & Accordions</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-tooltips-popovers.html'>
                                        <span class="menu-text">Tooltips & Popovers</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='ui-typography.html'>
                                        <span class="menu-text">Typography</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuExtendedui" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-briefcase-alt-2"></i></span>
                            <span class="menu-text"> Components </span>
                            <span class="badge bg-info ms-auto">Hot</span>
                        </a>
                        <div class="collapse" id="menuExtendedui">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='components-range-slider.html'>
                                        <span class="menu-text">Range Slider</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='components-sweet-alert.html'>
                                        <span class="menu-text">Sweet Alert</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='components-loading-buttons.html'>
                                        <span class="menu-text">Loading Buttons</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuIcons" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-aperture"></i></span>
                            <span class="menu-text"> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuIcons">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='icons-feather.html'>
                                        <span class="menu-text">Feather Icons</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='icons-mdi.html'>
                                        <span class="menu-text">Material Design Icons</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='icons-dripicons.html'>
                                        <span class="menu-text">Dripicons</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuForms" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bxs-eraser"></i></span>
                            <span class="menu-text"> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuForms">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='forms-elements.html'>
                                        <span class="menu-text">General Elements</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='forms-advanced.html'>
                                        <span class="menu-text">Advanced</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='forms-validation.html'>
                                        <span class="menu-text">Validation</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='forms-quilljs.html'>
                                        <span class="menu-text">Editor</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='forms-file-uploads.html'>
                                        <span class="menu-text">File Uploads</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuTables" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-table"></i></span>
                            <span class="menu-text"> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuTables">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='tables-basic.html'>
                                        <span class="menu-text">Basic Tables</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='tables-datatables.html'>
                                        <span class="menu-text">Data Tables</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuCharts" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-doughnut-chart"></i></span>
                            <span class="menu-text"> Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuCharts">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='charts-apex.html'>
                                        <span class="menu-text">Apex Charts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='charts-morris.html'>
                                        <span class="menu-text">Morris Charts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='charts-chartjs.html'>
                                        <span class="menu-text">Chartjs Charts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuMaps" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-map-alt"></i></span>
                            <span class="menu-text"> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuMaps">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='maps-google.html'>
                                        <span class="menu-text">Google Maps</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='maps-vector.html'>
                                        <span class="menu-text">Vector Maps</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuMultilevel" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-share-alt"></i></span>
                            <span class="menu-text"> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuMultilevel">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#menuMultilevel2" data-bs-toggle="collapse"
                                        class="menu-link waves-effect waves-light">
                                        <span class="menu-text"> Second Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="menuMultilevel2">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="javascript: void(0);" class="menu-link">
                                                    <span class="menu-text">Item 1</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript: void(0);" class="menu-link">
                                                    <span class="menu-text">Item 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="menu-item">
                                    <a href="#menuMultilevel3" data-bs-toggle="collapse"
                                        class="menu-link waves-effect waves-light">
                                        <span class="menu-text">Third Level</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="menuMultilevel3">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="javascript: void(0);" class="menu-link">
                                                    <span class="menu-text">Item 1</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#menuMultilevel4" data-bs-toggle="collapse"
                                                    class="menu-link waves-effect waves-light">
                                                    <span class="menu-text">Item 2</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="menuMultilevel4">
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="javascript: void(0);" class="menu-link">
                                                                <span class="menu-text">Item 1</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="javascript: void(0);" class="menu-link">
                                                                <span class="menu-text">Item 2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>

        <div class="page-content">

            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

                        <div class="logo-box">

                            <a class='logo-light' href='index.html'>
                                <img src="{{asset('dashboard')}}/assets/images/light-logo.png" alt="logo" class="logo-lg" height="22">
                                <img src="{{asset('dashboard')}}/assets/images/Dpc.png" alt="small logo" class="logo-sm" height="22">
                            </a>


                            <a class='logo-dark' href='index.html'>
                                <img src="{{asset('dashboard')}}/assets/images/dpclogo-black.png" alt="dark logo" class="logo-lg" height="22">
                                <img src="{{asset('dashboard')}}/assets/images/Dpc.png" alt="small logo" class="logo-sm" height="22">
                            </a>
                        </div>

                        <button class="button-toggle-menu">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-4">

                        <li class="d-none d-md-inline-block">
                            <a class="nav-link" href="#" data-bs-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen font-size-24"></i>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-magnify font-size-24"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-end dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell font-size-24"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">99+</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 font-size-16 fw-semibold"> Notification</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-1" style="max-height: 300px;" data-simplebar>

                                    <h5 class="text-muted font-size-13 fw-normal mt-2">Today</h5>
                                    <!-- item-->

                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="text-center">
                                        <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="nav-link" id="theme-mode">
                            <i class="bx bx-moon font-size-24"></i>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                @if(Auth::user()->image == 'default.png')
                                <img src="{{asset('dashboard/images/teachers/default')}}/{{Auth::user()->image}}" alt="user-image" class="rounded-circle">
                                @else
                                    <img src="{{asset('dashboard/images/teachers/uploads')}}/{{Auth::user()->image}}" alt="user-image" class="rounded-circle">
                                @endif
                                <span class="ms-1 d-none d-md-inline-block">{{Auth::user()->name}}<i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">

                                <a href="{{route('myaccount.index')}}" class="dropdown-item notify-item">
                                    <i class="fa-solid fa-user"></i>
                                    <span>My Account</span>
                                </a>


                                <a href="{{route('settings.index')}}" class="dropdown-item notify-item">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Settings</span>
                                </a>


                                <a class='dropdown-item notify-item' href='{{route('admin.add')}}'>
                                    <i class="fa-solid fa-user-plus"></i>
                                    <span>Add Admin</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button class='dropdown-item notify-item' href='pages-login.html'>
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <span>Logout</span>
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="px-3">
                <div class="container-fluid">

                    <!-- end page title -->

                    @yield('content')

                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div><script>document.write(new Date().getFullYear())</script> © Desh Polytechnic College</div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
                                <p class="mb-0">Developed by <a href="https://sabatech.com" target="_blank">SABALON TECHNOLOGIES</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('dashboard')}}/assets/js/vendor.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/app.js"></script>
    <script src="{{asset('dashboard')}}/assets/libs/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/libs/morris.js/morris.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/libs/raphael/raphael.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/pages/dashboard.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    @yield('script')

</body>
</html>
