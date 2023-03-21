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
                            <a href="notification" class="text-muted">Show all notifications</a>
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

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Profile</h1>

            </div>
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Profile Details</h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="./hospital6.jpg" alt="Christina Mason"
                                class="img-fluid rounded-circle mb-2" width="128" height="128" />
                            <h5 class="card-title mb-0">xyz hospital</h5>
                            <div class="text-muted mb-2">Immunify</div>
                        
                                        <a href="index.html" style=" color:#3A55A4 "
                                            class="btn btn-lg m-t5">
                                            edit</a>
                             


                        </div>
               
                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">About</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> at <a
                                        href="#">Karachi, Pakistan</a></li>

                       

                            </ul>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">Social Media</h5>
                            <ul class="list-unstyled mb-0">

                                <li class="mb-1"><a href="#">Twitter</a></li>
                                <li class="mb-1"><a href="#">Facebook</a></li>
                                <li class="mb-1"><a href="#">Instagram</a></li>
                                <li class="mb-1"><a href="#">LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-8 d-flex order-2 order-xxl-3">
                    <div class="card flex-fill w-100">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Hospital Profile</h5>
                        </div>
                        <div class="card-body d-flex">
                            <div class="align-self-center w-100">

                                <table class="table">
                                    
                                    <th>Profile Details</th>
                                    <tbody>

                                        <tr>
                                            <td>name</td>
                                            <td class="text-end">name</td>
                                 
                                          
                                        </tr>
                                        <tr>
                                            <td>email</td>
                                            <td class="text-end">  @if(session('email'))
                                                  
                                                        {{session('email')}}
                                                  
                                                    @endif</td>
                                
                                        </tr>
                                        <tr>
                                            <td>password</td>
                                            <td class="text-end">  @if(session('password'))
                                                  
                                                        {{session('password')}}
                                                  
                                                    @endif</td>
                                
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td class="text-end">021438322</td>
                                         
                                        </tr>
                                        <tr>
                                            <td>collabration</td>
                                            <td class="text-end">Immunify</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>begining date</td>
                                            <td class="text-end">12-1-23</td>
                                           
                                        </tr>
                                   
                                    
                                   
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div> 

            </div>


 
@endsection