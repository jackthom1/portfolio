<?php
define('PAGE_TITLE', "Home");
include("./dist/attributes/header.php"); ?>



<main data-barba="container" data-barba-namespace="home">
    
    <section class="hero">
        <div class="background__box hero__background"></div>
        <h1 class="title hero__title">Jack <span class="hero__title__second">Thompson</span></h1>
        <div class="hero__titleContainer">
            <h3 class="hero__subtitle subtitle--light">Freelance web Design & Development</h3>
            <h3 class="hero__subtitle subtitle--bold">Freelance web Design & Development</h3>
            <h3 class="hero__subtitle subtitle--light">Freelance web Design & Development</h3>
        </div>
        <nav class="nav hero__nav">
            <ul class="nav__list">
                <li class="nav__links"><a href="#projects">> Projects</a></li>
                <li class="nav__links"><a href="#about">> About Me</a></li>
                <li class="nav__links"><a href="">> Contact</a></li>
            </ul>
        </nav>
    </section>
    
    <section class="projects projects__section" id="projects">

        <a href="./artist-detox.php"><div class="projects__container projects__container--even">
            <h2 class="subtitle projects__subtitle">Artist Detox</h2>
            <img src="./dist/images/artistDetox/artistDetoxImac.png" alt="Laptop showing project website" class="image projects__image" loading="lazy">
        </div>
        </a>
        <a href="./sound-communities.php">
            <div class="projects__container projects__container--odd">
                <h2 class="subtitle projects__subtitle projects__subtitle--sml">Sound Communities</h2>
                <img src="./dist/images/soundCommunities/soundCommunitiesImac.png" alt="Computer showing project website" class="image projects__image" loading="lazy">
            </div>
        </a>
        <a href="./ocean-youth.php">
            <div class="projects__container projects__container--even">
                <h2 class="subtitle projects__subtitle">Ocean Youth</h2>
                <img src="./dist/images/oceanYouth/oceanYouthIphone.png" alt="Phone showing project website" class="image projects__image" loading="lazy">
            </div>
        </a>
        <a href="./1-zero-1.php">
            <div class="projects__container projects__container--odd">
                <h2 class="subtitle projects__subtitle">1-Zero-1</h2>
                <img src="./dist/images/1-zero-1/1-zero-1Mac.png" alt="Laptop showing project website" class="image projects__image" loading="lazy">
            </div>
        </a>
    </section>

    <section class="about about__section" id="about">
        <h2 class="title about__title">About Me</h2>
        <div class="background__box about__background">
            <p class="about__info">
                My name is Jack and I'm an IT student with a passion for web design & development, I've been developing websites for over a year both in my spare time and for clients.
                I'm experienced in HTML, CSS & im currently building my knowledge in PHP & JS to make my websites even better! If you'd like to know more about what i've done in the past you can read my <a href="">full CV</a> too.
            </p>
        </div>
        <img src="./dist/images/me.jpg" alt="Long haired guy wearing pink shirt" class="image about__image" loading="lazy">
        <!-- <nav class="nav about__nav">
            <ul class="nav__list">
                <li class="nav__links"><a href="#about">> About Me</a></li>
                <li class="nav__links"><a href="#projects">> Projects</a></li>
                <li class="nav__links"><a href="">> Contact</a></li>
            </ul>
        </nav> -->
    </section>


</main>

<!-- <script src="./dist/js/homeAnimation.js"></script> -->






<?php include("./dist/attributes/footer.php"); ?>
