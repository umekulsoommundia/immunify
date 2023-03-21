@extends("parents.layout")
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
                        <td style="color: #0A77B1;" class="app-page-title">current vaccines</td>
                        <td>
                      
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
                                                <h4 class="app-card-title">I Polio</h4>
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
                                        <a href="#" style="border-color:#3A55A4; color:#3A55A4 "
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
                                                <h4 class="app-card-title">Rubella</h4>
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
                                        <a href="#" style="border-color:#3A55A4; color:#3A55A4 "
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


                                                <img src="vaccine12.jpg" class="avatar img-fluid rounded-circle me-1"
                                                    alt="Charles Hall" />

                                            </div>
                                            <!--//icon-holder-->

                                            <!--//col-->


                                            <div class="col-auto">
                                                <h4 class="app-card-title">Hepatits</h4>
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
                                        <a href="#" style="border-color:#3A55A4; color:#3A55A4 "
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
                                                <h4 class="app-card-title">Diphteria</h4>
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
                                        <a href="#" style="border-color:#3A55A4; color:#3A55A4 "
                                            class="btn btn-lg m-t5">
                                            book</a>
                                    </div>
                                    <!--//app-card-footer-->
                                </div>
                                <!--//app-card-->
                            </div>
                            <!--//col-->

              
                            <!--//col-->

              
                            <!--//col-->
                        </div>
                        <!--//row-->

            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->


    @endsection