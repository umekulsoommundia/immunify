@extends("admin.layout")
@section("main")


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
                            <a href="#" class="text-muted">Show all notifications</a>
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
                        <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                data-feather="user"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.html"><i class="align-middle me-1"
                                data-feather="settings"></i> Settings & Privacy</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i>
                            Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

            <div class="row">
                <div class="col-xl-6 col-xxl-5 d-flex">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">New Patients</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="truck"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">120</h1>
                                        <div class="mb-0">
                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Monthly Visitors</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">40</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Appointments</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">56</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Requests</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="shopping-cart"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">42</h1>
                                        <div class="mb-0">
                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-xxl-7">
                    <div class="card flex-fill w-100">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Analytics</h5>
                        </div>
                        <div class="card-body py-3">
                            <div class="chart chart-sm">
                                <canvas id="chartjs-dashboard-line"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 d-flex order-2 order-xxl-3">
                    <div class="card flex-fill w-100">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Requests</h5>
                        </div>
                        <div class="card-body d-flex">
                            <div class="align-self-center w-100">

                                <table class="table">
                                    <th>Patients On due</th>
                                    <tbody>

                                        <tr>
                                            <td>Sarah</td>
                                            <td class="text-end">3:00 pm</td>
                                            <td class="text-end">Indus</td>
                                            <td class="text-end">13-10-22</td>
                                            <td><span class="btn btn-success">Accept</span></td>
                                            <td><span class="btn ">x</span></td>
                                          
                                        </tr>
                                        <tr>
                                            <td>Sarah</td>
                                            <td class="text-end">3:00 pm</td>
                                            <td class="text-end">Indus</td>
                                            <td class="text-end">13-10-22</td>
                                            <td><span class="btn btn-success">Accept</span></td>
                                            <td><span class="btn ">x</span></td>
                                        </tr>
                                        <tr>
                                            <td>Sarah</td>
                                            <td class="text-end">3:00 pm</td>
                                            <td class="text-end">Indus</td>
                                            <td class="text-end">13-10-22</td>
                                            <td><span class="btn btn-success">Accept</span></td>
                                            <td><span class="btn ">x</span></td>
                                        </tr>
                                        <tr>
                                            <td>Sarah</td>
                                            <td class="text-end">3:00 pm</td>
                                            <td class="text-end">Indus</td>
                                            <td class="text-end">13-10-22</td>
                                            <td><span class="btn btn-success">Accept</span></td>
                                            <td><span class="btn ">x</span></td>
                                        </tr>
                                        <tr>
                                            <td>Sheryar</td>
                                            <td class="text-end">3:00 pm</td>
                                            <td class="text-end">Indus</td>
                                            <td class="text-end">13-10-22</td>
                                            <td><span class="btn btn-success">Accept</span></td>
                                            <td><span class="btn">x</span></td>
                                        </tr>
                                        <tr>
                                            <td>Khalil</td>
                                            <td class="text-end">3:00 pm</td>
                                            <td class="text-end">Indus</td>
                                            <td class="text-end">13-10-22</td>
                                            <td><span class="btn btn-success">Accept</span></td>
                                            <td><span class="btn ">x</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-12 col-md-6  d-flex order-1 order-xxl-1">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Calendar</h5>
                        </div>
                        <div class="card-body d-flex">
                            <div class="align-self-center w-100">
                                <div class="chart">
                                    <div id="datetimepicker-dashboard"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Schedule Appointments</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>Child Name</th>
                                    <th class="d-none d-xl-table-cell">Age</th>
                                    <th class="d-none d-xl-table-cell">Time</th>
                                    <th>Status</th>
                                    <th class="d-none d-md-table-cell">Hospitals</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hurrain</td>
                                    <td class="d-none d-xl-table-cell">4</td>
                                    <td class="d-none d-xl-table-cell">3:00 PM</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Indus</td>
                                </tr>
                                <tr>
                                    <td>Ayesha</td>
                                    <td class="d-none d-xl-table-cell">3</td>
                                    <td class="d-none d-xl-table-cell">3:00 PM</td>
                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                    <td class="d-none d-md-table-cell">Indus</td>
                                </tr>
                                <tr>
                                    <td>Usama</td>
                                    <td class="d-none d-xl-table-cell">3</td>
                                    <td class="d-none d-xl-table-cell">3:00 PM</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Indus</td>
                                </tr>
                                <tr>
                                    <td>Umer</td>
                                    <td class="d-none d-xl-table-cell">4</td>
                                    <td class="d-none d-xl-table-cell">3:00 PM</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">Indus</td>
                                </tr>
                                <tr>
                                    <td>Sidra</td>
                                    <td class="d-none d-xl-table-cell">2</td>
                                    <td class="d-none d-xl-table-cell">3:00 PM</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Indus</td>
                                </tr>
                                <tr>
                                    <td>Hadi</td>
                                    <td class="d-none d-xl-table-cell">4</td>
                                    <td class="d-none d-xl-table-cell">3:00 PM</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Indus</td>
                                </tr>
                                <tr>
                                    <td>Sarah</td>
                                    <td class="d-none d-xl-table-cell">2</td>
                                    <td class="d-none d-xl-table-cell">3:00 PM</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Indus</td>
                                </tr>
                                <tr>
                                    <td>Saman</td>
                                    <td class="d-none d-xl-table-cell">4</td>
                                    <td class="d-none d-xl-table-cell">3:00 PM</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">Indus</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>



@endsection