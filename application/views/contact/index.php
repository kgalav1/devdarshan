<?php $this->load->view('includes/header', ['title' => 'Contact Us']); ?>
<main class=" main">
    <!--==================== HOME ====================-->

    <section class="heli__home section" id="helicopter">
        <img src="assets/img/contact-us1.webp" alt="contact-us" class="heli__home__bgImg">
        <div class="heli__home__bg">
            <h2 class="heli__home__title">Contact Us :</h2>
            <p>Home > Contact Us</p>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="section_second heli__section" id="heli__about">
        <div class="contact__about__container grid mt-5 mb-4">

            <div class="about__image contact_us_head">
                <h2 class="position-relative">Get In <span class="crimson">Touch</span></h2>
                <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email.</p>
                <img src="<?= base_url('assets/img/contact-us2.webp'); ?>" alt="about image" class="contact__about__img">
                <div class="about__shadow"></div>
            </div>

            <div class="about__data">
                <form class="join__form" id="contact">
                    <input type="hidden" id="setUrl" value="<?php echo base_url('contact'); ?>" />
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <input type="text" name="first_name" placeholder="First name" class="join__input" maxlength="15" autocomplete="off" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" name="last_name" placeholder="Last name" class="join__input" maxlength="15" autocomplete="off" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" name="phone" placeholder="Enter your mobile no." class="join__input" maxlength="10" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="email" name="email" placeholder="Enter your email" class="join__input" maxlength="50" autocomplete="off" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <textarea name="message" id="message" cols="30" rows="5" class="join__input" placeholder="Message" maxlength="200" autocomplete="off" required></textarea>
                        </div>
                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                        <input type="hidden" name="action" value="validate_captcha">
                        <div class="col-md-12 mb-2">
                            <button class="join__button button" type="button" id="submit" onclick="addData('contact')">
                                Submit <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="contact_details">
        <div class="row">
            <div class="col-md-12 text-center contact_details_head position-relative">
                <h2>Contact <span class="crimson">Details</span></h2>
                <!-- <p>Contact us for any query or personalized assistance and start planning your next adventure!</p> -->
            </div>
            <div class="contact_details_box_parent">
                <div class="col-md-3 contact_details_box">
                    <div class="intouch__phone intouch__icon">
                        <div class="contact__icon_div">
                            <img src="<?= base_url('assets/img/telephone.png'); ?>" alt="phone" class="contact__icon">
                        </div>
                        <p><b>Phone No.</b></p>
                        <span>+91 9783615558</span>
                    </div>
                </div>
                <div class="col-md-3 contact_details_box">
                    <div class="intouch__email intouch__icon">
                        <div class="contact__icon_div">
                            <img src="<?= base_url('assets/img/mail.png'); ?>" alt="email" class="contact__icon">
                        </div>
                        <p><b>Email Address</b></p>
                        <span>behlhopitality@support.com</span>
                    </div>
                </div>
                <div class="col-md-3 contact_details_box">
                    <div class="intouch__address intouch__icon">
                        <div class="contact__icon_div">
                            <img src="<?= base_url('assets/img/location.png'); ?>" alt="location" class="contact__icon">
                        </div>
                        <p><b>Address</b></p>
                        <span class="text-center">D- 9 3RD FLOOR GALI NO - 1 Delhi <br> PIN CODE 110092</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container faq_section mb-5">
        <div class="row">
            <div class="col-md-6 faq_section_head">
                <h1 class="position-relative">
                    Frequently Asked <br>
                    <span class="crimson">Questions</span>
                </h1>
            </div>
            <div class="col-md-6">
                <div class="accordian-header mb-2" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                    <div class="row">
                        <div class="col-md-11">
                            <span><b>How do I book a travel package with your company?</b></span>
                        </div>
                        <div class="col-md-1">
                            <span class="faq_icon"><i class="ri-arrow-down-s-line" style="color: #ffffff;"></i></span>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample1">
                        <div class="pt-3">
                            <small>To book a package, simply visit our website and browse through our available packages. Once you've found the perfect one, click on "Book Now" and follow the easy steps to secure your booking.</small>
                        </div>
                    </div>
                </div>

                <div class="accordian-header mb-2" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                    <div class="row">
                        <div class="col-md-11">
                            <span><b>Are your travel packages customizable?</b></span>
                        </div>
                        <div class="col-md-1">
                            <span class="faq_icon"><i class="ri-arrow-down-s-line" style="color: #ffffff;"></i></span>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample2">
                        <div class="pt-3">
                            <small> Yes, many of our packages can be customized to suit your preferences. Contact our team, and we'll work with you to create a personalized itinerary.</small>
                        </div>
                    </div>
                </div>

                <div class="accordian-header mb-2" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                    <div class="row">
                        <div class="col-md-11">
                            <span><b>What's included in the package price?</b></span>
                        </div>
                        <div class="col-md-1">
                            <span class="faq_icon"><i class="ri-arrow-down-s-line" style="color: #ffffff;"></i></span>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample3">
                        <div class="pt-3">
                            <small>Each package varies, but typically, it includes accommodations, meals, guided tours, and transportation. Specific inclusions are detailed in the package descriptions.</small>
                        </div>
                    </div>
                </div>

                <div class="accordian-header mb-2" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
                    <div class="row">
                        <div class="col-md-11">
                            <span><b>How can I pay for my booking?</b></span>
                        </div>
                        <div class="col-md-1">
                            <span class="faq_icon"><i class="ri-arrow-down-s-line" style="color: #ffffff;"></i></span>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample4">
                        <div class="pt-3">
                            <small> We accept various payment methods, including credit/debit cards and bank transfers. Payment details will be provided during the booking process.</small>
                        </div>
                    </div>
                </div>

                <div class="accordian-header mb-2" data-bs-toggle="collapse" data-bs-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
                    <div class="row">
                        <div class="col-md-11">
                            <span><b>What is your cancellation policy?</b></span>
                        </div>
                        <div class="col-md-1">
                            <span class="faq_icon"><i class="ri-arrow-down-s-line" style="color: #ffffff;"></i></span>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample5">
                        <div class="pt-3">
                            <small> Our cancellation policy varies depending on the package and the time of cancellation. Details can be found in our terms and conditions.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view('includes/footer'); ?>

<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LcclB8oAAAAAFrK2Xtjx31JFbqCmy0s941Vg3LK', {
                action: 'validate_captcha'
            })
            .then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
            });
    });

    $(".accordian-header").click(function() {
        $(this).find(".faq_icon i").toggleClass("ri-arrow-down-s-line ri-arrow-up-s-line");
    });
</script>

</body>

</html>