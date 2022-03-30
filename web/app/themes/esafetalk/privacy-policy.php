<?php
/*
Template Name: Privacy Policy
*/

?>
<?php get_header(); ?>
<main>
    <div class="agreements container">
        <div class="agreements__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/bg-blur.png" alt="Background">
        </div>
        <h1>Privacy <br/> Policy</h1>

        <div class="agreements__content">
            <p>Last Updated: <?php echo the_modified_date("F d, Y"); ?></p>

            <?php echo get_the_content(); ?>
        </div>
    </div>
    <section>
    </section>
</main>
<?php get_footer(); ?>