<footer>
    <div class="container">
        <div class="footer__main">
            <div class="footer__logo-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/logo-icon.png" alt="Logo Icon">
            </div>

            <div class="footer__links">
                <ul>
                    <li><a href="/#howItWorks">How It Works</a></li>
                    <li><a href="/#whyESafeTalk">Why eSafeTalk</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/#featuredTherapists">Therapists</a></li>
                </ul>
                <ul>
                    <li><a href="/#featuredReviews">Reviews</a></li>
                    <li><a href="/about-us">About</a></li>
                    <li><a href="/faqs">FAQs</a></li>
                    <li><a href="/#contactUs">Contact</a></li>
                </ul>
            </div>

            <div class="footer__socials">
                <p>Follow Us</p>
                <ul>
                    <li>
                        <a class="button button--icon" href="https://www.facebook.com/esafetalk" target=”_blank”>
                            <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-facebook.png" alt="Social Media Facebook">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-facebook-white.png" alt="Social Media Facebook">
                        </a>
                    </li>
                    <li>
                        <a class="button button--icon" href="https://www.instagram.com/esafetalk.mentalhealth/" target=”_blank”>
                            <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-instagram.png" alt="Social Media Instagram">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-instagram-white.png" alt="Social Media Instagram">
                        </a>
                    </li>
                    <li>
                        <a class="button button--icon" href="mailto: esafetalk@yahoo.com" target=”_blank”>
                            <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-email.png" alt="Email">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-email-white.png" alt="Email">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer__copyright">
            <div class="copyright__text">
                <div class="footer__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/logo-text.png" alt="Logo">
                </div>

                <p>
                    Copyright © 2021 eSafeTalk Inc. All rights reserved.
                </p>
            </div>

            <ul>
                <li><a href="/privacy-policy">Privacy Policy</a></li>
                <li><a href="/terms-of-use">Terms of Conditions</a></li>
            </ul>
        </div>
    </div>
</footer>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
function sidebarToggle() {
   var element = document.getElementById("nav__menu");
   element.classList.toggle("show");
}
</script>
 </body>
</html>