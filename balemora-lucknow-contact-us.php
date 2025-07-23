<?php
    include "includes/lucknow/header-link.php";
    include "includes/lucknow/header.php";
?>

<main>

    <section class="inner-pages-banner contact-bg">
        <div class="container">
            <h2>Contact Us </h2>
        </div>
    </section>

    <section class="section-padding color-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0">
                    <div class="contact-map-box">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28456.826517262693!2d81.253771!3d26.931939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399963406797d835%3A0x7178d5c50ddb31ae!2sHeritage%20Green%20Group%20of%20Companies!5e0!3m2!1sen!2sin!4v1752908104822!5m2!1sen!2sin"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="contact-details-box">
                        <h2 class="mb-5">Balemora NH27 Lucknow</h2>
                        <div class="contact-details">

                            <a href="" target="_blank" class="details-box">
                                <span class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <p>HGG Campus opposite Rasauli Railway Station, Behind Seth M.R. Jaipuria School, NH-28,
                                    Ayodhya-Lucknow Road, Uttar Pradesh - 225001</p>
                            </a>
                            <a href="tel:+919005430333" class="details-box">
                                <span class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <p>+91 9005430333</p>
                            </a>

                            <a href="mailto:customercare@balemorawellnessretreats.com" class="details-box">
                                <span class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <p>customercare@balemorawellnessretreats.com</p>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <h2 class="main-heading text-center">Get in Touch</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form id="contactForm" class="contact-form-corporate" method="post">
                        <label id="nameErr" class="text-danger"></label>
                        <input type="text" id="name" name="name" placeholder="Your Name">
                        <label id="emailErr" class="text-danger"></label>
                        <input type="email" name="email" id="email" placeholder="Your Email">
                        <label id="numberErr" class="text-danger"></label>
                        <input type="tel" name="number" id="number" placeholder="Phone Number">
                        <label id="subjectErr" class="text-danger"></label>
                        <input type="text" placeholder="Subject" id="subject" name="subject">
                        <input type="hidden" id="property" name="property" value="Balemora NH27 Lucknow" />
                        <label id="messageErr" class="text-danger"></label>
                        <textarea name="message" id="message"></textarea>
                        <input type="submit" name="contactFormBtn" id="contactFormBtn" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
    include "includes/lucknow/footer.php";
?>