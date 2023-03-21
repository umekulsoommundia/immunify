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

                        <h5 class="card-title mb-0">    Medical Report for Adam - Polio Vaccination at xyz Hospital</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">

                            <table class="table">
                                <th>Profile Details</th>
                                <tbody>

                                    <tr>
                                        <td>Patient Name:</td>
                                        <td class="text-end">xyz child</td>


                                    </tr>
                                    <tr>
                                        <td>Age:</td>
                                        <td class="text-end">2 years</td>

                                    </tr>
                                    <tr>
                                        <td>Gender:</td>
                                        <td class="text-end">Male</td>

                                    </tr>
                                    <tr>
                                        <td>History:</td>
                                        <td class="text-end">xyz came to the Aga Khan Hospital for his polio vaccination. He had no previous medical history and was healthy at the time of the visit.
</td>

                                    </tr>
                                    <tr>
                                        <td>Physical Examination:</td>
                                        <td class="text-end">xyz was examined prior to receiving his polio vaccination. The examination revealed that Adam was in good health with no visible signs of illness or injury. His vital signs were normal and within a healthy range for his age.</td>

                                    </tr>
                                    <tr>
                                        <td>Assessment and Treatment:</td>
                                        <td class="text-end">xyz received the polio vaccine during his visit to the hospital. The vaccine was administered by a trained healthcare professional using a sterile needle and syringe. Adam tolerated the vaccine well and did not exhibit any adverse reactions.</td>

                                    </tr>

                                    <tr>
                                        <td>Follow-up:</td>
                                        <td class="text-end">xyz's parents were instructed to monitor his health for any adverse reactions to the vaccine, such as fever or swelling at the injection site. They were advised to contact the hospital if any such reactions occurred. They were also given information on when to bring Adam in for his next polio vaccine.</td>

                                    </tr>
                                    <tr>
                                        <td>Conclusion:</td>
                                        <td class="text-end">xyz received his polio vaccine at Aga Khan Hospital and did not experience any adverse reactions. He was in good health at the time of the visit and was monitored closely for any potential side effects. Adam's parents were satisfied with the care he received and were provided with information on when to bring him back for his next vaccination.</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>



            @endsection