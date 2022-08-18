<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toukir Ahmed</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('assets/img/favicon.png')}}" rel="icon">
  <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{url('/storage/'.$abouts[0]->image)}}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Toukir Ahmed</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/Toukirganwala" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://instagram.com/toukir_ahmed_official?igshid=YmMyMTA2M2Y=
          " class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://youtube.com/c/ToukirAhmedOfficial" class="google-plus"><i class="bi bi-youtube"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Blogs</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bi bi-award"></i> <span>Achievement</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex  justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
     
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>I am Toukir Ahmed. i am a singer. My music started from the age of 5. I started learning music from my uncle Saidur Rahman. Later, my father admitted me to a famous organization of the area "Sanskriti Angan".
            There I trained for a long time under Ustad Tapan Kumar Dey and later Ustad Badal Das.Later I learned from Sujit Mustafa,   Abu Bakar Siddique, Indramohan Rajbangshi,Jahir Alim, Nurjahan Alim,Mahmudul Hasan,Ali.FM.Rezwan.
            Trained by many other Singer who are experienced in music.
           </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{url('/storage/'.$abouts[0]->image)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Singer </h3>
            <p class="fst-italic">
              I was very fond of music since my childhood.
              So my dream was to work with music. I got National Award more than once. I became champion in all Bangladesh.
              Presently I am studying music in "Jagannath University" Dhaka.              </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>18 May, 1999</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$abouts[0]->phone}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Dhaka,Bangladesh</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$abouts[0]->age}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$abouts[0]->degree}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{$abouts[0]->email}}</span></li>
                </ul>
              </div>
            </div>
            <p>
              Besides, I have been singing regularly as a enlisted artist with Bangladesh Betar  and Bangladesh Television(BTV).I have also been singing on private television.I am also working on other platforms.
            Basically I am a versatile singer. I am more comfortable in singing folk music, Nazrul Sangeet, modern songs, classical and semi classical songs, hindi ghazals.
            You are invited to visit 
            Toukir Ahmed Official Youtube Channel and Facebook Page.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">folk music <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"> Nazrul Sangeet <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">modern songs <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">classical <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">semi classica <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"> hindi ghazals <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    
        <section id="resume" class="portfolio section-bg">
          <div class="container">
    
            <div class="section-title">
              <h2>Blogs</h2>
            </div>
    
            <div class="row" data-aos="fade-up">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-app">Tv Programms</li>
                  <li data-filter=".filter-card">Shows</li>
                  <li data-filter=".filter-web">Award Shows</li>
                </ul>
              </div>
            </div>
    
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                @foreach($blogs as $blog)
                <img src="{{url('/storage/'.$blog->image1)}}" class="img-fluid" alt="">
                  @endforeach
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                @foreach($shows as $show)
                <img src="{{url('/storage/'.$show->filenames)}}" class="img-fluid" alt="">
                  @endforeach
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                @foreach($awards as $award)
                <img src="{{url('/storage/'.$award->awards)}}" class="img-fluid" alt="">
                  @endforeach

                </div>
              </div>

            </div>
    
          </div>
        </section>
       
     

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Achievement</h2>
        </div>
        @foreach($achivments as $achivment)

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{url('/storage/'.$achivment->image)}}"  class="img-fluid" alt="please upload image">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{$achivment->name}}</h3>
          <br>
            <div class="row">
              <div class="col-lg-8">
                <ul>
                  <li> <strong>Name:</strong> <span>
                   {{$achivment->name}}
                   </span></li>
                  <li> <strong>Category:</strong> <span>{{$achivment->category}}</span></li>
                  <li> <strong>Position:</strong> <span>{{$achivment->position}}</span></li>
                  <li> <strong>Year:</strong> <span>{{$achivment->year}}</span></li>
                </ul>
               
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Dhaka, Banglasesh</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>toukirahamed41@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+8801746821669</p>
              </div>

            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{route('contact-store')}}" method="post"  class="ContactForm" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
              @if(session()->has('msg'))
              <p class="alert alert-success">{{session()->get('msg')}}</p>
              @endif
              @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
             @endif
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Tech's Era</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="#">Etu Mahmuda Era</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{url('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{url('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('assets/js/main.js')}}"></script>

</body>

</html>