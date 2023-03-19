@extends("admin.layout")
@section("main")


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
            <div class="col-12 col-lg-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Parents Request</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>


                                <th>Id</th>
                                <th class="d-none d-xl-table-cell">first name</th>
                                <th class="d-none d-xl-table-cell">last name</th>
                                <th>date of birth</th>
                                <th class="d-none d-md-table-cell">age</th>
                                <th class="d-none d-md-table-cell">weight</th>
                                <th class="d-none d-md-table-cell">medical issue</th>
                                <th class="d-none d-xl-table-cell">date</th>
                                <th>timing</th>
                                <th class="d-none d-md-table-cell">vaccine</th>

                                <th class="d-none d-md-table-cell">child Image</th>
                                <th class="d-none d-md-table-cell">Parent </th>
                                <th class="d-none d-md-table-cell">hospital</th>

                            </tr>
                        </thead>
                        <tbody>


                            @foreach($Req as $r)
                            <tr>


                                <td>{{$r->id}}</td>
                                <td class="d-none d-xl-table-cell">{{$r->fname}}</td>
                                <td class="d-none d-xl-table-cell">{{$r->lname}}</td>
                                <td class="d-none d-xl-table-cell">{{$r->dob}}</td>
                                <td><span class="">{{$r->age}}</span></td>
                                <td class="d-none d-md-table-cell">{{$r->weight}}</td>
                                <td class="d-none d-xl-table-cell">{{$r->medicalIssue}}</td>
                                <td class="d-none d-xl-table-cell">{{$r->date}}</td>

                                <td class="d-none d-xl-table-cell">{{$r->Timing}}</td>
                                <td><span class="">{{$r->vaccineType}}</span></td>

                                <td class="d-none d-md-table-cell"><img src="./childImages/{{$r->childImage}}"
                                        height="32px" width="32px"></td>


                                <td class="d-none d-xl-table-cell"> {{$r->parent_name}}</td>

                                <td><span class="">{{$r->hospital_name}}</span></td>


                                <td class="record btnsearch"> <button class="btn btnsearch2 text-white"
                                        style="background-color:#3A55A4;" type="submit"> <a
                                            class="btnsearch2 text-white"
                                            href="parentRequestaccept/{{$r->req_id}}">v</a></button>
                                </td>

                                <td class="record btnsearch"> <button class="btn btnsearch2 text-white"
                                        style="background-color:#D62600;" type="submit"> <a
                                            class="btnsearch2 text-white"
                                            href="/parentRequestdelete/{{$r->req_id}}">x</a></button>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection