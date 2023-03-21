@extends("hospital.layout")
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
            <div class="col-12 col-lg-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <table>
                            <tr>
                                <h4 style="color: #0A77B1;" class=" mb-0">vaccines</h4>

                                <div class=" text-end">

                                    <a href="patientsmore" style=" mt-0 color:#3A55A4;margin-left:9px;"
                                        class="btn btn-lg m-t5">


                                        add</a>


                                    <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->

                            </tr>
                            <table>
                    </div>

                </div>
                <form method="POST" action="/addVaccineFunc" enctype="multipart-formdata">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Vaccine Type</label>
                                            <input class="form-control form-control-lg" type="text" name="vaccineType"
                                                placeholder="Enter name" />
                                                @error('vaccineType')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Quantity</label>
                                            <input class="form-control form-control-lg" type="text" name="VaccineQuantity"
                                                placeholder="Enter quantity" />
                                                @error('VaccineQuantity')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <input class="form-control form-control-lg" type="hidden" name="hospitalId" value="        @if(session('email'))
                                               {{session('id')}}
                                           @endif"
                                                placeholder="Enter your email" />
                               
                                


                                        @if(session('message'))
                                        <div class="alert alert-success">
                                            {{session('message')}}
                                        </div>

                                        @endif


                                        <div class="text-center mt-3">
                                            <!-- <button type="submit"style="background-color:#3A55A4;" class="btn-lg text-white">Sign up<button> -->

                                            <button type="submit" class="btn btn-lg btn-primary">add</button>
                                        </div>
                                    </form>
            </div>
        </div>



    </div>


    </div>
</main>
@endsection