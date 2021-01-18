<?php
define('PAGE_TITLE', "Ocean Youth");
include("./dist/attributes/header.php"); ?>

<main data-barba="container" data-barba-namespace="Artist-Detox">
    <section class="portfolio portfolio__hero">
        <h1 class="portfolio__title portfolio__title--mid">Ocean Youth</h1>
        <p class="portfolio__info">
            A multi-page site for a youth radio station for listeners to tune in. Built with PHP, SCSS & JS. <span>Unused</span>
            <a href="https://github.com/jackthom1/oceanYouth" target="_blank" class="portfolio__button"><i class="fab fa-github"></i></a>
            <a href="http://jacksstagingsite.rf.gd/oceanYouth/" target="_blank" class="portfolio__button"><i class="fas fa-external-link-alt"></i></a>

        </p>
        <img class="portfolio__image portfolio__image--hero" src="./dist/images/oceanYouth/oceanYouthLaptop.jpg" alt="Laptop showing Artist Detox Website">
        <img class="portfolio__image portfolio__image--heroTwo " src="./dist/images/oceanYouth/oceanYouthPhone.jpg" alt="Laptop showing Artist Detox Website">
</section>
    <section class="portfolio portfolio__content">
        <img class="portfolio__image portfolio__image--one " src="./dist/images/oceanYouth/oceanYouthMac.png" alt="Laptop showing Artist Detox Website">
        <img class="portfolio__image portfolio__image--two " src="./dist/images/oceanYouth/oceanYouthIphoneAlt.png" alt="Iphone showing Artist Detox Website">
        <img class="portfolio__image portfolio__image--three" style="margin-top: 1.5rem;" src="./dist/images/oceanYouth/oceanYouthImac.png" alt="Ipad showing Artist Detox Website">
    </section>


</main>





<?php include('./dist/attributes/footer.php'); ?>