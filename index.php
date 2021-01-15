<?php
define('PAGE_TITLE', "Home");
include("./attributes/header.php"); ?>


<!-- <nav class="nav">
        <ul class="nav__list">
            <li><a href="" class="nav__links">About Me</a></li>
            <li><a href="" class="nav__links">Projects</a></li>
            <li><a href="" class="nav__links">Contact</a></li>
        </ul>
    </nav> -->

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
            <li class="nav__links"><a href="#about">> About Me</a></li>
            <li class="nav__links"><a href="#projects">> Projects</a></li>
            <li class="nav__links"><a href="">> Contact</a></li>
        </ul>
    </nav>
</section>

<section class="about about__section" id="about">
    <h2 class="title about__title">About Me</h2>
    <div class="background__box about__background">
        <p class="about__info">
            Hi :) My name is Jack and I'm an IT student with a passion for web design & development, I've been developing websites for over a year both in my spare time and for clients.
            I'm experienced in HTML, CSS & im currently building my knowledge in PHP & JS to make my websites even better! If you'd like to know more about what i've done in the past you can read my <a href="">full CV</a> too.
        </p>
    </div>
    <img src="./images/me_50.jpg" alt="Long haired guy wearing pink shirt" class="image about__image" loading="lazy">
    <nav class="nav about__nav">
        <ul class="nav__list">
            <li class="nav__links"><a href="#about">> About Me</a></li>
            <li class="nav__links"><a href="#projects">> Projects</a></li>
            <li class="nav__links"><a href="">> Contact</a></li>
        </ul>
    </nav>
</section>

<section class="projects projects__section" id="projects">
    <h2 class="subtitle projects__title">My Projects</h2>
    <!-- <div class="projects__container">
        <div class="projects__container__text">
            <h2 class="subtitle projects__subtitle">Artist Detox</h2>
            <p class="projects__info">Website design and development for a music podcast</p>
        </div>
        <img src="./images/artistDetox.png" alt="Laptop showing project website" class="image projects__image" loading="lazy">
    </div>
    <div class="projects__container">
        <div class="projects__container__text">
            <h2 class="subtitle projects__subtitle">Sound Communities</h2>
            <p class="projects__info">Website re-design for a youth music & radio company</p>
        </div>
        <img src="./images/soundCommunities.png" alt="Computer showing project website" class="image projects__image" loading="lazy">
    </div>
    <div class="projects__container">
        <div class="projects__container__text">
            <h2 class="subtitle projects__subtitle">Ocean Youth</h2>
            <p class="projects__info">Website re-design for a local youth radio station</p>
        </div>
        <img src="./images/oceanYouth.png" alt="Computer showing project website" class="image projects__image" loading="lazy">
    </div> -->
    <!-- <img src="./images/soundCommunities.png" alt="Computer showing project website" class="image projects__image" loading="lazy">
    <img src="./images/oceanYouth.png" alt="Computer showing project website" class="image projects__image" loading="lazy"> -->
    
    <div class="projects__container">
        <h2 class="subtitle projects__subtitle">Artist Detox</h2>
        <img src="./images/artistDetox.png" alt="Computer showing project website" class="image projects__image" loading="lazy">
    </div>
</section>
</body>







<?php include("./attributes/footer.php");
