<?php
define('PAGE_TITLE', "Home");
include("./dist/attributes/header.php"); ?>


<main>
    
    <section class="hero">
        <div data-scroll class="background__box hero__background"></div>
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
        <img src="./dist/images/me_50.jpg" alt="Long haired guy wearing pink shirt" class="image about__image" loading="lazy">
        <nav class="nav about__nav">
            <ul class="nav__list">
                <li class="nav__links"><a href="#about">> About Me</a></li>
                <li class="nav__links"><a href="#projects">> Projects</a></li>
                <li class="nav__links"><a href="">> Contact</a></li>
            </ul>
        </nav>
    </section>
    
    <section class="projects projects__section" id="projects">
    
        <div class="projects__container">
            <h2 class="subtitle projects__subtitle">Artist Detox</h2>
            <img src="./dist/images/artistDetox.png" alt="Laptop showing project website" class="image projects__image" loading="lazy">
        </div>
        <div class="projects__container">
            <h2 class="subtitle projects__subtitle projects__subtitle--sml">Sound Communities</h2>
            <img src="./dist/images/soundCommunities.png" alt="Computer showing project website" class="image projects__image" loading="lazy">
        </div>
        <div class="projects__container">
            <h2 class="subtitle projects__subtitle">Ocean Youth</h2>
            <img src="./dist/images/oceanYouth.png" alt="Phone showing project website" class="image projects__image" loading="lazy">
        </div>
    </section>

    
</main>
</body>







<?php include("./dist/attributes/footer.php"); ?>
