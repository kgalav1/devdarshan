<?php $this->load->view('includes/header', ['title' => 'Warning']); ?>
<main class=" main">
    <!--==================== HOME ====================-->
    <section class="heli__home section" id="helicopter">
    <img src="assets/img/helicopter5.jpg" alt="helicopter image" class="heli__home__bgImg">
        <div class="heli__home__bg">
            <h2 class="heli__home__title">Warning :</h2>
            <p>Home > Warning</p>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="section_second heli__section" id="heli__about">
        <img src="<?= base_url('assets/img/graph.png'); ?>" alt="svg" class="heli__about__svg">
        <div class="warning__text container">
            <h6><span>WARNING(चेतावनी)</span>: BEHL Hospitality is owned by only www.behlhospitality.com . We are
                not responsible for any other fake website in the name of BEHL Hospitality. Our company has only
                one current account which is mentioned on the website, apart from this our company is not
                responsible for any other payment details.</h6>

            <h6 class="heli__note__text">
                Note: Book helicopter ticket only from government website.
            </h6    >
            <hr>
        </div>
        <div class="heli__about__container container grid">
            <div class="about__data">
                <h2 class="heli__section__title">
                    Organization -
                    <small class="small"> BEHL Hospitality </small>
                </h2>

                <p class="about__description">
                    Bank Branch Address- C-61,Preet Vihar Vikas Marg, New Delhi – 110092 <br>
                    Website URL – http://www.behlhospitality.com <br>
                    Bank Name – IndusInd Bank <br>
                    Account No – 201002943849 <br>
                    Account Type – Current Account <br>
                    NEFT IFSC – INDB0000031 <br>
                    RTGS CODE – INDB0000031 <br>
                </p>

            </div>

            <div class="about__image">
                <img src="<?= base_url('assets/img/warning.jpg'); ?>" alt="about image" class="heli__about__img">
                <div class="about__shadow">

                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view('includes/footer'); ?>
</body>

</html>