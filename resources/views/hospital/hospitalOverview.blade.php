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
                    <!-- <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
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
                <a href="/hospitalLogout" style=" color:#3A55A4 "
                                            class="btn btn-lg m-t5">
                                            logout</a>
            </ul>
        </div> -->
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


	<div class="row">
                <div class="col-xl-6 col-xxl-5 d-flex">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title" style="color: #0A77B1;">New Patients</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="truck"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 style="color:#203C71;" class="mt-1 mb-3">120</h1>
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
                                                <h5 class="card-title" style="color: #0A77B1;">Monthly Visitors</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1  style="color:#203C71;" class="mt-1 mb-3">40</h1>
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
                                                <h5 class="card-title" style="color: #0A77B1;">Appointments</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1  style="color:#203C71;"class="mt-1 mb-3">56</h1>
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
                                                <h5 class="card-title"  style="color: #0A77B1;" >Requests</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="shopping-cart"></i>
                                                </div>
                                            </div>
                                                        </div>
                                        <h1 style="color:#203C71;" class="mt-1 mb-3">42</h1>
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
				<div class="card flex-fill w-100 mt-2">
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
                                            <td class="text-end">  24   </td>
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
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>

                <div class="row g-4 mb-4">


                    <table>
                        <tr>
                            <td style="color: #0A77B1;" class="app-page-title">Recent Patients</td>
                            <td>
                                <div class="mt-3 text-end">
                                    <a href="patientsmore" style=" margin-left:120px">
                                        view more</a>
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

                            <!--//col-->
                </div>
                <!--//row-->

                <table>
                    <tr>
                        <td style="color: #0A77B1;" class="app-page-title">vaccines</td>
                        <td>
                            <div class="mt-3 text-end">
                                <a href="hospitalVaccines" style=" margin-left:120px">
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
                                                <h4 style="color:#203C71;" class="app-card-title">Ibpprofen Karoten</h4>
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
                                            edit</a>
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
                                                <h4 style="color:#203C71;" class="app-card-title">Ibpprofen Karoten</h4>
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
                                            edit</a>
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