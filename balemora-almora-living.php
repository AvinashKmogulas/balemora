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
                <div class="menuBtn">
                    <div class="bar_line"></div>
                    <div class="bar_line"></div>
                    <div class="bar_line"></div>
                </div>

                <div class="logo">
                    <a href="index.html">
                        <img src="assets/logos/newLogowhite.png" alt="" class="white-logo">
                        <img src="assets/logos/newLogowhitecolored.png" alt="" class="color-logo">
                    </a>
                </div>                
                <button class="header-book-now" data-bs-toggle="modal" data-bs-target="#bookingModal" type="button">Book Now</button>
            </div>
        </div>
    </header>

    <div class="side-bar">
        <div class="close-btn">X</div>
        <h3><a href="index.html"> Balemora </a> </h3>
        <ul class="navbar-nav">            
            <!-- <li class="nav-item"><span class="nav-link">Balemora Almora </span> </li> -->
            <li class="nav-item"><a href="balemora-almora-overview.html" class="nav-link">Home </a> </li>
            <li class="nav-item"><a href="balemora-wellness.html" class="nav-link">Balemora Wellness </a> </li>
            <li class="nav-item"><a href="balemora-almora-living.html" class="nav-link">Living </a> </li>
            <li class="nav-item"><a href="balemora-almora-gallery.html" class="nav-link">Gallery </a> </li>
            <li class="nav-item"><a href="balemora-almora-special-offers.html" class="nav-link">Special Offers </a> </li>
            <li class="nav-item"><a href="balemora-almora-contact-us.html" class="nav-link">Contact Us </a> </li>
        </ul>
    </div>

  <main>
    <section class="inner-pages-banner almora-living-bg">
      <div class="container">
        <h2>Fine Living</h2>
      </div>
    </section>
    
    <section class="section-padding ">
      <div class="container">
        <div class="row first-overview">
          <div class="col-md-6">
            <h3>Your Luxuriously Authentic Stay</h3>
          </div>
          <div class="col-md-6">
            <!-- <h1 class="main-heading text-center pb-3">Heritage Dining</h1> -->
            <p class="">Unwind in thoughtfully designed spaces where comfort meets elegance. Whether seeking a peaceful
              retreat or a luxurious escape, enjoy breathtaking views, premium amenities, and warm hospitality for a
              truly memorable stay.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding color-bg">
      <div class="container">
        <div class="row rooms-category">
          <div class="col-md-6">
            <div class="owl-carousel owl-theme room-page-slider">
              <div class="item"><img src="assets/images/rooms/almora_room_1.jpg" alt="" class="w-100"> </div>
              <div class="item"><img src="assets/images/rooms/almora_room_2.jpg" alt="" class="w-100"> </div>
              <div class="item"><img src="assets/images/rooms/almora_room_3.png" alt="" class="w-100"> </div>
              <div class="item"><img src="assets/images/rooms/almora_room_4.jpg" alt="" class="w-100"> </div>
              <div class="item"><img src="assets/images/rooms/almora_room_5.jpg" alt="" class="w-100"> </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="room-details">
              <h2>The Cottage </h2>
              <!-- First Room Tabs -->
              <ul class="nav nav-tabs" id="room-Tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Overview</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Amenities</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                  tabindex="0">
                  <p>Nestled in the serenity of the Himalayas, these wooden cottages combine rustic charm with modern comfort. Thoughtfully designed for privacy and well-being, each space opens to panoramic mountain vistas, inviting you to reconnect with nature, restore balance, and experience a truly unforgettable wellness escape. </p>
                  <div class="details-icons">
                    <div class="icon-text">
                      <div class="icon"><img src="assets/icons/bed.png" alt="king bed"> </div>
                      <div class="text">King Beds</div>
                    </div>
                    <div class="icon-text">
                      <div class="icon"><img src="assets/icons/user.png" alt="people"> </div>
                      <div class="text">4 Adults </div>
                    </div>
                    <!-- <div class="icon-text">
                      <div class="icon"><img src="assets/icons/size-new.png" alt="room size"> </div>
                      <div class="text">900 Sq.Ft</div>
                    </div> -->
                    <div class="icon-text">
                      <div class="icon"><img src="assets/icons/window-frame.png" alt="lake and golf view"> </div>
                      <div class="text">Mountain View </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                  <div class="features-box">
                    <ul>
                      <li>All Meals Included </li>
                      <!-- <li>Air Conditioning & Heating</li> -->
                      <!-- <li>Open-to-Sky Sunbath</li> -->
                      <li>High-Speed Internet</li>
                      <li>TV</li>
                      <li>Tea & Coffee Maker</li>
                      <li>Mini Fridge</li>
                      <li>In-Room Safe</li>
                      <li>In-Room Dining</li>
                      <li>Intercom</li>
                      <!-- <li>Swimming Pool Access</li> -->
                      <!-- <li>Golf Cart Access</li> -->
                    </ul>
                    <!-- <a href="javascript:void(0)" class="book-now" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</a> -->
                  </div>
                </div>
              </div>
              <a href="javascript:void(0)" class="book-now" data-bs-toggle="modal" data-bs-target="#bookingModal">Book
                Now</a>
            </div>
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

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js"></script>
    <script defer src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script defer src="assets/js/script.js"></script>
    
</body>

</html>