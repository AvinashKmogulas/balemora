<?php
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage == 'index.php') {
?>
    <title>Balemora Wellness Retreats</title>
    <meta name="description" content="Discover Balemora’s soulful retreats, where timeless traditions blend with modern well-being, offering a journey of balance reflection, and renewal." />
<?php
} else if ($currentPage == 'balemora-wellness.php') {
?>
    <title>Balemora Wellness Retreats | Wellness</title>
    <meta name="description" content="Discover a personalized wellness journey at Balemora, offering bespoke programs for stress management, detox, anti-aging, and spiritual growth." />
<?php
} else if ($currentPage == 'about-us.php') {
?>
    <title>Balemora Wellness Retreats | About Us</title>
    <meta name="description" content="Learn more about our story, values, and commitment to offering exceptional experiences that blend tradition with modern luxury." />
<?php
} else if ($currentPage == "gallery.php") {
?>
    <title>Balemora Wellness Retreats | Gallery</title>
    <meta name="description" content="Take a visual stroll through Balemora, where every frame captures the charm, tranquility, and beauty of life amidst nature's serenity." />
<?php
} else if ($currentPage == "special-offers.php") {
?>
    <title>Balemora Wellness Retreats | Special Offer</title>
    <meta name="description" content="Exclusive offers and handpicked packages designed to elevate your stay, whether you're here to unwind, explore, or celebrate." />
<?php
} else if ($currentPage == "contact-us.php") {
?>
    <title>Balemora Wellness Retreats | Contact Us</title>
    <meta name="description" content="Have questions or ready to plan your stay? We’re just a message away. Reach out and let us help you experience Balemora Wellness Retreats." />
<?php
}
?>