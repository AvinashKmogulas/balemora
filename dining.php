<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Balemora</title>
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/css/lightbox.min.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
  <header>
    <div class="container">
      <div class="header-content">
        <div class="logo">
          <a href="index.html">
            <img src="assets/logos/newLogowhite.png" alt="" class="white-logo">
            <img src="assets/logos/newLogowhitecolored.png" alt="" class="color-logo">
          </a>
        </div>
        <nav id="nav-bar">
          <ul>
            <div class="dropdown">
              <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Our Retreats
              </button>
              <ul class="dropdown-menu">
                <li>
                  <p>Lucknow</p>
                  <a class="dropdown-item" href="#">
                    <span><i class="fa-solid fa-arrow-right"></i></span>Balemore NH27, Lucknow</a>
                </li>
                <li>
                  <p>Almora</p>
                  <a class="dropdown-item" href="#"><span><i class="fa-solid fa-arrow-right"></i></span>Balemore,
                    Almora</a>
                </li>
              </ul>
            </div>
            <li><a href="wellness.html">Balemore Wellness</a></li>
            <li><a href="#">Events & Celebration </a></li>
            <li><a href="#">About Us </a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Offers & Packages</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
        <button class="header-book-now" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</button>
      </div>
    </div>
  </header>
  <main>
    <section class="inner-pages-banner offers-bg">
      <div class="container">
        <h2>Fine Dining</h2>
      </div>
    </section>
    <section class="section-padding ">
      <div class="container">
        <div class="row first-overview">
          <div class="col-md-6">
            <h3>A Table Set for the Senses</h3>
          </div>
          <div class="col-md-6">
            <!-- <h1 class="main-heading text-center pb-3">Heritage Dining</h1> -->
            <p>Blending flavor, artistry, and authenticity, every dish is crafted with fresh, local sourced ingredients.
              From elegant dining to relaxed post-game indulgence, every meal invites you to savor and unwind.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section-padding color-bg">
      <div class="container mb-5 pb-5">
        <div class="row dining-category-section">
          <div class="col-md-6 dine-category-image">
            <img src="assets/images/dining/fusion-feast.jpg" alt="" class="w-100">
          </div>
          <div class="col-md-6 ">
            <div class="room-details">
              <h2>Fusion Feast</h2>
              <div class="dine-content">
                <p>A multi-cuisine dining destination where global flavors come together in a carefully curated menu.
                  From classic favorites to innovative creations, every dish is crafted to offer a delightful culinary
                  experience.</p>
                <ul>
                  <li>
                    <span>
                      <img src="assets/icons/dining-icon.png" alt="">
                    </span> Multi Cuisine
                  </li>
                  <li>
                    <span>
                      <img src="assets/icons/opening-hours.png" alt="">
                    </span> 24 Hours
                  </li>
                </ul>
                <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal"
                  data-bs-target="#dineModal">Reserve A Table</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mb-5 pb-5">
        <div class="row dining-category-section">

          <div class="col-md-6 ">
            <div class="room-details">
              <h2>The Austin Café</h2>
              <div class="dine-content">
                <p>A charming café serving freshly brewed coffee and an array of delicious baked treats. Whether for a
                  quick refreshment or a leisurely break, it’s the perfect place to relax and indulge in comforting
                  flavors.</p>
                <ul>
                  <li>
                    <span>
                      <img src="assets/icons/dining-icon.png" alt="">
                    </span>Coffee & Bakery
                  </li>
                  <li>
                    <span>
                      <img src="assets/icons/opening-hours.png" alt="">
                    </span>24 Hours
                  </li>
                </ul>
                <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal"
                  data-bs-target="#dineModal">Reserve A Table</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 dine-category-image">
            <img src="assets/images/dining/austin-cafe.jpg" alt="" class="w-100">
          </div>
        </div>
      </div>
      <div class="container mb-5 pb-5">
        <div class="row dining-category-section">
          <div class="col-md-6 dine-category-image">
            <img src="assets/images/dining/rustic-barrel.jpg" alt="" class="w-100">
          </div>
          <div class="col-md-6 ">
            <div class="room-details">
              <h2>The Rustic Barrel</h2>
              <div class="dine-content">
                <p>The perfect spot to unwind after a day on the greens, offering expertly crafted cocktails and
                  flavorful bar bites. With a warm ambiance and a well-stocked bar, it’s an inviting retreat for golfers
                  and guests alike.</p>
                <ul>
                  <li>
                    <span>
                      <img src="assets/icons/dining-icon.png" alt="">
                    </span> Cocktails & Bar Bites
                  </li>
                  <li>
                    <span>
                      <img src="assets/icons/opening-hours.png" alt="">
                    </span> 24 Hours
                  </li>
                </ul>
                <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal"
                  data-bs-target="#dineModal">Reserve A Table</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row dining-category-section">

          <div class="col-md-6 ">
            <div class="room-details">
              <h2>In Room Dining</h2>
              <div class="dine-content">
                <p>Enjoy a delightful dining experience in the comfort of your room with a menu featuring an array of
                  thoughtfully crafted dishes, light bites, and refreshing beverages, available around the clock.</p>
                <ul>
                  <li>
                    <span>
                      <img src="assets/icons/dining-icon.png" alt="">
                    </span> Multi Cuisine
                  </li>
                  <li>
                    <span>
                      <img src="assets/icons/opening-hours.png" alt="">
                    </span> 24 Hours
                  </li>
                </ul>
                <!-- <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal" data-bs-target="#dineModal">Reserve A Table</a> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 dine-category-image">
            <img src="assets/images/dining/in-room-dining.jpg" alt="" class="w-100">
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="new-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="footer-logo"><a href="/"><img src="assets/logos/newLogowhite.png" alt=""> </a> </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="quick-link-box">
                        <h6>Quick Links</h6>
                        <ul>
                            <li><a class="text-white" href="index.html">Home</a></li>
                            <li><a class="text-white" href="balemora-wellness.html">Balemora Wellness</a></li>
                            <li><a class="text-white" href="balemora-lucknow-events-celebration.html">Events & Celebration</a></li>
                            <li><a class="text-white" href="about-us.html">About Us</a></li>
                            <li><a class="text-white" href="gallery.html">Gallery</a></li>
                            <li><a class="text-white" href="special-offers.html">Special Offers</a></li>
                            <li><a class="text-white" href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-resort">
                        <h6>Our Retreats</h6>
                        <p><a href="balemora-lucknow-overview.html"><b>Lucknow</b><br>Balemora NH27 Lucknow, Uttar Pradesh</a> </p>
                        <p><a href="balemora-almora-overview.html"><b>Almora</b><br>Balemora Almora, Uttarakhand</a> </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h6>Contact Us</h6>
                    <p class="f-info"><a href="tel:919005430333"><i class="fa-solid fa-phone"></i> +91 9005430333 </a> </p>
                    <p class="f-info">
                        <a href="mailto:customercare@balemorawellnessretreats.com"><i class="fa-solid fa-envelope"></i> 
                        customercare@balemorawellnessretreats.com </a><br>
                        <a href="mailto:ceo.dr.sumitoberoi@balemorawellnessretreats.com"><i class="fa-solid fa-envelope"></i> 
                        ceo.dr.sumitoberoi@balemorawellnessretreats.com </a>                        
                    </p>

                    <h6>Follow Us</h6>
                    <div class="footer-social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i> </a>
                        <a href="#"><i class="fab fa-instagram"></i> </a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i> </a>
                        <a href="#"><i class="fa-brands fa-youtube"></i> </a>
                        <a href="#"><img src="assets/images/x-icon.png" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-4">
                    <p class="copyright">Copyright &copy; 2025 Balemora. All Rights Reserved. Powered By <a href="https://www.internetmoguls.com/" style="color: #fff;" target="_blank">Internet Moguls</a> </p>
                </div>
            </div>
        </div>
    </footer>
    
  <!-- Modal -->
  <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="bookingModalLabel">Book Now</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" class="booking-popup-form">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input type="text" name="" id="" placeholder="Your Name">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input type="tel" name="" id="" placeholder="Phone No">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input type="text" name="" id="" placeholder="Check In">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input type="text" name="" id="" placeholder="Check Out">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <select name="" id="">
                    <option value="select-room" selected disabled>Select Rooms</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <select name="" id="">
                    <option value="select-adults" selected disabled>Select Adults</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <select name="" id="">
                    <option value="select-adults" selected disabled>Select Child</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <input type="submit" name="" id="" value="Submit">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="dineModal" tabindex="-1" aria-labelledby="dineModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="dineModalLabel">Enquire Now</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" class="offer-popup-form">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input type="text" name="" id="" placeholder="Your Name">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input type="email" name="" id="" placeholder="Email">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input type="tel" name="" id="" placeholder="Phone No">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <select name="" id="">
                    <option value="select-restaurant" selected disabled>Select Restaurant</option>
                    <option value="Fusion Feast">Fusion Feast</option>
                    <option value="The Austin Café">The Austin Café</option>
                    <option value="The Rustic Barrel">The Rustic Barrel</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <textarea name="" id=""></textarea>
              </div>
              <div class="col-12">
                <input type="submit" name="" id="" value="Submit">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js"></script>
  <script defer src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script defer src="assets/js/script.js"></script>
</body>

</html>