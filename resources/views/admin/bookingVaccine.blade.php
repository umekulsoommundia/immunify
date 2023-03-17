@extends("admin.layout")
@section("main")
<form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                        <button class="btn btn-primary"  type="button">
                        <div  data-feather="search">
</div>
                                </button>
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                
                            </div>
                        </div>
                    </form>

<li class="nav-item dropdown">
    <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
        <div class="position-relative">
            <i class="align-middle" data-feather="bell"> f</i>
            <span class="indicator">4</span>
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

<li class="nav-item dropdown">
    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
        <i class="align-middle" data-feather="settings"></i>
    </a>

    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
        <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
        <span class="text-dark">Admin</span>
    </a>
    <div class="dropdown-menu dropdown-menu-end">
        <a class="dropdown-item" href="profile"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i>
            Settings</a>

        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Log out</a>
    </div>
</li>
</ul>
</div>
</nav>

<main class="content">
    <div class="container-fluid p-0">



        <div class="row">
            <div class="col-8 col-lg-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <table>
                            <tr>
                                <h4 style="color: #0A77B1;" class=" mb-0">book vaccine</h4>

                            </tr>
                            <table>
                    </div>

                </div>

                   <div class="col-md-6 col-lg-12 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <div class="text-center mt-4">
                                        <h1 style="color:#203C71;  font-size:30px;" class="h2">Join us ,Let's Immunify
                                        </h1>
                                        <p class="lead">You will be notified if Your request get accepted</p>
                                    </div>
                                    <div class="text-center">
                                        <img src="../logoBluePng.png" alt="logo" class="img-fluid" width="132"
                                            height="132" />
                                    </div>
                                    <form method="POST" action="/hospitalSignupPost" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Child Name</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="name" placeholder="Enter your hospital name" />
                                                    @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Date Of Birth</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="password" placeholder="Enter your password" />
                                                    @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Location</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="location" placeholder="Enter your location" />
                                                    @error('location')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                           
                                                <div class="mb-3">
                                                    <label class="form-label">Contact No</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="contactNumber" placeholder="Enter contact number" />
                                                    @error('contactNumber')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Vaccine </label>
                                                    <input class="form-control form-control-lg" type="file"
                                                        name="certificate" placeholder="" />
                                                    @error('certificate')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>


                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control form-control-lg" type="email"
                                                        name="email" placeholder="Enter your Email" />
                                                    @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Confirm Password</label>
                                                    <input class="form-control form-control-lg" type="password"
                                                        name="confirmPassword" placeholder="confirm password" />
                                                    @error('confirmPassword')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">City</label>
                                                    <select class="form-control form-control-lg" name="city">
                                                        <option value="">Select City</option>
                                                        <option value="karachi">Karachi</option>
                                                        <option value="lahore">Lahore</option>
                                                        <option value="islamabad">Islamabad</option>
                                                        <option value="multan">Multan</option>
                                                        <option value="quetta">Quetta</option>
                                                    </select>
                                                    @error('city')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            

                                                <div class="mb-3">
                                                    <label class="form-label">Hospital Timing</label>
                                                    <select class="form-control form-control-lg" name="Timing">
                                                        <option value="">Select Hospital Timing</option>
                                                        <option value="12:00 am to 9:00 am">12:00 am to 9:00 am</option>
                                                        <option value="9:00 am to 6:00 pm">9:00 am to 6:00 pm</option>
                                                        <option value="6:00 pm to 3:00 am">6:00 pm to 3:00 am</option>
                                                    </select>
                                                    @error('Timing')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                              

                                                <div class="mb-3">
                                                    <label class="form-label">Hospital Images</label>
                                                    <input class="form-control form-control-lg" type="file" 
                                                        name="hospitalImage" placeholder="Enter hospital Images" />
                                                    @error('hospitalImage')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>



                                            </div>
                                        </div>

                                        @if(session('message'))
                                        <div class="alert alert-success">
                                            {{session('message')}}
                                        </div>
                                        @endif

                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Register</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
            </div>
        </div>



    </div>


    </div>
</main>
@endsection