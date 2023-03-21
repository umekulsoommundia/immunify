@extends("admin.layout")
@section("main")



<li class="nav-item dropdown">
    <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
        <div class="position-relative">
            <i class="align-middle" data-feather="bell"></i>
            <span class="indicator">3</span>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
        <div class="dropdown-menu-header">
            4 New Notifications
        </div>
        <div class="list-group">
            <a href="#" class="list-group-item">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <i class="text-danger" data-feather="alert-circle"></i>
                    </div>
                    <div class="col-10">
                        <div class="text-dark">cancelled appointment</div>
                        <div class="text-muted small mt-1">Sarah Cancelled appointment 11-12-1 </div>
                        <div class="text-muted small mt-1">30m ago</div>
                    </div>
                </div>
            </a>

            <a href="#" class="list-group-item">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <i class="text-primary" data-feather="home"></i>
                    </div>
                    <div class="col-10">
                        <div class="text-dark">Login from sarah</div>
                        <div class="text-muted small mt-1">5h ago</div>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <i class="text-success" data-feather="user-plus"></i>
                    </div>
                    <div class="col-10">
                        <div class="text-dark">New Request</div>
                        <div class="text-muted small mt-1">Sarah sent an appointment request.
                        </div>
                        <div class="text-muted small mt-1">14h ago</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="dropdown-menu-footer">
            <a href="notification" class="text-muted">Show all notifications</a>
        </div>
    </div>
</li>

</ul>
</div>
</nav>
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Profile</h1>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-3 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profile Details</h5>
                    </div>
                    <div class="card-body text-center">
                        <img src="./vesctor.png" alt="Christina Mason"
                            class="img-fluid rounded-circle mb-2 profile-image" />
                        <h5 class="card-title mb-0">U K</h5>
                        <div class="text-muted mb-2">Graphic Designer | Web Developer</div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <h5 class="h6 card-title">Skills</h5>
                        <div class="d-flex justify-content-center flex-wrap">
                            <a href="#" class="badge bg-primary me-1 my-1">HTML</a>
                            <a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
                            <a href="#" class="badge bg-primary me-1 my-1">PHP</a>
                            <a href="#" class="badge bg-primary me-1 my-1">LARAVEL</a>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <h5 class="h6 card-title">About</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a
                                    href="#">Karachi, Pakistan</a></li>
                            <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <a
                                    href="#">Freelancing</a></li>
                        </ul>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <h5 class="h6 card-title">Social Media</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><a href="#">Twitter</a></li>
                            <li class="mb-1"><a href="#">Facebook</a></li>
                            <li class="mb-1"><a href="#">Instagram</a></li>
                            <li class="mb-1"><a href="#">LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">



                <div class="container">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Admin Profile</h5>
                        </div>
                        <div class="card-body d-flex">
                            <div class="align-self-center w-100">
                                <div class="table-responsive">
                                    <table class="table">
                                        <th>Profile Details</th>
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold">Username</td>
                                                <td class="text-end">Ume Kulsoom</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Email</td>
                                                <td class="text-end">
                                                    @if(session('email'))
                                               
                                                        {{session('email')}}
                                                
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">password</td>
                                                <td class="text-end">
                                                    @if(session('password'))
                                                  
                                                        {{session('password')}}
                                                  
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Phone</td>
                                                <td class="text-end">021438322</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Project Name</td>
                                                <td class="text-end">Immunify</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Beginning Date</td>
                                                <td class="text-end">12-1-23</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Ending Date</td>
                                                <td class="text-end">16-6-23</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                @endsection