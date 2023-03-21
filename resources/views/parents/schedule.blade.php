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
        <div class="row">
            <div class="col-12 col-md-6 d-flex order-2 order-xxl-3">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 style="color: #0A77B1;" class="card-title mb-0">Tasks</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="w-100">

                            <table class="table ">
                                <th>Name</th>
                                <th>Time</th>
                                <th>Description</th>
                                <th>#</th>
                                <th>#</th>

                                <tbody>

                                    <tr>
                                        <td>Appointment</td>
                                        <td>12:00 am</td>
                                        <td >Agha khan hospital</td>
                                        <td><span style="background-color:#3A55A4;"
                                                class="btn text-white ">done</span></td>
                                        <td><span class="btn ">x</span></td>

                                    </tr>
                                    <tr>
                                    <td>consultance</td>
                                        <td>3:00 pm</td>
                                        <td >Dr Ayesha</td>
                                        <td><span style="background-color:#3A55A4;"
                                                class="btn text-white ">done</span></td>
                                        <td><span class="btn ">x</span></td>
                                    </tr>
                                    <tr>
                              
                                </tbody>
                            </table>
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
											<input class="form-control form-control-lg" type="text" name="hospitalName" placeholder="Enter task" />
										</div>
										<div class="mb-3">
											<label class="form-label">task time</label>
											<input class="form-control form-control-lg" type="text" name="hospitalAddress" placeholder="Enter task time" />
										</div>
										<div class="mb-3">
											<label class="form-label">more</label>
											<input class="form-control form-control-lg" type="text" name="hospitalContact" placeholder="Enter description" />
										</div>
								
										<div class="text-center mt-3">
											<a href="index.html" style="background-color:#3A55A4;" class="btn btn-lg text-white ">Add Task</a>
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