@extends("parents.layout")
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
             
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                        <i class="align-middle" data-feather="settings"></i>
                    </a>

                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                        <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                        <span style="color:#203C71;" >Admin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="profile"><i class="align-middle me-1"
                                data-feather="user"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.html"><i class="align-middle me-1"
                                data-feather="settings"></i> Settings</a>
                     
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>



<main class="content">
    <div class="container-fluid p-0">






        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <h1 style="color: #0A77B1;" class="app-page-title">Medical test</h1>

                <div class="app-card alert alert-dismissible shadow-sm mb-4" role="alert">
                    <div class="inner">
                        <div class="app-card-body p-3 p-lg-4">

                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">

                                    <h1 style=" color:#203C71;font-size:55px">
                                        The annual check <br> is coming soon
                                    </h1>
                                    <h6 class="mb-3 text-muted">Tomorrow, Jan 22,
                                        2023</h6>
                                    <div class="mt-3">
                                        <a href="index.html" style="background-color:#3A55A4;"
                                            class="btn btn-lg text-white m-t5"> +
                                            Add to Calender</a>
                                        <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                                    </div>
                                </div>
                                <!--//col-->
                                <div class="col-12 col-lg-3">
                                    <img height="220px" width="220px" src="vaccine2.jpg">
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <!--//app-card-body-->

                    </div>
                    <!--//inner-->
                </div>
                <!--//app-card-->




                <div class="row g-4 mb-4">


                    <table>
                        <tr>
                            <td style="color: #0A77B1;" class="app-page-title">visit the hospitals</td>
                            <td>
                                <div class="mt-3 text-end">
                                    <a href="index.html" style=" margin-left:120px">
                                        view more</a>
                                    <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                                </div>
                            </td>
                        </tr>
                        <table>



                            <div class="col-6 col-lg-4">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <img height="220px" width="220px" src="hospital7.jpg">
                                        <h4 class="stats-type mb-1 mt-3" style=" font-weight:21px; color:#203C71;">xyz
                                            hospital</h4>
                                        <div class="text-muted">clinic and pharmacy</div>

                                        <div class="mt-3">
                                            <a href="index.html" style="color:#3A55A4;" class="btn btn-lg  m-t5">
                                                view more</a>
                                            <!-- <button type="submit" class="btn btn
                                            -lg btn-primary">Sign up</button> -->
                                        </div>
                                    </div>
                                    <!--//app-card-body-->
                                    <a class="app-card-link-mask" href="#"></a>
                                </div>
                                <!--//app-card-->
                            </div>
                            <!--//col-->

                            <div class="col-6 col-lg-4">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <img height="220px" width="220px" src="hospital6.jpg">
                                        <h4 class="stats-type mb-1  mt-3" style=" font-weight:21px;color:#203C71;"> xyz
                                            hospital</h4>
                                        <div class="text-muted">clinic and pharmacy</div>

                                        <div class="mt-3">
                                            <a href="index.html" style="color:#3A55A4;" class="btn btn-lg m-t5">
                                                view more</a>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                                        </div>
                                    </div>
                                    <!--//app-card-body-->
                                    <a class="app-card-link-mask" href="#"></a>
                                </div>
                                <!--//app-card-->
                            </div>
                            <!--//col-->
                            <div class="col-6 col-lg-4">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <img height="220px" width="220px" src="hospital5.jpg">
                                        <h4 class="stats-type mb-1  mt-3" style=" font-weight:21px; color:#203C71;"> xyz
                                            hospital</h4>
                                        <div class="text-muted">clinic and pharmacy</div>

                                        <div class="mt-3">
                                            <a href="index.html" style="color:#3A55A4;" class="btn btn-lg  m-t5">
                                                view more</a>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                                        </div>
                                    </div>
                                    <!--//app-card-body-->
                                    <a class="app-card-link-mask" href="#"></a>

                                </div>
                                <!--//app-card-->
                            </div>
                            <!--//col-->

                            <!--//col-->
                </div>
                <!--//row-->

                <table>
                    <tr>
                        <td style="color: #0A77B1;" class="app-page-title">current vaccines</td>
                        <td>
                            <div class="mt-3 text-end">
                                <a href="index.html" style=" margin-left:120px">
                                    view more</a>
                                <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                            </div>
                        </td>
                    </tr>
                    <table>
                        <div class="row g-4 mb-4">
                            <div class="col-12 col-lg-6">
                                <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                                    <div class="app-card-header p-3 border-bottom-0">
                                        <div class="row align-items-center gx-3">
                                            <div class="col-auto">


                                                <img src="vaccine12.jpg" class="avatar img-fluid rounded-circle me-1"
                                                    alt="Charles Hall" />

                                            </div>
                                            <!--//icon-holder-->

                                            <!--//col-->


                                            <div class="col-auto">
                                                <h4 class="app-card-title">Ibpprofen Karoten</h4>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                    </div>
                                    <!--//app-card-header-->
                                    <div class="app-card-body px-4">

                                        <div class="intro">xyz hospital</div>
                                    </div>
                                    <!--//app-card-body-->
                                    <div class="app-card-footer p-4 mt-auto">
                                        <a href="index.html" style="border-color:#3A55A4; color:#3A55A4 "
                                            class="btn btn-lg m-t5">
                                            book</a>
                                    </div>
                                    <!--//app-card-footer-->
                                </div>
                                <!--//app-card-->
                            </div>
                            <!--//col-->
                            <div class="col-12 col-lg-6">
                                <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                                    <div class="app-card-header p-3 border-bottom-0">
                                        <div class="row align-items-center gx-3">
                                            <div class="col-auto">

                                                <img src="./vaccine31.jpg" class="avatar img-fluid rounded-circle"
                                                    alt="Charles Hall" />
                                            </div>
                                            <!--//icon-holder-->


                                            <!--//col-->
                                            <div class="col-auto">
                                                <h4 class="app-card-title">Ibpprofen Karoten</h4>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                    </div>
                                    <!--//app-card-header-->
                                    <div class="app-card-body px-4">

                                        <div class="intro">xyz hospital</div>
                                    </div>
                                    <!--//app-card-body-->
                                    <div class="app-card-footer p-4 mt-auto">
                                        <a href="index.html" style="border-color:#3A55A4; color:#3A55A4 "
                                            class="btn btn-lg m-t5">
                                            book</a>
                                    </div>
                                    <!--//app-card-footer-->
                                </div>
                                <!--//app-card-->
                            </div>
                            <!--//col-->

                            <!--//col-->
                        </div>
                        <!--//row-->

            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->


        <!--//app-footer-->


    </div>
</main>


@endsection