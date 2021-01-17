<?php
define('PAGE_TITLE', "Home");
include("./dist/attributes/header.php"); ?>

<main data-barba="container" data-barba-namespace="Artist-Detox">
    <section class="portfolio portfolio__hero portfolio__hero--sc">
        <h1 class="portfolio__title portfolio__title--sc">Sound Communities</h1>
        <p class="portfolio__info">A multi-page site for a CIC to show their projects & achievements. Built in PHP, SCSS & JS.</p>
    </section>
    <section class="portfolio__content">
        <img class="portfolio__image portfolio__image--laptop " src="./dist/images/soundCommunities/soundCommunitiesMacAlt.png" alt="Laptop showing Artist Detox Website" loading="lazy" >
        <img class="portfolio__image portfolio__image--phone " src="./dist/images/soundCommunities/soundCommunitiesIphone.png" alt="Iphone showing Artist Detox Website" loading="lazy">
        <img class="portfolio__image portfolio__image--computer " src="./dist/images/soundCommunities/soundCommunitiesIpad.png" alt="Ipad showing Artist Detox Website" loading="lazy">
    </section>


</main>





<?php include('./dist/attributes/footer.php'); ?>