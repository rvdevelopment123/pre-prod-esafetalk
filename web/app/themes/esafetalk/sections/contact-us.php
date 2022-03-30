<div class="contact-section" id="contactUs">
    <div class="contact-wrapper container">
        <div class="contact__head">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/Lottie.png" alt="Hearts">
            <h2>Connect <span>with us</span></h2>
            <p>Got questions or concerns for us? Let us know!</p>
            <div class="contact__socials">
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

        <div class="contact__form">
            <form action="https://e-safetalk.herokuapp.com/esafetalk/contact" method="post">
                <input required type="text" name="nickname" placeholder="Nickname">
                <input required type="text" name="contact" placeholder="Mobile/Tel. No. (Optional)">
                <input required type="email" name="email" placeholder="Email Address">
                <textarea required name="message" id="" rows="10" placeholder="Message"></textarea>

                <input class="button" type="submit" value="Submit">
            </form>

            <p>Your personal information is safe with us. We don’t share any personal information we collect from visitors.</p>
        </div>
    </div>

    <div class="contact__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/bg-ellipses.png" alt="Hearts">
    </div>
</div>