<?php
define('PAGE_TITLE', "Artist Detox");
include("./dist/attributes/header.php"); ?>

<main data-barba="container" data-barba-namespace="Artist-Detox">
    <section class="portfolio portfolio__hero">
        <h1 class="portfolio__title">Artist Detox</h1>
        <p class="portfolio__info">
            A 5 page website to host a small radio show. Built in PHP, SCSS, JS with a MySQL Database to store information about the radio shows.
            <a href="https://github.com/jackthom1/ArtistDetox" target="_blank" class="portfolio__button"><i class="fab fa-github"></i></a>
        <a href="https://artistdetox.co.uk" target="_blank" class="portfolio__button"><i class="fas fa-external-link-alt"></i></a>

        </p>
        
        <img class="portfolio__image portfolio__image--hero" src="./dist/images/artistDetox/artistDetox.png" alt="Laptop showing Artist Detox Website">
        <img class="portfolio__image portfolio__image--heroTwo " src="./dist/images/artistDetox/artistDetoxPhoneAlt.png" alt="Laptop showing Artist Detox Website">
</section>
    <section class="portfolio portfolio__content">
        <img class="portfolio__image portfolio__image--one " src="./dist/images/artistDetox/artistDetoxImac.png" alt="Laptop showing Artist Detox Website">
        <img class="portfolio__image portfolio__image--two " src="./dist/images/artistDetox/artistDetoxSamsung.png" alt="Iphone showing Artist Detox Website">
        <img class="portfolio__image portfolio__image--three" style="margin-top: 1.5rem;" src="./dist/images/artistDetox/artistDetoxMac.png" alt="Ipad showing Artist Detox Website">
    </section>


</main>





<?php include('./dist/attributes/footer.php'); ?>