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
            <a href="#" class="text-muted">Show all notifications</a>
        </div>
    </div>
</li>

<li class="nav-item dropdown">
    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
        <i class="align-middle" data-feather="settings"></i>
    </a>

    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
        <img src="./vesctor.png" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
        <span class="text-dark">admin</span>
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

<!-- Tasks section -->
<div class="col-12 col-lg-6 d-flex">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h5 style="color: #0A77B1;" class="card-title mb-0">Tasks</h5>
        </div>
        <div class="card-body d-flex">
            <div class="align-self-center w-100">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Time</th>
                                <th>Description</th>
                                <th>#</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sarah</td>
                                <td>3:00 pm</td>
                                <td>Indus</td>
                                <td><span style="background-color:#3A55A4;" class="btn text-white ">done</span></td>
                                <td><span class="btn ">x</span></td>
                            </tr>
                            <tr>
                                <td>Sarah</td>
                                <td>3:00 pm</td>
                                <td>Indus</td>
                                <td><span style="background-color:#3A55A4;" class="btn text-white ">done</span></td>
                                <td><span class="btn ">x</span></td>
                            </tr>
                            <tr>
                                <td>Sarah</td>
                                <td>3:00 pm</td>
                                <td>Indus</td>
                                <td><span style="background-color:#3A55A4;" class="btn text-white ">done</span></td>
                                <td><span class="btn ">x</span></td>
                            </tr>
                            <tr>
                                <td>Sarah</td>
                                <td>3:00 pm</td>
                                <td>Indus</td>
                                <td><span style="background-color:#3A55A4;" class="btn text-white ">done</span></td>
                                <td><span class="btn ">x</span></td>
                            </tr>
                            <tr>
                                <td>Sarah</td>
                                <td>3:00 pm</td>
                                <td>Indus</td>
                                <td><span style="background-color:#3A55A4;" class="btn text-white ">done</span></td>
                                <td><span class="btn ">x</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>







            <div class="col-12 col-md-6 d-flex order-2 order-xxl-3">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 style="color: #0A77B1;" class="card-title mb-0">To do list</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">


                            <form>
                                <div class="mb-3">
                                    <label class="form-label">task date</label>
                                    <input class="form-control form-control-lg" type="text" name="hospitalName"
                                        placeholder="Enter task" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">task time</label>
                                    <input class="form-control form-control-lg" type="text" name="hospitalAddress"
                                        placeholder="Enter task time" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">more</label>
                                    <input class="form-control form-control-lg" type="text" name="hospitalContact"
                                        placeholder="Enter description" />
                                </div>

                                <div class="text-center mt-3">
                                    <a href="index.html" style="background-color:#3A55A4;"
                                        class="btn btn-lg text-white ">Add Task</a>
                                    <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                                </div>
                            </form>


                            <div class="col-12 col-md-12  d-flex order-1 order-xxl-1">
                                <div class="card flex-fill">
                                    <div class="card-header">

                                        <h5 style="color: #0A77B1;" class="card-title mb-0">Calendar</h5>
                                    </div>
                                    <div class="card-body d-flex">
                                        <div class="align-self-center w-100">
                                            <div class="chart">
                                                <div style="color: red;" id="datetimepicker-dashboard"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>






    </div>
    </div>



    @endsection