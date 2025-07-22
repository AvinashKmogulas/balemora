<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heritage Golf Club & Resorts</title>
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


<style>#nav-bar ul {display: none;} </style>

<body>

    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo-white.png" alt="" class="white-logo">
                        <img src="assets/images/logo.png" alt="" class="color-logo">
                    </a>
                </div>
                <nav id="nav-bar">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Wellness</a></li>
                        <li><a href="#">Golf Club</a></li>
                        <li><a href="living.html">Living</a></li>
                        <li><a href="dining.html">Dining</a></li>
                        <li><a href="wedding.html">Wedding</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <button class="header-book-now" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</button>
            </div>
        </div>
    </header>

    <main>
        <div class="home-banner-tabbing">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane show active" id="pills-Main" role="tabpanel" aria-labelledby="pills-Main-tab"
                    tabindex="0">
                    <div class="home-banner-Main-bg tab-banners">
                        <video autoplay loop muted class="banner-video">
                            <source src="assets/videos/banner-video.MP4" type="video/mp4">
                        </video>

                        <div class="home-banner-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">
                                        <h2 class="text-center">Welcome to <br> Heritage Golf Club <span
                                                class="symbol-font">&</span> Resorts</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane " id="pills-Accommodation" role="tabpanel"
                    aria-labelledby="pills-Accommodation-tab" tabindex="0">
                    <div class="home-banner-accomodation-bg tab-banners">
                        <div class="container">
                            <div class="home-banner-content">
                                <div class="col-md-8">
                                    <h2>A Stay Beyond the Ordinary</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane " id="pills-Golf" role="tabpanel" aria-labelledby="pills-Golf-tab" tabindex="0">
                    <div class="home-banner-golf-bg tab-banners">
                        <div class="container">
                            <div class="home-banner-content">
                                <div class="col-md-8">
                                    <h2>Where Nature Sets the Course</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane " id="pills-Wellness" role="tabpanel" aria-labelledby="pills-Wellness-tab"
                    tabindex="0">
                    <div class="home-banner-wellness-bg tab-banners">
                        <div class="container">
                            <div class="home-banner-content">
                                <div class="col-md-8">
                                    <h2>A Haven for Mind <span class="symbol-font">&</span> Body</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane " id="pills-Dining" role="tabpanel" aria-labelledby="pills-Dining-tab"
                    tabindex="0">
                    <div class="home-banner-dining-bg tab-banners">
                        <div class="container">
                            <div class="home-banner-content">
                                <div class="col-md-8">
                                    <h2>Flavors That Tell a Story</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane " id="pills-Wedding" role="tabpanel" aria-labelledby="pills-Wedding-tab"
                    tabindex="0">
                    <div class="home-banner-wedding-bg tab-banners">
                        <div class="container">
                            <div class="home-banner-content">
                                <div class="col-md-8">
                                    <h2>Unforgettable Moments, Beautifully Crafted</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="container tabbing-btn-container">
                <ul class="nav nav-pills" id="banner-tabbing" role="tablist">

                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-Main-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Main" type="button" role="tab" aria-controls="pills-Main"
                            aria-selected="true">
                            <img src="assets/icons/white-golf.png" alt="">
                            <span>Home</span>
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Wellnesst-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Wellness" type="button" role="tab" aria-controls="pills-Wellness"
                            aria-selected="false">
                            <img src="assets/icons/wellness-icon.png" alt="">
                            <span>Wellness</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Golf-tab" data-bs-toggle="pill" data-bs-target="#pills-Golf"
                            type="button" role="tab" aria-controls="pills-Golf" aria-selected="false">
                            <img src="assets/icons/golf-icon.png" alt="">
                            <span>Golf</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Accommodation-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Accommodation" type="button" role="tab"
                            aria-controls="pills-Accommodation" aria-selected="true">
                            <img src="assets/icons/accommodation-icon.png" alt="">
                            <span>Living</span>
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Dining-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Dining" type="button" role="tab" aria-controls="pills-Dining"
                            aria-selected="false">
                            <img src="assets/icons/dining-icon.png" alt="">
                            <span>Dining</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Wedding-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Wedding" type="button" role="tab" aria-controls="pills-Wedding"
                            aria-selected="false">
                            <img src="assets/icons/wedding-icon.png" alt="">
                            <span>Wedding</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>


        <section class="section-padding bg-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center home-overview">
                        <!-- <h1 class="main-heading blue-color" data-aos="fade-up" data-aos-duration="1200">Curating Meaningful Journeys With Heritage Golf Club <span class="symbol-font">&</span> Resorts</h1> -->
                        <p class="mb-3" data-aos="fade-up" data-aos-duration="1200">Heritage Golf Club & Resorts is more
                            than a golfing destination — it's a sanctuary where nature, heritage and recreation
                            converge. Whether you're an avid golfer, a leisure traveler, or seeking a serene escape, our
                            world-class facilities, breathtaking surroundings, and heartfelt hospitality set the
                            benchmark for excellence.</p>

                        <a href="#" data-aos="fade-up" data-aos-duration="1200">Learn More About Us <span
                                class="arrow-icon"><img src="assets/icons/black-arrow.png" alt=""></span></a>
                    </div>
                </div>
            </div>
        </section>



        <section class="section-padding perfect-destination-section">
            <div class="container">
                <div class="col-md-10 offset-md-1 text-center">
                    <h2 class="main-heading pb-3">Find Your Perfect Destination</h2>
                    <p>Each property offers a unique escape, where the beauty of the surroundings meets a sense of calm
                        and balance. Immerse yourself in a retreat designed for relaxation, reflection, and connection
                        with nature.</p>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="property-box">
                            <div class="img-box">
                                <img src="assets/images/heritage-golf.jpg" alt="">
                            </div>
                            <div class="content-box">
                                <h4>BARABANKI, UTTAR PRADESH</h4>
                                <h3>Heritage Golf Club <span class="symbol-font">&</span> Resorts</h3>
                                <p>Heritage Golf Club & Resorts offers a life where nature and elegance come together
                                    effortlessly. Thoughtfully designed within lush, green surroundings, it provides a
                                    refined way of living, where every day feels like a retreat in the heart of nature.
                                </p>
                                <a href="#">Know More <span class="arrow-icon"><img src="assets/icons/black-arrow.png"
                                            alt=""></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="property-box">
                            <div class="img-box">
                                <img src="assets/images/heritage-wood-villa.jpg" alt="">
                            </div>
                            <div class="content-box">
                                <h4>ALMORA, UTTARAKHAND</h4>
                                <h3>Heritage Wood Villas</h3>
                                <p>Tucked away in the serene beauty of Dhamas, Almora, WoodVillas offers a life where
                                    luxury and nature blend seamlessly. Thoughtfully designed amidst Uttarakhand’s
                                    breathtaking landscapes, it provides a peaceful retreat where comfort and the charm
                                    of the Himalayas come together effortlessly.</p>
                                <a href="#">Know More <span class="arrow-icon"><img src="assets/icons/black-arrow.png"
                                            alt=""></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding green-wellnes-section">
            <div class="container">
                <h2 class="main-heading text-center pb-3">Wellness</h2>
                <div class="row">
                    <div class="col-md-12  text-center">

                        <p class="mb-3">Heritage Wellness Retreat offers pristine greenery, a serene swimming pool, and
                            holistic Kerala therapies inspired by
                            local traditions. Each experience is designed for rejuvenation, relaxation, and restoring
                            balance to mind and body</p>

                        <a href="#">Know More <span class="arrow-icon"><img src="assets/icons/golden-arrow.png"
                                    alt=""></span></a>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme wellness-slider">
                            <div class="item"><img src="assets/images/wellness2new.jpg" alt=""></div>
                            <div class="item"><img src="assets/images/wellness2.jpg" alt=""></div>
                            <div class="item"><img src="assets/images/wellness3.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="green-golf">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mini-golf-text">
                        <h6>Mini Golf Course</h6>
                        <p>AT HERITAGE GOLF CLUB & RESORTS</p>
                    </div>
                    <div class="col-md-1 position-relative">
                        <img src="assets/icons/pin.png" alt="" class="golf-pin-img" data-aos="fade-right"
                            data-aos-duration="2000">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/icons/flag-holes.png" alt="">
                        <p>holes</p>
                        <h6>18</h6>
                    </div>
                    <div class="col-md-2">
                        <img src="assets/icons/course-par.png" alt="">
                        <p>COURSE PAR</p>
                        <h6>72</h6>
                    </div>
                    <div class="col-md-2">
                        <img src="assets/icons/length.png" alt="">
                        <p> LENGTH</p>
                        <h6>6,560 yards</h6>
                    </div>
                    <div class="col-md-2">
                        <img src="assets/icons/season.png" alt="">
                        <p> SEASON</p>
                        <h6>YEAR ROUND</h6>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-golf-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="golf-sec-content text-center">
                            <h3 class="main-heading pb-3" data-aos="fade-up" data-aos-duration="1200">The Perfect Swing,
                                The Perfect Setting</h3>
                            <!-- <div class="col-md-10 offset-md-1"> -->
                            <p data-aos="fade-up" data-aos-duration="1200">A course, designed for passion
                                and precision. Seamlessly blending with nature, each hole offers a unique challenge and
                                stunning views.</p>
                            <!-- </div> -->

                            <a href="#" data-aos="fade-up" data-aos-duration="1200">Know More<span
                                    class="arrow-icon"><img src="assets/icons/green-arrow.png" alt=""></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding home-room-section color-bg">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-8 offset-md-2 mb-5">

                        <h2 class="main-heading text-center pb-3 " data-aos="fade-up"
                            data-aos-duration="1200">Your Luxuriously Authentic Stay</h2>

                        <p class="room-home-description">Discover spaces designed for your well-being, where every stay
                            keeps you in tune with nature. Surrounded by lush landscapes and refined comforts, each
                            space offers a unique charm, ensuring a serene and effortless retreat.</p>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme room-slider">
                            <div class="room-item">
                                <div class="img-container">
                                    <img src="assets/images/Family-Suite.jpg" alt="">
                                </div>
                                <div class="content">


                                    <div class="active-show-content">
                                        <div class="room-details">
                                            <div class="details">
                                                <div class="icon"> <img src="assets/icons/bed.png" alt=""></div>
                                                <div class="text">King Bed</div>
                                            </div>
                                            <div class="details">
                                                <div class="icon"> <img src="assets/icons/size-new.png" alt=""></div>
                                                <div class="text">1000 SQFT</div>
                                            </div>
                                            <div class="details">
                                                <div class="icon"> <img src="assets/icons/user.png" alt=""></div>
                                                <div class="text">4 GUEST</div>
                                            </div>
                                        </div>
                                        <h3>Heritage Family Suite</h3>

                                        <a href="#">Explore More <span class="arrow-icon"><img
                                                    src="assets/icons/black-arrow.png" alt=""></span></a>

                                    </div>

                                </div>
                            </div>
                            <div class="room-item">
                                <div class="img-container">
                                    <img src="assets/images/Private-Villa.jpg" alt="">
                                </div>
                                <div class="content">

                                    <div class="active-show-content">
                                        <div class="room-details">
                                            <div class="details">
                                                <div class="icon"> <img src="assets/icons/bed.png" alt=""></div>
                                                <div class="text">King Bed</div>
                                            </div>
                                            <div class="details">
                                                <div class="icon"> <img src="assets/icons/size-new.png" alt=""></div>
                                                <div class="text">1000 SQFT</div>
                                            </div>
                                            <div class="details">
                                                <div class="icon"> <img src="assets/icons/user.png" alt=""></div>
                                                <div class="text">4 GUEST</div>
                                            </div>
                                        </div>
                                        <h3>Heritage Private Villa</h3>
                                        <a href="#">Explore More <span class="arrow-icon"><img
                                                    src="assets/icons/black-arrow.png" alt=""></span></a>
                                    </div>

                                </div>
                            </div>
                            <div class="room-item">
                                <div class="img-container">
                                    <img src="assets/images/Boat-House.jpg" alt="">
                                </div>
                                <div class="content">

                                    <div class="active-show-content">

                                        <div class="room-details">
                                            <div class="details">
                                                <div class="icon"> <img src="assets/icons/bed.png" alt=""></div>
                                                <div class="text">King Bed</div>
                                            </div>
                                            <div class="details">
                                                <div class="icon"> <img src="assets/icons/size-new.png" alt=""></div>
                                                <div class="text">1000 SQFT</div>
                                            </div>
                                            <div class="details">
                                                <div class="icon"> <img src="assets/icons/user.png" alt=""></div>
                                                <div class="text">4 GUEST</div>
                                            </div>
                                        </div>
                                        <h3>Heritage Vintage Boat House</h3>
                                        <a href="#">Explore More <span class="arrow-icon"><img
                                                    src="assets/icons/black-arrow.png" alt=""></span></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="section-padding color-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 home-dine-heading">
                        <h5>FINE DINING</h5>
                        <h2 class="main-heading"> A Table Set <br>
                            for the Senses</h2>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 home-dine-content">
                        <p>Blending flavor, artistry, and authenticity, every dish is crafted with fresh, local
                            sourced ingredients. From elegant dining to relaxed post-game indulgence,
                            every meal invites you to savor and unwind</p>
                        <a href=""> EXPLORE ALL DINING ⟶</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 p-0">
                        <div class="hover-show-container">
                            <div class="img-box">
                                <img src="assets/images/fusion-feast.jpg" alt="">
                            </div>
                            <h3>Fusion Feast</h3>
                            <div class="content-box">
                                <h5>Multi<span class="default-font">-</span>cuisine dining with global flavors</h5>
                                <h5><strong>Timings</strong>: 24 hrs</h5>
                                <a href="#">RESERVE A TABLE ⟶</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-0">
                        <div class="hover-show-container">
                            <div class="img-box">
                                <img src="assets/images/austin-cafe.jpg" alt="">
                            </div>
                            <h3>The Austin Café</h3>
                            <div class="content-box">
                                <h5>Coffee & fresh bakes</h5>
                                <h5><strong>Timings</strong>: 24 hrs</h5>
                                <a href="#">RESERVE A TABLE ⟶</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-0">
                        <div class="hover-show-container">
                            <div class="img-box">
                                <img src="assets/images/rustic-barrel.jpg" alt="">
                            </div>
                            <h3>The Rustic Barrel</h3>
                            <div class="content-box">
                                <h5>Cocktails<span class="default-font"> & </span>bar bites</h5>
                                <h5><strong>Timings</strong>: 24 hrs</h5>
                                <a href="#">RESERVE A TABLE ⟶</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- <section class="section-padding every-breath-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <h2 class="main-heading " data-aos="fade-up" data-aos-duration="1200">Every Breath Feels Lighter
                            Here</h2>
                        <p data-aos="fade-up" data-aos-duration="1200">Set amidst pristine greenery, Heritage Wellness
                            Retreat offers authentic Ayurvedic therapies
                            inspired by Kerala’s healing traditions. With treatments under the shade of trees, every
                            experience is designed to restore balance, refresh the mind, and awaken the senses.</p>
                    </div>
                    <div class="col-md-12">
                        <div class="every-breath-container-box">
                            <div class="ever-breath-content">
                                <img src="assets/images/Golf-demo.jpg" alt="" class="" data-aos="fade-up">
                                <div class="breath-text-content">
                                    <h6 >Small heading</h6>
                                    <h5 >Heading Text</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate officia nulla
                                        numquam obcaecati magni corporis ab sint. Quibusdam eligendi non error illum
                                        porro harum, mollitia optio et ab voluptas eaque repudiandae totam? Nesciunt id
                                        aliquid velit nisi, quia tempora itaque.</p>
                                    <a href="">Explore More <span class="arrow-icon">⟶</span></a>
                                </div>
                            </div>
                            <div class="ever-breath-content">
                                <img src="assets/images/Dinning-demo.jpg" alt="" class="" data-aos="fade-up">
                                <div class="breath-text-content">
                                    <h6 >Small heading</h6>
                                    <h5 >Heading Text</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate officia nulla
                                        numquam obcaecati magni corporis ab sint. Quibusdam eligendi non error illum
                                        porro harum, mollitia optio et ab voluptas eaque repudiandae totam? Nesciunt id
                                        aliquid velit nisi, quia tempora itaque.</p>
                                    <a href="">Explore More <span class="arrow-icon">⟶</span></a>
                                </div>
                            </div>
                            <div class="ever-breath-content">
                                <img src="assets/images/wedding-demo.jpg" alt="" class="" data-aos="fade-up">
                                <div class="breath-text-content">
                                    <h6>Small heading</h6>
                                    <h5>Heading Text</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate officia nulla
                                        numquam obcaecati magni corporis ab sint. Quibusdam eligendi non error illum
                                        porro harum, mollitia optio et ab voluptas eaque repudiandae totam? Nesciunt id
                                        aliquid velit nisi, quia tempora itaque.</p>
                                    <a href="">Explore More <span class="arrow-icon">⟶</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


        <!-- <section class="section-padding color-bg home-dine-sec color-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/images/dining-sec.jpg" alt="" class="w-100" data-aos="zoom-in"
                            data-aos-duration="1200">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="content">
                            <h3 class="main-heading" data-aos="fade-up" data-aos-duration="1200">A Table Set for the
                                Senses</h3>
                            <p data-aos="fade-up" data-aos-duration="1200">Blending flavor, artistry, and authenticity,
                                every dish is crafted with fresh, local sourced ingredients. From elegant dining to
                                relaxed post-game indulgence, every meal invites you to savor and unwind.</p>
                            <a href="" data-aos="fade-up" data-aos-duration="1200">Know More <span
                                    class="arrow-icon">⟶</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 text-center">
                        <h3 class="main-heading" data-aos="fade-up" data-aos-duration="1200">Celebrate Special Moments
                        </h3>
                        <p data-aos="fade-up" data-aos-duration="1200">Exchange vows in a breathtaking setting, where
                            every detail is thoughtfully crafted for your perfect celebration. With impeccable service
                            and a stunning backdrop, your wedding becomes an unforgettable experience, creating timeless
                            memories.</p>
                    </div>
                    <div class="col-md-8 offset-md-2">
                        <div class="owl-carousel owl-theme wedding-slider">

                            <div class="wedding-item">
                                <img src="assets/images/wedding-lawn.jpg" alt="" class="">
                                <h6>Wedding Lawn</h6>
                            </div>
                            <div class="wedding-item">
                                <img src="assets/images/Wedding-Banquet.jpg" alt="" class="">
                                <h6>Wedding Banquet</h6>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- <section class="section-padding color-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <h3 class="main-heading"> Offers</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae magni non
                            necessitatibus quos aperiam assumenda quidem placeat.</p>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme offer-slider">

                            <div class="offer-item">
                                <img src="assets/images/wedding1.jpg" alt="" class="">
                                <h6>Heading</h6>
                            </div>
                            <div class="offer-item">
                                <img src="assets/images/wedding2.jpg" alt="" class="">
                                <h6>Heading</h6>
                            </div>
                            <div class="offer-item">
                                <img src="assets/images/wedding3.jpg" alt="" class="">
                                <h6>Heading</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


        <!-- <section class="section-padding home-dine-sec color-bg">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 d-flex align-items-center">
                        <div class="content">
                            <h3 class="main-heading" data-aos="fade-up" data-aos-duration="1200">A Table Set for the
                                Senses</h3>
                            <p data-aos="fade-up" data-aos-duration="1200">Bringing a balance of flavor, artistry, and
                                authenticity, every dish is crafted with
                                fresh, locally sourced ingredients. From elegant dining to relaxed post-game indulgence,
                                every meal is an invitation to savor, unwind, and connect.</p>
                            <a href="" data-aos="fade-up" data-aos-duration="1200">Know More <span
                                    class="arrow-icon">⟶</span></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/images/dining-sec.jpg" alt="" class="w-100" data-aos="zoom-in"
                            data-aos-duration="1200">
                    </div>
                </div>
            </div>
        </section> -->

        <section class="section-padding home-gallery-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-heading text-center">Gallery</h3>
                    </div>
                </div>
                <div class="row home-gallery">
                    <div class="col-md-3 mb-3">
                        <div class="horizontal-border">
                            <a href="assets/images/gallery/1.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/1.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="horizontal-border">
                            <a href="assets/images/gallery/2.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/2.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="horizontal-border">
                            <a href="assets/images/gallery/3.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/3.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>


                    <div class="col-md-3 mb-3">
                        <div class="horizontal-border">
                            <a href="assets/images/gallery/4.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/4.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="horizontal-border">
                            <a href="assets/images/gallery/5.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/5.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="horizontal-border">
                            <a href="assets/images/gallery/6.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/6.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="horizontal-border">
                            <a href="assets/images/gallery/7.jpg" data-lightbox="image-1" data-title="My caption">
                                <img src="assets/images/gallery/7.jpg" alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="horizontal-border">
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


<!-- <a href="mailto:"></a> -->
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