<?php $this->load->view('includes/header', ['title' => 'Package Details']); ?>
<main class=" main">
    <!--==================== HOME ====================-->

    <section class="heli__home section" id="helicopter">
        <img src="assets/img/package.jpg" alt="image" class="heli__home__bgImg">
        <div class="heli__home__bg">
            <h2 class="heli__home__title">Packages :</h2>
            <p>Home > Packages</p>
        </div>
    </section>
    <!--==================== Details ====================-->
    <section class="details container section_second">
        <div class="little__info mt-5">
            <h3 class="text-center">About <?= $data['page'] ?></h3>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="swiper_new">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide package_slides">
                                <img src="<?= base_url('assets/img/package/uttrakhand-1.jpg'); ?>" alt="image">
                            </div>
                            <div class="swiper-slide package_slides">
                                <img src="<?= base_url('assets/img/package/uttrakhand-2.jpg'); ?>" alt="image">
                            </div>
                            <div class="swiper-slide package_slides">
                                <img src="<?= base_url('assets/img/package/uttrakhand-3.jpg'); ?>" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7 d-flex align-items-center">
                    <p><?= $data['text'] ?></p>
                </div>
            </div>
        </div>
        <div class="plans__list mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="plans__list__head text-center position-relative">
                        <h3>Our Pricing Plans</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, temporibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, fuga.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php foreach($data['list'] as $row){ ?>
                    <div class="price-card mb-3">
                        <div class="row">
                            <div class="col-md-6 price-card-img">
                                <img src="<?= base_url($row['image']); ?>" alt="image">
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="package-info ms-4">
                                    <h3><?= $row['name'] ?></h3>
                                    <div class="rating mb-3">
                                        <div class="d-inline-block me-3">
                                            <span><i class="ri-star-fill"></i></span>
                                            <span><i class="ri-star-fill"></i></span>
                                            <span><i class="ri-star-fill"></i></span>
                                            <span><i class="ri-star-fill"></i></span>
                                            <span><i class="ri-star-half-line"></i></span>
                                        </div>
                                        <span><?= $row['reviews'] ?> CUSTOMER REVIEWS</span>
                                    </div>
                                    <div class="duration">
                                        <span class="me-3"><i class="ri-time-fill"></i></span>
                                        <span><?= $row['time'] ?></span>
                                    </div>
                                    <div class="type">
                                        <span class="me-3"><i class="ri-shield-star-fill"></i></span>
                                        <span>Deluxe Premium Package</span>
                                    </div>
                                    <div class="conditions">
                                        <span class="me-3"><i class="ri-check-line"></i></span>
                                        <span><?= $row['condition'] ?></span>
                                    </div>
                                    <div class="price">
                                        <span class="me-3"><i class="ri-money-dollar-circle-line"></i></span>
                                        <span>Affordable Price</span>
                                    </div>
                                    <div class="book-now mt-3">
                                        <button class="join__button button" type="button">
                                            BOOK NOW <i class="ri-arrow-right-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rate text-center">
                            <span><?= $row['price'] ?></span> <br>
                            <span>PER PERSON</span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view('includes/footer'); ?>