<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BusReserversion.lk</title>
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <header class="p-3 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
            <li><a href="#Services" class="nav-link px-2 text-white">Services</a></li>
            <li><a href="#about" class="nav-link px-2 text-white">About</a></li>
            <li><a href="#Contact" class="nav-link px-2 text-white">Contact us</a></li>
          </ul>
  
          <div class="text-end">
            <a type="button" href="signin.php" class="btn btn-outline-light me-2">Login</a>
            <a type="button" href="signup.php" class="btn btn-primary">Sign-up</a>
          </div>
        </div>
      </div>
    </header>
    <!--Main-->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="bd-placeholder-img" width="100%" src="c3.jpg" aria-hidden="true">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="signup.php">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" src="c3.jpg" aria-hidden="true">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="signup.php">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" src="c3.jpg" aria-hidden="true">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
			  <p><a class="btn btn-lg btn-primary" href="signup.php">Sign up today</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container px-4 py-5" id="Services">
      <h2 class="pb-2 border-bottom">Our Services</h2>
  
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/unsplash-photo-1.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
              <ul class="d-flex list-unstyled mt-auto">
               
              </ul>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/unsplash-photo-2.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
              <ul class="d-flex list-unstyled mt-auto">
                
              </ul>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/unsplash-photo-3.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
              <ul class="d-flex list-unstyled mt-auto">
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" id="about">
      <h1 class="text-dark">About us<hr></h1>
      <div class="card ps-5 pt-5 pe-5 pb-5">
        Welcome to Your Bus Reservation System, your go-to solution for convenient and hassle-free bus booking experiences. 
        We are a leading platform committed to revolutionizing the way you plan your journeys and make bus reservations. 
        Our mission is to provide travelers with a seamless and reliable way to book bus tickets, 
        ensuring that your adventures, commutes, and travels are enjoyable and stress-free.
      </div>
    </div>

    <div class="container" id="Contact">
      <h1 class="mt-5">Contact Us<hr></h1>
      <div class="row mt-4">
          <div class="col-md-6">
              <form action="contacts.php" method="post">
                  <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email"placeholder="Your Email">
                  </div>
				  <div class="mb-3">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone"placeholder="Your Phone Number">
                  </div>
                  <div class="mb-3">
                      <label for="message" class="form-label">Message</label>
                      <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
          <div class="col-md-6">
              <h4>Contact Information</h4>
              <address>
                  <strong>BusReservation.lk</strong><br>
                  No.125, Galle Road<br>
                  Bambalapitiya, Colombo 04<br>
                  <abbr title="Phone">Phone:</abbr> 011- 220 5040<br>
                  <abbr title="Email">E-mail:</abbr> <a href="mailto:info@yourcompany.com">info@BusReservation.lk</a>
              </address>
          </div>
      </div>
  </div>
    <!--End Main-->
    
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="#Contact" class="nav-link px-2 text-body-secondary">Contact us</a></li>
          <li class="nav-item"><a href="#Services" class="nav-link px-2 text-body-secondary">Services</a></li>
          <li class="nav-item"><a href="#about" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul>
        <p class="text-center text-body-secondary">&copy; 2023 BusReserversion.lk</p>
      </footer>
    </div>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>