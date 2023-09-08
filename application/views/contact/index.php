<?php $this->load->view('includes/header', ['title' => 'Warning']); ?>
<main class=" main">
    <!--==================== HOME ====================-->
    <section class="heli__home section" id="helicopter">
        <img src="assets/img/helicopter1.jpg" alt="helicopter image" class="heli__home__bg">
        <div class="heli__home__bg">
            <h2 class="heli__home__title">Warning :</h2>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="heli__about heli__section" id="heli__about">

        <div class="contact__about__container grid">

            <div class="about__image">
                <img src="<?= base_url('assets/img/contact.jpg'); ?>" alt="about image" class="contact__about__img">
                <div class="about__shadow"></div>
                <div class="intouch">
                    <div class="intouch__title mt-4">
                        <h3>GET IN TOUCH</h3>
                        <hr>
                    </div>
                    <div class="intouch__phone intouch__icon mb-4">
                        <img src="<?= base_url('assets/img/telephone.png'); ?>" alt="phone" class="contact__icon">
                        <span>+91 9783615558</span>
                    </div>
                    <div class="intouch__email intouch__icon mb-4">
                        <img src="<?= base_url('assets/img/mail.png'); ?>" alt="email" class="contact__icon">
                        <span>devdarshan@sansoftwares.com</span>
                    </div>
                    <div class="intouch__address intouch__icon mb-4">
                        <img src="<?= base_url('assets/img/location.png'); ?>" alt="location" class="contact__icon">
                        <span>D- 9 3RD FLOOR GALI NO - 1 Delhi <br> PIN CODE 110092</span>
                    </div>
                </div>
            </div>

            <div class="about__data">
                <form class="join__form" id="contact">
                    <input type="hidden" id="setUrl" value="<?php echo base_url('contact'); ?>" />
                    <div class="row">
                        <div class="col-md-5 mb-2">
                            <input type="text" name="first_name" placeholder="First name" class="join__input" maxlength="15" autocomplete="off" required>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5 mb-2">
                            <input type="text" name="last_name" placeholder="Last name" class="join__input" maxlength="15" autocomplete="off" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" name="phone" placeholder="Enter your mobile no." class="join__input" maxlength="10" autocomplete="off" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="email" name="email" placeholder="Enter your email" class="join__input" maxlength="50" autocomplete="off" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <textarea name="message" id="message" cols="30" rows="10" class="join__input" placeholder="Message" maxlength="200" autocomplete="off" required></textarea>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="captcha">
                                <?php echo $image; ?>
                            </div>
                            <div class="captch__refresh">
                                <a onclick="refreshCaptcha()" class="refresh_captch_link"><i class="ri-refresh-line"></i></a>
                            </div>
                            <input type="text" name="captcha_word" autocomplete="off" class="lgn-inpt" maxlength="10" value="" placeholder="Enter word " required />
                        </div>
                        <div class="col-md-6 mb-2">
                            <button class="join__button button" type="button" id="submit" onclick="addData('contact')">
                                Submit <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view('includes/footer'); ?>