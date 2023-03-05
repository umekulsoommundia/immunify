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
            <i class="align-middle" data-feather="bell"> f</i>
            <span class="indicator">3</span>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
        <div class="dropdown-menu-header">
            3 New Notifications
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

<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center">
							<h1 class="h2">Immunify</h1>
							<p class="lead">
								Your Immunity Is Our Priority
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form>
										<div class="mb-3">
											<label class="form-label">Name</label>
											<input class="form-control form-control-lg" type="text" name="hospitalName" placeholder="Enter hospital name" />
										</div>
										<div class="mb-3">
											<label class="form-label">Address</label>
											<input class="form-control form-control-lg" type="text" name="hospitalAddress" placeholder="Enter hospital address" />
										</div>
										<div class="mb-3">
											<label class="form-label">Contact</label>
											<input class="form-control form-control-lg" type="text" name="hospitalContact" placeholder="Enter hospital contact" />
										</div>
										<div class="mb-3">
											<label class="form-label">Vaccine</label>
											<input class="form-control form-control-lg" type="text" name="vaccineName" placeholder="Enter vaccine name" />
										</div>
                                        <div class="mb-3">
											<label class="form-label">Timing</label>
											<input class="form-control form-control-lg" type="text" name="hospitalTiming" placeholder="Enter hospital timing" />
										</div>
										<div class="text-center mt-3">
											<a href="index.html" class="btn btn-lg btn-primary">Add</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

@endsection