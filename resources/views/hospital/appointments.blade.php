@extends("hospital.layout")
@section("main")


                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                        <div class="position-relative">
                            <i class="align-middle" data-feather="bell"> </i>
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
             
                <a href="index.html" style=" color:#3A55A4 "
                                            class="btn btn-lg m-t5">
                                            logout</a>
            </ul>
        </div>
    </nav>

    <main class="content">
        <div class="container-fluid p-0">

           


            <div class="row">
                <div class="col-12 col-lg-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 style=" color:#0A77B1;" class="card-title mb-0">Schedule Appointments</h5>
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

</div>
</main>

@endsection