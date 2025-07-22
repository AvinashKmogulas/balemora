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
        <div class="container-fluid">
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
                <button class="header-book-now" data-bs-toggle="modal" data-bs-target="#bookingModal" type="button">Book Your Stay</button>
            </div>
        </div>
    </header>

    <div class="side-bar">        
        <div class="close-btn">X</div>
        <h3><a href="index.html"> Balemora </a> </h3>
        <ul class="navbar-nav">
            <li class="dropdown">
                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Our Retreats</button>
                <ul class="dropdown-menu">
                    <li>
                        <p>Lucknow</p>
                        <a class="dropdown-item" href="balemora-lucknow-overview.html"><i class="fa-solid fa-chevron-right"></i> Balemora NH27, Lucknow</a>
                    </li>
                    <li>
                        <p>Almora</p>
                        <a class="dropdown-item" href="balemora-almora-overview.html"><i class="fa-solid fa-chevron-right"></i> Balemora, Almora</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="balemora-wellness.html" class="nav-link">Balemora Wellness</a> </li>
            <li class="nav-item">
                <a href="balemora-lucknow-events-celebration.html" class="nav-link">Events <span class="symbol-font mx-1">&</span> Celebration</a>
            </li>
            <li class="nav-item"><a href="about-us.html" class="nav-link">About Us</a> </li>
            <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a> </li>
            <li class="nav-item"><a href="special-offers.html" class="nav-link">Special Offers</a> </li>
            <li class="nav-item"><a href="contact-us.html" class="nav-link">Contact Us</a> </li>
        </ul>
    </div>

    <main>
        <section class="main-home-banner">
            <video autoplay loop muted class="banner-video">
                <source src="assets/videos/Main_Home_Page.MP4" type="video/mp4">
            </video>
            <div class="main-home-banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1"><h2 class="text-center">Welcome to Balemora </h2> </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding white-flower-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center home-overview">
                        <h3 class="main-heading pb-0" data-aos="fade-up" data-aos-duration="1200">Where Ancient Wisdom</h3>
                        <h3 class="main-heading" data-aos="fade-up" data-aos-duration="1200">Meets Modern Harmony</h3>
                        <p class="mb-3" data-aos="fade-up" data-aos-duration="1200">Balemora invites you to discover two soulful destinations, Almora and NH27 Lucknow, where timeless traditions blend seamlessly with the rhythm of today. Each retreat offers a distinct setting to pause, reflect and restore. Rooted in nature and guided by heritage, Balemora is a journey of balance and renewal, thoughtfully designed to harmonize ancient wisdom with modern well-being. </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding gold-wellnes-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="main-heading" data-aos="fade-up" data-aos-duration="1200">Balemora Wellness</h2>
                        <p data-aos="fade-up" data-aos-duration="1200">Balemora Wellness brings together Ayurvedic treatments, Kerala therapies, yoga, mindful nutrition and nature meditation, each guiding you on your unique path to harmony. </p>
                    </div>
                </div>
            </div>            
        </section>

        <section class="wellness_slider owl-carousel">
            <div class="ws_item">
                <div class="ws_img"><img src="assets/images/wellness_img1.jpg" alt=""> </div>
                <div class="ws_text">
                    <h3>Ayurvedic Treatments </h3>
                    <p>Ancient hands meet modern needs, guiding you back to balance with therapies that heal from skin to soul. Every touch becomes a conversation between nature and you.</p>
                    <div class="mt-3"><div class="cs-btn"><a class="btn" href="balemora-wellness.html">Explore More</a> </div> </div>
                </div>
            </div>
            <div class="ws_item">
                <div class="ws_img"><img src="assets/images/wellness_img2.jpg" alt=""> </div>
                <div class="ws_text">
                    <h3>Ayurvedic Nutrition </h3>
                    <p>Food becomes medicine as you savor meals crafted to nourish, cleanse, and restore. Each bite carries the wisdom of herbs, spices, and mindful intention. </p>
                    <div class="mt-3"><div class="cs-btn"><a class="btn" href="balemora-wellness.html">Explore More</a> </div> </div>
                </div>
            </div>
            <div class="ws_item">
                <div class="ws_img"><img src="assets/images/wellness_img3.jpg" alt=""> </div>
                <div class="ws_text">
                    <h3>Yoga </h3>
                    <p>Awaken your body’s quiet intelligence through mindful movement and breath. It is a practice where strength softens and stillness becomes your truest power.</p>
                    <div class="mt-3"><div class="cs-btn"><a class="btn" href="balemora-wellness.html">Explore More</a> </div> </div>
                </div>
            </div>
            <div class="ws_item">
                <div class="ws_img"><img src="assets/images/wellness_img4.jpg" alt=""> </div>
                <div class="ws_text">
                    <h3>Detox </h3>
                    <p>Shed what no longer serves in body, mind, and spirit. This is a cleansing designed to purify and renew your sense of lightness and vitality.</p>
                    <div class="mt-3"><div class="cs-btn"><a class="btn" href="balemora-wellness.html">Explore More</a> </div> </div>
                </div>
            </div>
        </section>

        <section class="section-padding color-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 pb-5 text-center home-overview">
                        <h3 class="main-heading" data-aos="fade-up" data-aos-duration="1200">TWO DESTINATIONS. ONE PHILOSOPHY. </h3>
                        <p class="mb-3" data-aos="fade-up" data-aos-duration="1200">Rooted in Ayurveda and slow living, two destinations, each with its own soul. From the grounded elegance of Lucknow to the elevated quiet of Almora, both embrace one timeless philosophy: to live slowly, with intention, and in harmony with the land. </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="destination-image" data-aos="fade-up" data-aos-duration="1200">
                            <button class="full-video" data-bs-toggle="modal" data-bs-target="#BL-video" type="button">
                                <img src="assets/images/destinations/Barabanki-destination.jpg" alt="" class="w-100">
                                <video autoplay loop muted class="property-video">
                                    <source src="assets/videos/IMG_1088.MP4" type="video/mp4">
                                </video>
                                <div class="overlayer"><span>Full Screen </span> </div>
                            </button>
                        </div>
                        <div class="destination-content" data-aos="fade-up" data-aos-duration="1200">
                            <!-- <img src="assets/images/logo.png" alt="" class="prop-logo mb-3"> -->
                            <h5>Balemora NH27 Lucknow</h5>
                            <p>Nestled in lush landscapes, this retreat is a haven for families, couples and those seeking quiet luxury with curated wellness experiences. </p>
                            <a href="balemora-lucknow-overview.html">Explore <span class="arrow-icon"><img src="assets/icons/black-arrow.png" alt=""></span> </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="destination-image" data-aos="fade-up" data-aos-duration="1200">
                            <button class="full-video" data-bs-toggle="modal" data-bs-target="#BA-video" type="button">
                                <img src="assets/images/destinations/Almora-destination.jpg" alt="" class="w-100">
                                <video autoplay loop muted class="property-video">
                                    <source src="assets/videos/IMG_1089.MP4" type="video/mp4">
                                </video>
                                <div class="overlayer"><span>Full Screen </span> </div>
                            </button>
                        </div>                    
                        <div class="destination-content" data-aos="fade-up" data-aos-duration="1200">
                            <!-- <img src="assets/logos/property2.png" alt="" class="prop-logo"> -->
                            <h5>Balemora Almora</h5>
                            <p>Set in the stillness of Uttarakhand, this wellness-first retreat is where nature, comfort, and mindful living come together. </p>
                            <a href="balemora-almora-overview.html">Explore <span class="arrow-icon"><img src="assets/icons/black-arrow.png" alt=""></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade fullScreen" id="BL-video" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-5" id="bookingModalLabel">Balemora NH27 Lucknow </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video controls class="property-video">
                            <source src="assets/videos/IMG_1088.MP4" class="" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade fullScreen" id="BA-video" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-5" id="bookingModalLabel">Balemora Almora </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video controls class="property-video">
                            <source src="assets/videos/IMG_1088.MP4" class="" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->


        <section class="section-padding wellness-cuisine">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="wc_img1" data-aos="fade-up" data-aos-duration="1200">
                            <img src="assets/images/dine_img1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="wc_img2" data-aos="zoom-in" data-aos-duration="1200">
                            <img src="assets/images/dine_img2.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1200">
                        <h5>WELLNESS CUISINE</h5>
                        <h3 class="main-heading">Authentic Culinary Experiences </h3>
                        <p>Nutrition plays a pivotal role in the retreat's philosophy of wellness. Guests are treated to an array of gourmet meals that are both nutritious and delicious. The menu is crafted by experienced chefs in collaboration with nutritionists and Ayurveda experts, ensuring that every dish is tailored to individual dietary needs while maintaining an emphasis on locally sourced, organic ingredients.</p>
                        <p>Signature offerings include farm-to-table meals, Ayurvedic detox teas, gluten-free and vegan options, and custom-designed diets for specific health goals. </p>
                        <!-- <div class="mt-4"><a href="">Know More</a> </div> -->
                    </div>
                </div>
            </div>
        </section>

        <section class="home-special-moment">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3 class="main-heading">Celebrate Special Moments</h3>
                        <h5>AT BALEMORA NH27 LUCKNOW </h5>
                        <p>From intimate weddings to grand celebrations, Balemora provides breathtaking settings for your most cherished moments. With bespoke services, curated dining and stunning backdrops, every event becomes unforgettable.</p>
                        <div class="mt-4"><a href="balemora-lucknow-events-celebration.html">Know More</a> </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding color-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-heading text-center pb-5">Special Offers</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="home-offer-slider owl-carousel owl-theme">
                            <div class="item">
                                <img src="assets/images/offers/Ayodhya.jpg" alt="">
                                <div class="content">
                                    <h4>Ayodhya: A Spiritual Gateway</h4>
                                    <div class="offer-for-property">Balemora NH27 Lucknow</div>
                                    <p>Discover the sacred city of Lord Ram, where devotion and history come alive.
                                        Explore revered temples, visit iconic landmarks, and experience the serenity of
                                        the Sarayu River.</p>
                                    <a href="special-offers.html" data-aos="fade-up" data-aos-duration="1200">Explore More <span class="arrow-icon"><img src="assets/icons/black-arrow.png" alt=""></span> </a>
                                </div>
                            </div>
                            
                            <div class="item">
                                <img src="assets/images/offers/Buddhist.jpg" alt="">
                                <div class="content">
                                    <h4>Buddhist Pilgrimage Experience</h4>
                                    <div class="offer-for-property">Balemora NH27 Lucknow </div>
                                    <p>Immerse yourself in a spiritual journey through the Ayodhya-Varanasi belt,
                                        exploring significant Buddhist landmarks with curated experiences designed for
                                        inner peace and reflection.</p>
                                    <a href="special-offers.html" data-aos="fade-up" data-aos-duration="1200">Explore More <span class="arrow-icon"><img src="assets/icons/black-arrow.png" alt=""></span> </a>
                                </div>
                            </div>
                            
                            <div class="item">
                                <img src="assets/images/offers/Long-Stay.jpg" alt="">
                                <div class="content">
                                    <h4>Exclusive Long Stay Offers</h4>
                                    <div class="offer-for-property">Balemora NH27 Lucknow / Balemora Almora </div>
                                    <p>Extend your getaway and enjoy special discounts, premium comforts, and
                                        personalized services. Perfect for workcations or leisure stays.</p>
                                    <a href="special-offers.html" data-aos="fade-up" data-aos-duration="1200">Explore More <span class="arrow-icon"><img src="assets/icons/black-arrow.png" alt=""></span> </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding home-gallery-sec ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-heading text-center">Gallery</h3>
                    </div>
                </div>
                <div class="row home-gallery">
                    <div class="owl-carousel owl-theme home-gallery-slider">
                        <div class="item">
                            <a href="assets/images/Almora_Gallery/1.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/Almora_Gallery/1.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="assets/images/Almora_Gallery/2.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/Almora_Gallery/2.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="assets/images/Almora_Gallery/3.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/Almora_Gallery/3.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="assets/images/Almora_Gallery/4.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/Almora_Gallery/4.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="assets/images/Almora_Gallery/5.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/Almora_Gallery/5.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="assets/images/gallery/1.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/1.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="assets/images/gallery/2.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/2.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="assets/images/gallery/3.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/3.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="assets/images/gallery/4.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/4.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="assets/images/gallery/5.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/5.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="assets/images/gallery/6.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/6.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="assets/images/gallery/7.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/7.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="assets/images/gallery/8.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/8.jpg" alt="" class="w-100 horizontal-border">
                            </a>
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
                            <div class="col-12"><input type="submit" name="" id="" value="Submit"> </div>
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