<?php
/*
Template Name: 404
*/

?>
<?php get_header(); ?>
<main>
    <div class="error-page">
        <div class="error-page__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/error-page-bg.png" alt="Background">
        </div>

        <div class="error-page__content">
            <h5>error 404</h5>

            <h1>We couldn't find this page.</h1>

            <p>You might be using a wrong or expired link. You can go back to resume browsing eSafeTalk.</p>

            <a href="/" class="button">Back to Home</a>
        </div>
    </div>
</main>