<?php
define('PAGE_TITLE', "Home");
include("./dist/attributes/header.php"); ?>

<main data-barba="container" data-barba-namespace="Artist-Detox">
    <section class="portfolio portfolio__hero portfolio__hero--oy">
        <h1 class="portfolio__title portfolio__title--oy">Ocean Youth</h1>
        <p class="portfolio__info">A multi-page site for a youth radio station for listeners to tune in. Built with PHP, SCSS & JS.</p>
    </section>
    <section class="portfolio__content">
        <img class="portfolio__image portfolio__image--laptop " src="./dist/images/oceanYouth/oceanYouthMac.png" alt="Laptop showing Artist Detox Website">
        <img class="portfolio__image portfolio__image--phone " src="./dist/images/oceanYouth/oceanYouthIphone.png" alt="Iphone showing Artist Detox Website">
        <img class="portfolio__image portfolio__image--computer " src="./dist/images/oceanYouth/oceanYouthImac.png" alt="Ipad showing Artist Detox Website">
    </section>


</main>





<?php include('./dist/attributes/footer.php'); ?>