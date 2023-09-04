<?php $this->load->view('includes/header', ['title' => 'About']); ?>
<main class=" main">
    <!--==================== HOME ====================-->
    <section class="heli__home section" id="helicopter">
        <div class="about__home__bg">
            <h2 class="heli__home__title">About Us</h2>
            <img src="<?= base_url('assets/img/about.jpg'); ?>" alt="about image" class="about__head__img">
        </div>
        <div class="about__main__text">
            Dev Darshan Yatra Travels helps you to plan your trips and provides all the information of the destinations in economical way with wide selection of our various packages which makes your tour easy & happy. We remain committed to our mission of “ creating happy travelers ”. We arrange helicopters , bus, train, taxi or car etc. Dev Darshan Yatra brings all the services related to chardham yatra package in Uttarakhand under single website. We have been providing excellent services to our clients since the date of foundation. We are a premium travel agency based in Delhi and provide our best servcices all over India.
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="heli__about heli__section" id="heli__about">
        <div class="heli__about__container container grid">

            <div class="about__image">
                <img src="<?= base_url('assets/img/about1.jpg'); ?>" alt="about image" class="about_us__img">
                <div class="about__shadow">
                </div>
            </div>

            <div class="about__data">
                <h2 class="heli__section__title">
                    Organization -
                    <small class="small"> Dev Darshan Yatra </small>
                </h2>

                <p class="about__description">
                    We promise an excellent quality and state-of-art services to our clients for which we always keep transparency of every things. We are very familiar with the art of living, culture, heritage, pilgrimage and religion of Uttarakhand. The directors of the Dev Darshan Yatra, the planner and staffs are fully experienced to match the requisites of catering to our clients that demands the very best and we promise to deliver the same at any cost. We have our branches in Delhi, Goa, Haridwar, Dehradun, Katra and Rishikesh and thus we are called as one of the leading travel company / Agency in India. We provide Chardham Yatra Package Tours and Chardham Helicopter Services etc. As a client you can be 100% bassured of luxury and comfort in our Chardham Yatra Packages at a very reaosnable and affordable price. Our chardham yatra package tours can be customized to include various sightseeing spots in Uttarakhand to make your tours more exciting. We also provide inter-city dropping facilities and Uttarakhand and pick and drop facilities for cities near Uttarakhand.
                </p>

            </div>

        </div>
    </section>
</main>
<?php $this->load->view('includes/footer'); ?>