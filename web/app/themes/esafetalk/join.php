<?php
/*
Template Name: Join Our Team
*/

?>
<?php get_header(); ?>
<main>
    <div class="join-team">
        <div class="hero-gradient">
            <div class="hero-gradient__bg">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/bg-hero-gradient.png" alt="Hero Gradient Background">
            </div>

            <div class="container">
                <div class="hero-gradient__content">
                    <h1>Be a <span>Care <br />Provider</span></h1>
                    <p>Join the team and be one of our Care Providers along with other members of our amazing Mental Health Community.</p>
                </div>

                <div class="hero-gradient__photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/photos/therapist.png" alt="Therapist Image">
                </div>
            </div>
        </div>

        <div class="therapist-perks container">
            <div class="therapist-perk">
                <div class="therapist-perk__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/photos/tperk-flexibility.png" alt="Work Flexibility">
                </div>
                <div class="therapist-perk__content">
                    <h3>Work Flexibility</h3>
                    <p>Engage with your clients in your preferred time and place.</p>
                </div>
            </div>

            <div class="therapist-perk">
                <div class="therapist-perk__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/photos/tperk-reliable.png" alt="Reliable Income">
                </div>
                <div class="therapist-perk__content">
                    <h3>Reliable Income</h3>
                    <p>You can choose your caseload and set your rate.</p>
                </div>
            </div>

            <div class="therapist-perk">
                <div class="therapist-perk__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/photos/tperk-incentives.png" alt="Get Performance-Based Incentives">
                </div>
                <div class="therapist-perk__content">
                    <h3>Get performance-based incentives</h3>
                    <p>As soon as you start working with clients, you get to earn "Points" that can be redeemed later on.</p>
                </div>
            </div>

            <div class="therapist-perk">
                <div class="therapist-perk__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/photos/tperk-fees.png" alt="No Sign-Up Fees">
                </div>
                <div class="therapist-perk__content">
                    <h3>No sign-up fees</h3>
                    <p>Start working with your clients and build your caseload immediately.</p>
                </div>
            </div>

            <div class="therapist-perk">
                <div class="therapist-perk__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/photos/tperk-support.png" alt="Supportive Community">
                </div>
                <div class="therapist-perk__content">
                    <h3>Supportive Community</h3>
                    <p>Just as you provide care for your client, we care for you too!</p>
                </div>
            </div>

            <div class="therapist-perk">
                <div class="therapist-perk__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/photos/tperk-network.png" alt="Broaden Your Reach">
                </div>
                <div class="therapist-perk__content">
                    <h3>Broaden your Reach</h3>
                    <p>Be seen by a wider audience- Our Clients and the growing Mental Health Community.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="join-banner">
        <div class="join-banner__content">
            <h2>Work with us</h2>
            <button class="button">Join the Team</button>
        </div>
        <div class="join-banner__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/bg-wwu.png" alt="Work With Us Background">
        </div>
    </div>
</main>
<?php get_footer(); ?>