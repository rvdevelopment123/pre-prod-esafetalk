<?php
/*
Template Name: FAQs
*/

?>
<?php get_header(); ?>
<main>
    <div class="faqs container">
        <div class="faqs__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/bg-blur.png" alt="Background">
        </div>
        <h1>Frequently Asked Questions</h1>

        <h3>For Care Seekers</h3>

        <?php if($seekerFAQs = get_field('care_seeker_faqs')): ?>
        <div class="accordions">
            <?php foreach($seekerFAQs as $key => $faq) : ?>
            <div class="accordion">
                <input type="checkbox" id="seeker<?php echo $key ?>">
                <label class="accordion__question" for="seeker<?php echo $key ?>">
                    <?php echo _e($faq['question']); ?>
                </label>
                <div class="accordion__answer">
                    <?php echo _e($faq['answer']); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <h3>For Care Providers</h3>

        <?php if($providerFAQs = get_field('care_provider_faqs')): ?>
        <div class="accordions">
            <?php foreach($providerFAQs as $key => $faq) : ?>
            <div class="accordion">
                <input type="checkbox" id="provider<?php echo $key ?>">
                <label class="accordion__question" for="provider<?php echo $key ?>">
                    <?php echo _e($faq['question']); ?>
                </label>
                <div class="accordion__answer">
                    <?php echo _e($faq['answer']); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="faqs__temp-check">
            <p>Are these answers helpful for you?</p>
            <p>Please, let us know using the form for other concerns.</p>
        </div>
    </div>
    <?php include get_template_directory() . "/sections/contact-us.php" ?>

    <?php include get_template_directory() . "/sections/page-banner.php" ?>
</main>
<?php get_footer(); ?>
