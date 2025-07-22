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
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                                    <a class="dropdown-item" href="#"><span><i
                                                class="fa-solid fa-arrow-right"></i></span>Balemore, Almora</a>
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
                <h2>Offers and Package</h2>
            </div>
        </section>

        <section class="section-padding ">
            <div class="container">
                <div class="row first-overview">
                    <div class="col-md-6">
                        <h3>Unique Experiences,Thoughtfully Curated </h3>
                    </div>
                    <div class="col-md-6">
                        <!-- <h1 class="main-heading text-center pb-3">Offers <span class="symbol-font">&</span> Packages</h1> -->
                        <p>Make the most of your stay with special offers and curated experiences.
                            Whether it's a spiritual retreat, an extended getaway, or a mindful journey, enjoy exclusive
                            benefits, premium comforts, and unforgettable moments.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding color-bg">
            <div class="container mb-5 pb-5">
                <div class="row  offer-categories">
                    <div class="col-md-6">
                        <img src="assets/images/offers/Ayodhya.jpg" alt="" class="w-100">
                    </div>
                    <div class="col-md-6 ">
                        <div class="room-details offers">
                            <h2>Ayodhya: A Spiritual Gateway</h2>
                            <!-- First Room Tabs -->
                            <ul class="nav nav-tabs" id="room-Tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false">Terms &
                                        Conditions</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <p>Discover the sacred city of Lord Ram, where devotion and history come alive.
                                        Explore revered temples, visit iconic landmarks, and experience the serenity of
                                        the Sarayu River.</p>

                                    <h5>Inclusions</h5>
                                    <ul class="inclusion-ul">
                                        <li>Visits to Ram Janmabhoomi, Hanuman Garhi, Kanak Bhawan</li>
                                        <li>Peaceful retreat by the Sarayu River</li>
                                        <li>Comfortable accommodation with premium amenities</li>
                                    </ul>


                                </div>
                                <div class="tab-pane" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    <div class="features-box offers">

                                        <ul class="lh-lg">
                                            <li>Offers are subject to availability and may change without prior notice.
                                            </li>
                                            <li>Advance booking is required to avail of these offers.</li>
                                            <li>The resort reserves the right to amend or withdraw any offer at its
                                                discretion.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal"
                                data-bs-target="#offerModal">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container mb-5 pb-5">
                <div class="row  offer-categories">
                    <div class="col-md-6 ">
                        <div class="room-details offers">
                            <h2>Exclusive Long Stay Offers</h2>
                            <ul class="nav nav-tabs" id="room-Tab2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab2" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane2" type="button" role="tab"
                                        aria-controls="home-tab-pane2" aria-selected="true">Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab2" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane2" type="button" role="tab"
                                        aria-controls="profile-tab-pane2" aria-selected="false">Terms &
                                        Conditions</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane show active" id="home-tab-pane2" role="tabpanel"
                                    aria-labelledby="home-tab2" tabindex="0">
                                    <p>Extend your getaway and enjoy special discounts, premium comforts, and
                                        personalized services. Perfect for workcations or leisure stays.</p>


                                    <h5>Inclusions</h5>
                                    <ul class="inclusion-ul">
                                        <li>Special discounts on extended stays</li>
                                        <li>Complimentary perks</li>
                                        <li>Premium amenities</li>
                                    </ul>

                                </div>
                                <div class="tab-pane" id="profile-tab-pane2" role="tabpanel"
                                    aria-labelledby="profile-tab2" tabindex="0">
                                    <div class="features-box offers">
                                        <ul class="lh-lg">
                                            <li>Offers are subject to availability and may change without prior notice.
                                            </li>
                                            <li>Advance booking is required to avail of these offers.</li>
                                            <li>The resort reserves the right to amend or withdraw any offer at its
                                                discretion.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal"
                                data-bs-target="#offerModal">Enquire Now</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/images/offers/Long-Stay.jpg" alt="" class="w-100">
                    </div>
                </div>
            </div>


            <div class="container mb-5 pb-5">
                <div class="row offer-categories">
                    <div class="col-md-6">
                        <img src="assets/images/offers/Buddhist.jpg" alt="" class="w-100">
                    </div>
                    <div class="col-md-6 ">
                        <div class="room-details offers">
                            <h2>Buddhist Pilgrimage Experience</h2>
                            <ul class="nav nav-tabs" id="room-Tab2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab3" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane3" type="button" role="tab"
                                        aria-controls="home-tab-pane3" aria-selected="true">Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab3" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane3" type="button" role="tab"
                                        aria-controls="profile-tab-pane3" aria-selected="false">Terms &
                                        Conditions</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent3">
                                <div class="tab-pane show active" id="home-tab-pane3" role="tabpanel"
                                    aria-labelledby="home-tab3" tabindex="0">
                                    <p>Immerse yourself in a spiritual journey through the Ayodhya-Varanasi belt,
                                        exploring significant Buddhist landmarks with curated experiences designed for
                                        inner peace and reflection.</p>

                                    <h5>Inclusions</h5>
                                    <ul class="inclusion-ul">
                                        <li>Visits to Sarnath, Ayodhya’s holy sites</li>
                                        <li>Meditation & mindfulness sessions</li>
                                        <li>Serene accommodations</li>
                                    </ul>


                                </div>
                                <div class="tab-pane" id="profile-tab-pane3" role="tabpanel"
                                    aria-labelledby="profile-tab3" tabindex="0">
                                    <div class="features-box offers">


                                        <ul class="lh-lg">
                                            <li>Offers are subject to availability and may change without prior notice.
                                            </li>
                                            <li>Advance booking is required to avail of these offers.</li>
                                            <li>The resort reserves the right to amend or withdraw any offer at its
                                                discretion.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal"
                                data-bs-target="#offerModal">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>



        </section>

        <section class="section-padding">
            <div class="container">
                <h3 class="mb-4">Terms <span class="symbol-font">&</span> Conditions:</h3>

                <ul class="lh-lg">
                    <li>Offers are subject to availability and may change without prior notice.</li>
                    <li>Advance booking is required to avail of these offers.</li>
                    <li>The resort reserves the right to amend or withdraw any offer at its discretion.</li>
                </ul>
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




    <div class="modal fade" id="offerModal" tabindex="-1" aria-labelledby="offerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="offerModalLabel">Enquire Now</h1>
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
                                        <option value="select-offer" selected disabled>Select Offer</option>
                                        <option value="Ayodhya: A Spiritual Gateway">Ayodhya: A Spiritual Gateway
                                        </option>
                                        <option value="Exclusive Long Stay Offers">Exclusive Long Stay Offers</option>
                                        <option value="Buddhist Pilgrimage Experience">Buddhist Pilgrimage Experience
                                        </option>
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