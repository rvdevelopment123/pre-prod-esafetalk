<?php
/*
Template Name: 500
*/

?>
<?php get_header(); ?>
<main>
    <div class="error-page">
        <div class="error-page__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/error-page-bg.png" alt="Background">
        </div>

        <div class="error-page__content">
            <h5>error 500</h5>

            <h1>This page isn't working.</h1>

            <p>This page is currently unavailable. We might be experiencing technical difficulties. Please try again later or go back.</p>

            <button class="button">Back to Home</button>
        </div>
    </div>
</main>