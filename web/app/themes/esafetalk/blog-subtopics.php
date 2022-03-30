<?php
/*
Template Name: Blog Subtopics
*/

?>
<?php get_header(); ?>
<main>
    <div class="hero-gradient">
        <div class="hero-gradient__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/bg-hero-gradient.png" alt="About Background">
        </div>

        <div class="container">
            <div class="hero-gradient__content">
                <h5>Condition</h5>
                <h1>What is Abuse?</h1>
            </div>

            <div class="hero-gradient__photo">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/photos/about.png" alt="About Image">
            </div>
        </div>
    </div>

    <div class="topic container">
        <h4>Abuse is any deliberate act to harm or injure another person. It comes in many forms and is often considered a criminal offense. </h4>

        <hr />

        <p>
	        Hurting other people happens to everyone now and then. Hence, to make the definition of abuse clearer, it’s when a party intentionally takes control of
			another by inflicting harm. Abuse is a huge problem around the world. In the Philippines, women and children are the
			typical victims. Despite the government and many private organizations spearheading initiatives
			to combat violence towards women and children, it did little to make a difference.
        </p>
        <p>
			During the pandemic, maltreatment against women and children only heightened. Issues have
			rounded up one after another, that it has become more challenging to help the victims.
		</p>
    </div>

    <?php include get_template_directory() . "/sections/subtopics.php" ?>

    <div class="sources-section container">
        <h3>Sources</h3>

        <div class="sources">
            <a class="source" href="https://www.dcyf.wa.gov/safety/prevent-child-abuse" target=”_blank”>
                <p>Department of Children, Youth & Families</p>
                <span>https://www.dcyf.wa.gov/safety/prevent-child-abuse</span>
            </a>

            <a class="source" href="https://www.doj.gov.ph/child-protection-program.html" target=”_blank”>
                <p>Department of Justice Philippines</p>
                <span>https://www.doj.gov.ph/child-protection-program.html</span>
            </a>

            <a class="source" href="https://www.dcyf.wa.gov/safety/prevent-child-abuse" target=”_blank”>
                <p>Department of Children, Youth & Families</p>
                <span>https://www.dcyf.wa.gov/safety/prevent-child-abuse</span>
            </a>

            <a class="source" href="https://www.doj.gov.ph/child-protection-program.html" target=”_blank”>
                <p>Department of Justice Philippines</p>
                <span>https://www.doj.gov.ph/child-protection-program.html</span>
            </a>

            <a class="source" href="https://www.dcyf.wa.gov/safety/prevent-child-abuse" target=”_blank”>
                <p>Department of Children, Youth & Families</p>
                <span>https://www.dcyf.wa.gov/safety/prevent-child-abuse</span>
            </a>

            <a class="source" href="https://www.doj.gov.ph/child-protection-program.html" target=”_blank”>
                <p>Department of Justice Philippines</p>
                <span>https://www.doj.gov.ph/child-protection-program.html</span>
            </a>

            <a class="source" href="https://www.dcyf.wa.gov/safety/prevent-child-abuse" target=”_blank”>
                <p>Department of Children, Youth & Families</p>
                <span>https://www.dcyf.wa.gov/safety/prevent-child-abuse</span>
            </a>

            <a class="source" href="https://www.doj.gov.ph/child-protection-program.html" target=”_blank”>
                <p>Department of Justice Philippines</p>
                <span>https://www.doj.gov.ph/child-protection-program.html</span>
            </a>

            <a class="source" href="https://www.dcyf.wa.gov/safety/prevent-child-abuse" target=”_blank”>
                <p>Department of Children, Youth & Families</p>
                <span>https://www.dcyf.wa.gov/safety/prevent-child-abuse</span>
            </a>

            <a class="source" href="https://www.doj.gov.ph/child-protection-program.html" target=”_blank”>
                <p>Department of Justice Philippines</p>
                <span>https://www.doj.gov.ph/child-protection-program.html</span>
            </a>
        </div>
    </div>

    <div class="condition-nav-section">
        <div class="container">
            <p>Learn more about Mental Health Conditions</p>
            <div class="condition-nav">
                <a class="condition-nav__next" href="">
                    <span class="condition-nav__label">Next</span>
                    Bipolar
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/arrow.png" alt="Arrow">
                </a>

                <hr />

                <a class="condition-nav__prev" href="">
                    <span class="condition-nav__label">Prev</span>
                    ADHD
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/arrow-back.png" alt="Arrow">
                </a>
            </div>
        </div>
    </div>

    <?php include get_template_directory() . "/sections/page-banner.php" ?>
</main>
<?php get_footer(); ?>
