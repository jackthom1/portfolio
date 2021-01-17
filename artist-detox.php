<?php
define('PAGE_TITLE', "Home");
include("./dist/attributes/header.php"); ?>

<main data-barba="container" data-barba-namespace="Artist-Detox">
    <section class="portfolio portfolio__hero">
        <h1 class="portfolio__title">Artist Detox</h1>
        <p class="portfolio__info">A 5 page website to host a small radio show. Built in PHP, SCSS & JS with a simple login system and dynamic homepage using a MySQL Database to store information about the radio shows.</p>
    </section>
    <section class="portfolio__content">
        <img class="portfolio__image portfolio__image--laptop " src="./dist/images/artistDetox/artistDetoxImac.png" alt="Laptop showing Artist Detox Website">
        <img class="portfolio__image portfolio__image--phone " src="./dist/images/artistDetox/artistDetoxSamsung.png" alt="Iphone showing Artist Detox Website">
        <img class="portfolio__image portfolio__image--computer" style="margin-top: 1.5rem;" src="./dist/images/artistDetox/artistDetoxMac.png" alt="Ipad showing Artist Detox Website">
    </section>


</main>





<?php include('./dist/attributes/footer.php'); ?>