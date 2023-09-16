 <!--==================== FOOTER ====================-->
 <footer class="footer">
     <img src="<?= base_url('assets/img/design.svg'); ?>" alt="svg" class="footer__svg">
     <div class="footer__container container grid">
         <div class="footer__content grid">
             <div>
                 <a href="#" class="footer__logo">Travel</a>

                 <p class="footer__description">
                     Travel with us and explore <br>
                     the world without limits.
                 </p>
             </div>

             <div class="footer__data grid">
                 <div>
                     <h3 class="footer__title">About</h3>

                     <ul class="footer__links">
                         <li>
                             <a href="#" class="footer__link">About Us</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">Features</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">News & Blogs</a>
                         </li>
                     </ul>
                 </div>

                 <div>
                     <h3 class="footer__title">Company</h3>

                     <ul class="footer__links">
                         <li>
                             <a href="#" class="footer__link">FAQs</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">History</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">Testimonials</a>
                         </li>
                     </ul>
                 </div>

                 <div>
                     <h3 class="footer__title">Contact</h3>

                     <ul class="footer__links">
                         <li>
                             <a href="#" class="footer__link">Call Center</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">Support Center</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">Contact Us</a>
                         </li>
                     </ul>
                 </div>

                 <div>
                     <h3 class="footer__title">Support</h3>

                     <ul class="footer__links">
                         <li>
                             <a href="#" class="footer__link">Privacy Policy</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">Terms & Services</a>
                         </li>

                         <li>
                             <a href="#" class="footer__link">Payments</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>

         <div class="footer__group">
             <div class="footer__social">
                 <a href="https:/www.facebook.com/" class="footer__social-link" target="_blank"><i class="ri-facebook-line"></i></a>

                 <a href="https:/www.instagram.com/" class="footer__social-link" target="_blank"><i class="ri-instagram-line"></i></a>

                 <a href="https:/www.twitter.com/" class="footer__social-link" target="_blank"><i class="ri-twitter-line"></i></a>

                 <a href="https:/www.youtube.com/" class="footer__social-link" target="_blank"><i class="ri-youtube-line"></i></a>
             </div>

             <span class="footer__copy">&#169; Copyright Sansoftwares. All rights reserved</span>
         </div>
     </div>
 </footer>


 <!--========== MODAL BOX ==========-->
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
     Book Now
 </button>
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content" style="border-radius: 0px;">
             <div class="modal-header">
                 <h2 class="modal-title fs-5 cont_color" id="exampleModalLabel">BOOK YOUR TRIP NOW</h2>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form class="join__form" id="bookNow">
                     <input type="hidden" id="setUrl" value="<?php echo base_url('bookNow'); ?>" />
                     <div class="row">
                         <div class="col-md-12 mb-2">
                             <input type="text" name="name" placeholder="Name*" class="modal__input" maxlength="35" autocomplete="off" required>
                         </div>
                         <div class="col-md-12 mb-2">
                             <input type="text" name="phone" placeholder="Mobile*" class="modal__input" maxlength="10" autocomplete="off" required>
                         </div>
                         <div class="col-md-12 mb-2">
                             <input type="email" name="email" placeholder="Email*" class="modal__input" maxlength="50" autocomplete="off" required>
                         </div>
                         <div class="col-md-12 mb-2">
                             <select name="package" class="modal__input">
                                 <option value="1">Kerala</option>
                                 <option value="2">Kedarnath</option>
                                 <option value="3">Tungnath</option>
                                 <option value="4">Flower Vally</option>
                                 <option value="5">Uttrakhand</option>
                             </select>
                         </div>
                         <div class="col-md-6 mb-2">
                             <input type="text" name="check_in" placeholder="Check in date*" class="modal__input datepicker" maxlength="50" autocomplete="off" required>
                         </div>
                         <div class="col-md-6 mb-2">
                             <input type="text" name="check_out" placeholder="Check out date*" class="modal__input datepicker" maxlength="50" autocomplete="off" required>
                         </div>
                         <div class="col-md-12 mb-2">
                             <textarea name="message" id="message" cols="30" rows="10" class="modal__input" placeholder="Message" maxlength="200" autocomplete="off" required></textarea>
                         </div>
                         <!-- <div class="col-md-6 mb-2">
                             <div class="g-recaptcha" data-sitekey="6Lcu0CgoAAAAAFHEyzottNTREA6xlJELFSlSfKhT"></div>
                         </div> -->
                         <div class="col-md-6 mb-2">
                             <button class="modal_button float-end" type="button" id="submit" onclick="addData('bookNow')">
                                 Submit <i class="ri-arrow-right-line"></i>
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
             <div class="modal-footer">
                 <button class="modal_button float-end" type="button" data-bs-dismiss="modal">
                     Close</i>
                 </button>
                 <button class="modal_button float-end" type="button">
                     Book Now</i>
                 </button>
             </div>
         </div>
     </div>
 </div>


 <!--========== SCROLL UP ==========-->
 <a href="#" class="scrollup" id="scroll-up">
     <i class="ri-arrow-up-line"></i>
 </a>

 <!--=============== Animation ===============-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
 <script src="<?= base_url('assets/js/notify.min.js'); ?>"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
 <script src="<?= base_url('assets/js/swiper.js'); ?>"></script>
 <script src="<?= base_url('assets/js/scrollreveal.min.js'); ?>"></script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

 <!--=============== MAIN JS ===============-->
 <script src="<?= base_url('assets/js/main.js'); ?>"></script>

 <script>
     $(function() {
         $(".datepicker").datepicker();
     });
 </script>
 </body>

 </html>