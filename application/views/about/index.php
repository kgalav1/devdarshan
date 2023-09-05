<?php $this->load->view('includes/header', ['title' => 'About']); ?>
<main class=" main">
    <!--==================== HOME ====================-->
    <section class="heli__home section" id="helicopter">
        <div class="about__home__bg">
            <h2 class="heli__home__title">About Us</h2>
            <img src="<?= base_url('assets/img/about.jpg'); ?>" alt="about image" class="about__head__img">
        </div>
        <div class="about__main__text">
            Dev Darshan Yatra Travels helps you to plan your trips and provides all the information of the destinations in economical way with wide selection of our various packages which makes your tour easy & happy. We remain committed to our mission of “ creating happy travelers ”.
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="heli__about heli__section" id="heli__about">
        <div class="heli__about__container container grid">

            <div class="about__image">
                <img src="<?= base_url('assets/img/about2.jpg'); ?>" alt="about image" class="about_us__img">
                <div class="about__shadow">
                </div>
            </div>

            <div class="about__data">
                <!-- <h2 class="heli__section__title">
                    Organization -
                    <small class="small"> Dev Darshan Yatra </small>
                </h2> -->

                <p class="about__description">
                    <span style="color:white;">Dev Darshan Yatra promises top-quality, transparent services, specializing in Uttarakhand's culture, heritage, pilgrimage, and religion.</span> <br><br>
                    1. With extensive experience and branches across major cities, including Delhi, Goa, and Rishikesh. <br> <br>
                    2. We offer Chardham Yatra Package Tours and Helicopter Services, ensuring luxury and comfort at affordable rates. <br><br>
                    3. Customizable tours and convenient inter-city transportation complete their offerings.
                </p>

            </div>

        </div>
    </section>

    <!--==================== ABOUT ====================-->

    <section class="about__numericData" id="about__numericData">
        <div class="parent__about__numericData">
            <div class="clients numeric__data">
                <h1>1000+</h1>
                <p>Peoples Travel</p>
            </div>
            <div class="trips numeric__data">
                <h1>50+</h1>
                <p>Trips Placed</p>
            </div>
            <div class="places numeric__data">
                <h1>15+</h1>
                <p>Places Visited</p>
            </div>
            <div class="reviews numeric__data">
                <h1>9999+</h1>
                <p>Reviews Achevied</p>
            </div>
        </div>
    </section>

    <!--==================== ATTORNEY ====================-->
    <section class="popular" id="popular">
        <div class="about__attorney">
            <div class="about__attorney__text">
                <h2>Let's Meet Our Attorney</h2>
                <p> Your Trusted Legal Advisor, Ready to Advocate for You with Expertise and Dedication. <br>Legal Solutions Await.</p>
            </div>
            <div class="popular__container container grid">
                <article class="popular__card">
                    <div class="popular__image">
                        <img src="<?= base_url('assets/img/attorney1.jpg'); ?>" alt="popular image" class="attorney__img">
                        <div class="popular__shadow"></div>
                    </div>

                    <h2 class="popular__title">
                        John Wick
                    </h2>

                    <div class="popular__location">
                        <span>Founder</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="<?= base_url('assets/img/attorney2.jpg'); ?>" alt="popular image" class="attorney__img">
                        <div class="popular__shadow"></div>
                    </div>

                    <h2 class="popular__title">
                        Cartle Marrie
                    </h2>

                    <div class="popular__location">
                        <span>Manager</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="<?= base_url('assets/img/attorney3.jpg'); ?>" alt="popular image" class="attorney__img">
                        <div class="popular__shadow"></div>
                    </div>

                    <h2 class="popular__title">
                        Rio Hosle
                    </h2>

                    <div class="popular__location">
                        <span>Employee</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!--==================== WHY CHOOSE US ====================-->
    <section class="choose" id="choose">
        <!-- <div class="choose__parent"> -->
        <div class="aboutus__container grid">
            <div class="about__data">
                <h2 class="section__title">
                    WELCOME TO <br>
                    <small class="small"> DEV DARSHAN YATRA </small>
                </h2>

                <p class="about__description">
                    Dev Darshan Travels, your dedicated partner in crafting unforgettable journeys. <br>
                    Dev Darshan Yatra stands as a beacon of convenience, offering a one-stop platform for all Chardham
                    Yatra packages in the enchanting realm of Uttarakhand. At Dev Darshan Travels, our journey is to create
                    enriching memories that linger long after the adventure ends.
                </p>

                <a href="#" class="button">Explore Travel <i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="about__image">
                <img src="<?= base_url('assets/img/about-beach.jpg'); ?>" alt="about image" class="about__img">
                <div class="about__shadow">

                </div>
            </div>
        </div>
        <!-- </div> -->
    </section>

</main>
<?php $this->load->view('includes/footer'); ?>