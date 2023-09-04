<?php $this->load->view('includes/header', ['title' => 'Home']); ?>
<main class=" main">
    <!--==================== HOME ====================-->
    <section class="heli__home section" id="helicopter">
        <div class="heli__home__bg">
            <h2 class="heli__home__title">Warning</h2>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="heli__about heli__section" id="heli__about">
        <img src="<?= base_url('assets/img/graph.png'); ?>" alt="svg" class="heli__about__svg">
        <div class="warning__text container">
            <h2><span>WARNING(चेतावनी)</span>: Dev Darshan Yatra is owned by only www.devdarshanyatra.com . We are
                not responsible for any other fake website in the name of Dev Darshan Yatra. Our company has only
                one current account which is mentioned on the website, apart from this our company is not
                responsible for any other payment details.</h2>

            <h3 class="heli__note__text">
                Note: Book helicopter ticket only from government website.
            </h3>
            <hr>
        </div>
        <div class="heli__about__container container grid">
            <div class="about__data">
                <h2 class="heli__section__title">
                    Organization -
                    <small class="small"> Dev Darshan Yatra </small>
                </h2>

                <p class="about__description">
                    Bank Branch Address- C-61,Preet Vihar Vikas Marg, New Delhi – 110092 <br>
                    Website URL – http://www.devdarshanyatra.com/ <br>
                    Bank Name – IndusInd Bank <br>
                    Account No – 201002943849 <br>
                    Account Type – Current Account <br>
                    NEFT IFSC – INDB0000031 <br>
                    RTGS CODE – INDB0000031 <br>
                </p>

            </div>

            <div class="about__image">
                <img src="<?= base_url('assets/img/warning.jpg'); ?>" alt="about image" class="about__img">
                <div class="about__shadow">

                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view('includes/footer'); ?>