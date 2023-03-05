@extends("hospital.layout")
@section("main")

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

                                        <a href="index.html" style=" color:#3A55A4 "
                                            class="btn btn-lg m-t5">
                                            logout</a>
                               
</ul>
</div>
</nav>









<main class="content">
    <div class="container-fluid p-0">
  
    <div class="row g-4 mb-4">


<table>
    <tr>
        <td style="color: #0A77B1;" class="app-page-title">Recent Patients</td>
        <td>
            <div class="mt-3 text-end">
              
                <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
            </div>
        </td>
    </tr>
    <table>



        <div class="col-6 col-lg-4">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <img height="220px" width="220px" src="patient3.jpg">
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
                    <img height="220px" width="220px" src="patient2.jpg">
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
                    <img height="220px" width="220px" src="patient4.jpg">
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

        
        <div class="col-6 col-lg-4">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <img height="220px" width="220px" src="patient3.jpg">
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
                    <img height="220px" width="220px" src="patient2.jpg">
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
                    <img height="220px" width="220px" src="patient4.jpg">
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
        
        <div class="col-6 col-lg-4">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <img height="220px" width="220px" src="patient3.jpg">
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
                    <img height="220px" width="220px" src="patient2.jpg">
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
                    <img height="220px" width="220px" src="patient4.jpg">
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


    </div>
    </div>



    @endsection