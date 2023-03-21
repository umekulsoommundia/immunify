<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<style>
* {


    font-family: 'Lato', sans-serif;

}

body {
    background-color: #0A76B1;
}

.card-img-top {
    height: 100%;
    object-fit: cover;
}

/* center the content vertically and horizontally */
.card-body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

/* add some margin to the top and bottom of the form */
form {
    margin: 20px 0;
}

/* make the form inputs take up the entire width of the container */
input {
    width: 100%;
}

/* add some padding to the top and bottom of the container */
section {
    padding: 20px 0;
}

/* add some margin to the top and bottom of the container on small screens */
@media (max-width: 768px) {
    section {
        margin: 20px 0;
    }
}
</style>



<body>
    <section class="vh-100" style="background-color:#0A76B1;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-12">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="pexels-anna-shvets-3786234.jpg" alt="login form" class="card-img-top"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <div class="text-center mt-4">
                                        <h1 style="color:#203C71;  font-size:30px;" class="h2">Join us ,Let's Immunify
                                        </h1>
                                        <p class="lead">You will be notified if Your request get accepted</p>
                                    </div>
                                    <div class="text-center">
                                        <img src="./logoBluePng.png" alt="logo" class="img-fluid" width="132"
                                            height="132" />
                                    </div>
                                    <form method="POST" action="/hospitalSignupPost" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Hospital Name</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="name" placeholder="Enter your hospital name" />
                                                    @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Password</label>
                                                    <input class="form-control form-control-lg" type="password"
                                                        name="password" placeholder="Enter your password" />
                                                    @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Location</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="location" placeholder="Enter your location" />
                                                    @error('location')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                           
                                                <div class="mb-3">
                                                    <label class="form-label">Contact No</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="contactNumber" placeholder="Enter contact number" />
                                                    @error('contactNumber')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Certificate </label>
                                                    <input class="form-control form-control-lg" type="file"
                                                        name="certificate" placeholder="" />
                                                    @error('certificate')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>


                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control form-control-lg" type="email"
                                                        name="email" placeholder="Enter your Email" />
                                                    @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Confirm Password</label>
                                                    <input class="form-control form-control-lg" type="password"
                                                        name="confirmPassword" placeholder="confirm password" />
                                                    @error('confirmPassword')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">City</label>
                                                    <select class="form-control form-control-lg" name="city">
                                                        <option value="">Select City</option>
                                                        <option value="karachi">Karachi</option>
                                                        <option value="lahore">Lahore</option>
                                                        <option value="islamabad">Islamabad</option>
                                                        <option value="multan">Multan</option>
                                                        <option value="quetta">Quetta</option>
                                                    </select>
                                                    @error('city')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            

                                                <div class="mb-3">
                                                    <label class="form-label">Hospital Timing</label>
                                                    <select class="form-control form-control-lg" name="Timing">
                                                        <option value="">Select Hospital Timing</option>
                                                        <option value="12:00 am to 9:00 am">12:00 am to 9:00 am</option>
                                                        <option value="9:00 am to 6:00 pm">9:00 am to 6:00 pm</option>
                                                        <option value="6:00 pm to 3:00 am">6:00 pm to 3:00 am</option>
                                                    </select>
                                                    @error('Timing')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                              

                                                <div class="mb-3">
                                                    <label class="form-label">Hospital Images</label>
                                                    <input class="form-control form-control-lg" type="file" 
                                                        name="hospitalImage" placeholder="Enter hospital Images" />
                                                    @error('hospitalImage')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>



                                            </div>
                                        </div>

                                        @if(session('message'))
                                        <div class="alert alert-success">
                                            {{session('message')}}
                                        </div>
                                        @endif

                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Register</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>