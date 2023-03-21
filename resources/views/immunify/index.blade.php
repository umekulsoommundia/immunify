<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=K2D:wght@100&family=Oswald:wght@200&family=Outfit:wght@100;200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=K2D:wght@100&family=Oswald:wght@200&family=Outfit:wght@100;200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400&display=swap"
        rel="stylesheet">

    <title>Immunify</title>

    <style>
    * {
        font-family: 'Lato', sans-serif;
    }
     /* Adjust the padding and font-size for smaller screens */
     @media (max-width: 768px) {
        .intro-wrap {
            padding: 0 20px;
        }
        h1 {
            font-size: 50px;
        }
    }

    /* Stack the form inputs vertically for smaller screens */
    @media (max-width: 576px) {
        .form .row {
            flex-wrap: wrap;
        }
        .form .row > * {
            width: 100%;
        }
    }
    </style>
</head>

<body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="site-navigation">
                <a href="index.html" class="logo m-0"> <img src="./logoBluePng.png" height="80px" width="80px"> <span
                        class="text-primary"></span></a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                    <li class="active"><a href="index.html" style="color:#0976B1; font-size:16px">Home</a></li>
                    <li class="has-children">
                       
                    <li id="smalll"><a href="services.html" style="color:#0976B1; font-size:16px">Why us</a></li>
                    <li><a href="about.html" style="color:#0976B1; font-size:16px">About</a></li>
                    <li><a href="contact.html" style="color:#3B54A5; font-size:16px">Contact Us</a></li>
                    <li><a href="/loginform"> <button  type="button" class="btn btn-info"
                                style="background-color:#0976B1; font-size:16px">Log In</button></a></li>

                </ul>

                <a href="#"
                    class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                    data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>

            </div>
        </div>
    </nav>

    <div class="hero" style="background-color:#FFFFFF;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="intro-wrap">
                    <h1 class="mb-5" style="color:#203C71;"><span class="d-block">Your Immunity Is </span> Our <span
                            class="typed-words"></span></h1>
<!-- form start -->
                    <form class="form" method ="post" action ="{{route('get.data')}}">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
                                <select name="location" id="" class="form-control custom-select">
                                    <option value="">Location</option>
                                    <option value="karachi">Karachi</option>
                                    <option value="islamabad">Islamabad</option>
                                    <option value="lahore">Lahore</option>
                                    <option value="queeta">Quetta</option>
                                </select>
                            </div>
                          

                            <div class="mb-3">
                                               
                                                    <select class="form-control form-control-lg" name="daterange">
                                                        <option value="">Select Appointment Date</option>
                                                        <option value="20 March 2023">20 March 2023</option>
                                                        <option value="20 March 2023">20 March 2023</option>
                                                        <option value="20 March 2023">20 March 2023</option>
                                                        <option value="20 March 2023">20 March 2023</option>
                                                        <option value="20 March 2023">20 March 2023</option>
                                                        <option value="20 March 2023">20 March 2023</option>
                                                        <option value="20 March 2023">20 March 2023</option>
                                                        <option value="20 March 2023">20 March 2023</option>

                                                    </select>
                                             
                                                </div>
                            <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                <select name="vtype" id="" class="form-control custom-select">
                                    <option value="">Vaccine Type</option>
                                    <option value="karachi">Karachi</option>
                                    <option value="Islamabad">Islamabad</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Queeta">Quetta</option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                <input type="submit" class="align-items-center btn btn-primary btn-block"
                                    style="background-color:#203C71;" value="Submit">
                            </div>
                        </div>
                    </form>
<!-- form 3nd -->
                </div>
            </div>

            <div class="col-lg-5">
                <div class="slides">
                    <img src="./header1.jpg" alt="Image" class="img-fluid active">
                    <img src="./header2.jpg" alt="Image" class="img-fluid">
                    <img src="./header3.jpg" alt="Image" class="img-fluid">
                    <img src="./header1.jpg" alt="Image" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>

<div class="untree_co-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-lg-6 text-center">
        <h2 class="section-title text-center mb-3" style="font-family: 'Lato', sans-serif; font-size: 54px; color: #203C71;">Why Should I Vaccine?</h2>
      </div>
    </div>
    <div class="row align-items-stretch">
      <div class="col-lg-4 order-lg-1">
        <div class="h-100">
          <div class="frame h-100">
            <div class="feature-img-bg h-100" style="background-image: url('./h2.jpg');"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1">
        <div class="feature-1 d-md-flex">
          <div class="align-self-center">
            <h3 style="color: #203C71;">Protect against diseases</h3>
            <p style="color: #0A77B1;" class="mb-0">Vaccines protect children from a range of diseases, such as measles, polio, whooping cough, and more.</p>
          </div>
        </div>
        <div class="feature-1 ">
          <div class="align-self-center">
            <h3 style="color: #203C71;">Prevent outbreaks:</h3>
            <p style="color: #0A77B1;" class="mb-0">When enough people in a community are vaccinated against a disease, it becomes much less likely to spread. </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3">
        <div class="feature-1 d-md-flex">
          <div class="align-self-center">
            <h3 style="color: #203C71;">Safe and effective</h3>
            <p style="color: #0A77B1;" class="mb-0">The risks of getting a vaccine are far less than the risks of getting the diseases they protect against</p>
          </div>
        </div>
        <div class="feature-1 d-md-flex">
          <div class="align-self-center">
            <h3 style="color: #203C71;">Saves time and money</h3>
            <p style="color: #0A77B1;" class="mb-0">Preventing disease through vaccination saves time and money by avoiding the need for medical treatment, hospitalization</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    <div class="untree_co-section count-numbers py-5">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="counter-wrap">
                        <div class="counter">
                            <span class="" data-number="9313">0</span>
                        </div>
                        <span class="caption">Completed Vaccination</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="counter-wrap">
                        <div class="counter">
                            <span class="" data-number="65">0</span>
                        </div>
                        <span class="caption">Hospitals</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="counter-wrap">
                        <div class="counter">
                            <span class="" data-number="12000">0</span>
                        </div>
                        <span class="caption">Users</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="counter-wrap">
                        <div class="counter">
                            <span class="" data-number="22">0</span>
                        </div>
                        <span class="caption">Cities</span>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="untree_co-section">
        <div class="container">
            <div class="row text-center justify-content-center mb-5">
                <div class="col-lg-7">
                    <h2 class="section-title text-center" style ="color: #203C71;">Hospitals</h2>
                </div>
            </div>

            <div class="owl-carousel owl-3-slider">

                <div class="item">
                    <a class="media-thumb" href="images/hero-slider-1.jpg" data-fancybox="gallery">
                        <div class="media-text">
                            <h3>xyz</h3>
                            <span class="location">karachi</span>
                        </div>
                        <img src="./hosp1.jpg" alt="Example Image">

                    </a>
                </div>

                <div class="item">
                    <a class="media-thumb" href="signup.php" data-fancybox="gallery">
                        <div class="media-text">
                            <h3>Oia</h3>
                            <span class="location">Greece</span>
                        </div>
                        <img src="./hosp2.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

                <div class="item">
                    <a class="media-thumb" href="signup.php" data-fancybox="gallery">
                        <div class="media-text">
                            <h3>Perhentian Islands</h3>
                            <span class="location">Malaysia</span>
                        </div>
                        <img src="./hosp4.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>


     
                <div class="item">
                    <a class="media-thumb" href="signup.php" data-fancybox="gallery">
                        <div class="media-text">
                            <h3>San Francisco, United States</h3>
                            <span class="location">United States</span>
                        </div>
                        <img src="./hosp7.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

                <div class="item">
                    <a class="media-thumb" href="signup.php">
                        <div class="media-text">
                            <h3>Lake Thun</h3>
                            <span class="location">Switzerland</span>
                        </div>
                        <img src="./hosp8.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

            </div>

        </div>
    </div>


    <div class="untree_co-section testimonial-section mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 class="section-title text-center mb-5" style ="color: #203C71;">Testimonials</h2>

                    <div class="owl-single owl-carousel no-nav">
                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Sarah</h3>
                            <blockquote>
                                <p>&ldquo;I cannot thank the staff at the vaccination center enough for their incredible service. From the moment we arrived, we were greeted with warm smiles and kindness. The process was seamless and efficient, and my child felt comfortable and at ease the entire time. I appreciate the dedication and hard work that goes into administering these vaccines, and I would highly recommend this center to any parent seeking a safe and stress-free vaccination experience.
&rdquo;</p>
                            </blockquote>
                        </div>

                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Ahad</h3>
                            <blockquote>
                                <p>&ldquo;I was nervous about taking my child to get vaccinated, but the team at the vaccination center put all of my fears at ease. They were patient, understanding, and took the time to answer all of my questions. The facility was clean and well-maintained, and I felt confident that my child was in good hands. I am so grateful to the staff for their expertise and professionalism, and I would absolutely recommend this center to other parents.&rdquo;</p>
                            </blockquote>
                        </div>

                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="images/person_4.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Janet</h3>
                            <blockquote>
                                <p>&ldquo;"I cannot thank the staff at the vaccination center enough for their incredible service. From the moment we arrived, we were greeted with warm smiles and kindness. The process was seamless and efficient, and my child felt comfortable and at ease the entire time. I appreciate the dedication and hard work that goes into administering these vaccines, and I would highly recommend this center to any parent seeking a safe and stress-free vaccination experience.&rdquo;</p>
                            </blockquote>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="hero hero-inner" style="background-color:#0a77b1;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mx-auto text-center">
        <div class="intro-wrap">
          <h1 class="mb-0" >About Us</h1>
          <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
        </div>
      </div>
    </div>
  </div>
</div>

  
         
          </ul>
        </div>
      </div>
    </div>
  </div><div class="untree_co-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="owl-single dots-absolute owl-carousel">
          <img src="./c111.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          <img src="./c22.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          <img src="./c33.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          <img src="./c44.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          
        </div>
      </div>
      <div class="col-lg-5 pl-lg-5 mt-5 mt-lg-0">
        <h2 class="section-title mb-4" style ="color: #203C71;">About Immunify</h2>
        <p class="mb-4">Our mission is to provide reliable and accurate information about vaccines and promote the importance of vaccination for all age groups. We believe that every individual deserves access to the tools and knowledge necessary to make informed decisions about their health, and vaccines are a critical component of that.</p>
        <p class="mb-4">Our team of experts includes healthcare professionals, scientists, and communicators who are passionate about public health and dedicated to sharing the latest research and recommendations regarding vaccines. We strive to make our content accessible to everyone, including parents, caregivers, educators, and healthcare providers.</p>
        <p class="mb-4">Our website provides information about the types of vaccines available, their safety and effectiveness</p>
      </div>
    </div>
  </div>
</div>



<div class="hero hero-inner" style="background-color:#0a77b1;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mx-auto text-center">
        <div class="intro-wrap">
          <h1 class="mb-3">Contact Us</h1>
          <p class="mb-5" style= color:white>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
        </div>
      </div>
    </div>
  </div>
</div>

  
<div class="untree_co-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0">
       
          <div class="row">
            <div class="col-md-6">
                <form method="POST" action="{{route('contactsubmitform')}}">
                @csrf
              <div class="form-group">
                
                <label class="text-black" for="fname" >First name</label>
                <input type="text" required class="form-control" name="ffname" id="fname">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="text-black"  for="name">Last name</label>
                <input required type="text" class="form-control" name="lname" id="lname">
              </div>
            </div>
          </div>
          <div class="form-group" type ="post" form-action>
            <label class="text-black"  for="email">Email address</label>
            <input required type="text" name="cemail" class="form-control" id="email">
          </div>

          <div class="form-group">
            <label class="text-black" for="message">Message</label>
            <textarea  required class="form-control" name="cmessage" id="message" cols="30" rows="5"></textarea>
          </div>
          <button type="submit" name= "
          " class="btn btn-primary">Send Message</button>
          </form>
       
      </div>
      <div class="col-lg-5 ml-auto">
        <div class="quick-contact-item d-flex align-items-center mb-4">
          <span class="flaticon-house"></span>
          <address class="text">
          4/B Shahrah-e-Ghalib Rd, Block 6 Clifton
          </address>
        </div>
        <div class="quick-contact-item d-flex align-items-center mb-4">
          <span class="flaticon-phone-call"></span>
          <address class="text">
            09244791442
          </address>
        </div>
        <div class="quick-contact-item d-flex align-items-center mb-4">
          <span class="flaticon-mail"></span>
          <address class="text">
            @immunify@gmail.com
          </address>
        </div>
      </div>
    </div>
  </div>
</div>






    <div class="py-5 cta-section"  style="background-color:#0a77b1;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
                    <p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Excepturi, fugit?</p>
                    <p class="mb-0"><a href="booking.html"
                            class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-footer">
        <div class="inner first">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="widget">
                            <h3 class="heading">About Immunify</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                        <div class="widget">
                            <ul class="list-unstyled social">
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                <li><a href="#"><span class="icon-dribbble"></span></a></li>
                                <li><a href="#"><span class="icon-pinterest"></span></a></li>
                                <li><a href="#"><span class="icon-apple"></span></a></li>
                                <li><a href="#"><span class="icon-google"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 pl-lg-5">
                        <div class="widget">
                            <h3 class="heading">Pages</h3>
                            <ul class="links list-unstyled">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="widget">
                            <h3 class="heading">Resources</h3>
                            <ul class="links list-unstyled">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget">
                            <h3 class="heading">Contact</h3>
                            <ul class="list-unstyled quick-info links">
                                <li class="email"><a href="#">  4/B Shahrah-e-Ghalib Rd, Block 6 Clifton</a></li>
                                <li class="phone"><a href="#"> 09244791442</a></li>
                                <li class="address"><a href="#"> @immunify@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>

    <script src="js/typed.js"></script>
    <script>
    $(function() {
        var slides = $('.slides'),
            images = slides.find('img');

        images.each(function(i) {
            $(this).attr('data-id', i + 1);
        })

        var typed = new Typed('.typed-words', {
            strings: ["Priority.", " Speciality.", "Responsibility."],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true,
            preStringTyped: (arrayPos, self) => {
                arrayPos++;
                console.log(arrayPos);
                $('.slides img').removeClass('active');
                $('.slides img[data-id="' + arrayPos + '"]').addClass('active');
            }

        });
    })
    </script>

    <script src="js/custom.js"></script>

</body>

</html>