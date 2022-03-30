<?php
/*
Template Name: Terms Of Use
*/

?>
<?php get_header(); ?>
<main>
    <div class="agreements container">
        <div class="agreements__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/bg-blur.png" alt="Background">
        </div>
        <h1>eSafetalk <br/> Terms of Use</h1>

        <div class="agreements__content">
            <?php echo get_the_content() ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
