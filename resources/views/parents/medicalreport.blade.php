@extends("parents.layout")
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

    <div class="col-12 col-md-12 d-flex order-2 order-xxl-3">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Admin Profile</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">

                            <table class="table">
                                <th>Profile Details</th>
                                <tbody>

                                    <tr>
                                        <td>username</td>
                                        <td class="text-end">Ume Kulsoom</td>


                                    </tr>
                                    <tr>
                                        <td>email</td>
                                        <td class="text-end">kulsoom2204e@aptechgdn.net</td>

                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td class="text-end">021438322</td>

                                    </tr>
                                    <tr>
                                        <td>project name</td>
                                        <td class="text-end">Immunify</td>

                                    </tr>
                                    <tr>
                                        <td>begining date</td>
                                        <td class="text-end">12-1-23</td>

                                    </tr>
                                    <tr>
                                        <td>ending date</td>
                                        <td class="text-end">16-6-23</td>

                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>



            @endsection