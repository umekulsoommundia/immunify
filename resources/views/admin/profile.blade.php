@extends("admin.layout")
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
                        <span class="text-dark">admin</span>
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
                            <img src="img/avatars/avatar-4.jpg" alt="Christina Mason"
                                class="img-fluid rounded-circle mb-2" width="128" height="128" />
                            <h5 class="card-title mb-0">U K</h5>
                            <div class="text-muted mb-2">Graphic Designer | Web Developer</div>


                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">Skills</h5>
                            <a href="#" class="badge bg-primary me-1 my-1">HTML</a>
                            <a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
                            <a href="#" class="badge bg-primary me-1 my-1">PHP</a>
                            <a href="#" class="badge bg-primary me-1 my-1">LARAVEL</a>

                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">About</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a
                                        href="#">Karachi, Pakistan</a></li>

                                <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at
                                    <a href="#">Freelancing</a>
                                </li>

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

                <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Activities</h5>
                        </div>
                        <div class="card-body h-100">

                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-5.jpg" width="36" height="36" class="rounded-circle me-2"
                                    alt="Vanessa Tucker">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">5m ago</small>
                                    <strong>Vanessa Tucker</strong> started following <strong>Christina
                                        Mason</strong><br />
                                    <small class="text-muted">Today 7:51 pm</small><br />

                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2"
                                    alt="Charles Hall">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">30m ago</small>
                                    <strong>Charles Hall</strong> posted something on <strong>Christina Mason</strong>'s
                                    timeline<br />
                                    <small class="text-muted">Today 7:21 pm</small>

                                    <div class="border text-sm text-muted p-2 mt-1">
                                        Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                                        libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel,
                                        luctus
                                        pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec
                                        vitae sapien ut libero venenatis faucibus. Nullam quis ante.
                                    </div>

                                    <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm"
                                            data-feather="heart"></i> Like</a>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2"
                                    alt="Christina Mason">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">1h ago</small>
                                    <strong>Christina Mason</strong> posted a new blog<br />

                                    <small class="text-muted">Today 6:35 pm</small>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2"
                                    alt="William Harris">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">3h ago</small>
                                    <strong>William Harris</strong> posted two photos on <strong>Christina
                                        Mason</strong>'s timeline<br />
                                    <small class="text-muted">Today 5:12 pm</small>

                                    <div class="row g-0 mt-1">
                                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                            <img src="img/photos/unsplash-1.jpg" class="img-fluid pe-2" alt="Unsplash">
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                            <img src="img/photos/unsplash-2.jpg" class="img-fluid pe-2" alt="Unsplash">
                                        </div>
                                    </div>

                                    <a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm"
                                            data-feather="heart"></i> Like</a>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2"
                                    alt="William Harris">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">1d ago</small>
                                    <strong>William Harris</strong> started following <strong>Christina
                                        Mason</strong><br />
                                    <small class="text-muted">Yesterday 3:12 pm</small>

                                    <div class="d-flex align-items-start mt-1">
                                        <a class="pe-3" href="#">
                                            <img src="img/avatars/avatar-4.jpg" width="36" height="36"
                                                class="rounded-circle me-2" alt="Christina Mason">
                                        </a>
                                        <div class="flex-grow-1">
                                            <div class="border text-sm text-muted p-2 mt-1">
                                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                                                Maecenas nec odio et ante tincidunt tempus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2"
                                    alt="Christina Mason">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">1d ago</small>
                                    <strong>Christina Mason</strong> posted a new blog<br />
                                    <small class="text-muted">Yesterday 2:43 pm</small>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2"
                                    alt="Charles Hall">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">1d ago</small>
                                    <strong>Charles Hall</strong> started following <strong>Christina
                                        Mason</strong><br />
                                    <small class="text-muted">Yesterdag 1:51 pm</small>
                                </div>
                            </div>

                            <hr />
                            <div class="d-grid">
                                <a href="#" class="btn btn-primary">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 
@endsection