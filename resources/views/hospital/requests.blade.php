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
                <div class="">
                    <div class="card flex-fill w-100">
                        <div class="card-header">

                            <h5 style="color: #0A77B1;"  class="card-title mb-0">Requests</h5>
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
                                            <td><span style="background-color:#3A55A4;" class="btn text-white ">Accept</span></td>
                                            <td><span class="btn ">x</span></td>
                                          
                                        </tr>
                                        <tr>
                                            <td>Sarah</td>
                                            <td class="text-end">3:00 pm</td>
                                            <td class="text-end">Indus</td>
                                            <td class="text-end">13-10-22</td>
                                            <td><span style="background-color:#3A55A4;" class="btn text-white ">Accept</span></td>
                                            <td><span class="btn ">x</span></td>
                                        </tr>
                                        <tr>
                                            <td>Sarah</td>
                                            <td class="text-end">3:00 pm</td>
                                            <td class="text-end">Indus</td>
                                            <td class="text-end">13-10-22</td>
                                            <td><span  style="background-color:#3A55A4;" class="btn text-white ">Accept</span></td>
                                            <td><span class="btn ">x</span></td>
                                        </tr>
                                        <tr>
                                            <td>Sarah</td>
                                            <td class="text-end">3:00 pm</td>
                                            <td class="text-end">Indus</td>
                                            <td class="text-end">13-10-22</td>
                                            <td><span  style="background-color:#3A55A4;" class="btn text-white ">Accept</span></td>
                                            <td><span class="btn ">x</span></td>
                                        </tr>
                                        <tr>
                                            <td>Sheryar</td>
                                            <td class="text-end">3:00 pm</td>
                                            <td class="text-end">Indus</td>
                                            <td class="text-end">13-10-22</td>
                                            <td><span  style="background-color:#3A55A4;" class="btn text-white ">Accept</span></td>
                                            <td><span class="btn">x</span></td>
                                        </tr>
                                        <tr>
                                            <td>Khalil</td>
                                            <td class="text-end">3:00 pm</td>
                                            <td class="text-end">Indus</td>
                                            <td class="text-end">13-10-22</td>
                                            <td><span  style="background-color:#3A55A4;" class="btn text-white ">Accept</span></td>
                                            <td><span class="btn ">x</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>





    </div>
</main>
@endsection