
<?php 

// Featured Blogs
$featuredBlogs = get_field('featured_blogs');
$latest = !empty($featuredBlogs) ? $featuredBlogs[0] : null;
$otherBlogs = array_splice($featuredBlogs, 1);

// All Blogs
$categories = get_categories();
$categoryTabId = isset($_GET['category']) ? $_GET['category'] : null;
$activeCategory = $categoryTabId ? get_category($categoryTabId) : null;

$args = [];

if($activeCategory) {
    $args['category'] = $activeCategory->term_id;
}

$blogs = get_posts($args);

// Conditions
$conditions = get_posts([
    'post_type' => 'mh_conditions',
]);
echo "12:47 PM";
die;
get_header(); 
?>

<main>
    <div class="hero">
        <div class="hero__content">
            <h1>Mental wellness starts with <span>you.</span></h1>
            <p>Taking the first step to work on your mental health is a courageous thing to do, but we're always here to help.</p>
        </div>
        <div>
            <div class="hero__image">
                <img src="https://pre-prod.esafetalk.com/app/uploads/2022/03/home-banner-img-e1648053162456.png" alt="Hero Banner">
            </div>
            <div class="u-clearfix"></div>
        </div>
    </div>

    <div class="therapy-section">
        <div class="therapy-cards__container">
            <h3>What type of therapy do you need?</h3>

            <div class="therapy-cards">
                <a class="therapy-card therapy-card--blue" href="">
                    <p class="therapy-card__text">
                        <span>Therapy For <br /></span>
                        <span>Minors</span>
                    </p>

                    <span class="therapy-card__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/minor.png" alt="Minor">
                    </span>
                </a>

                <a class="therapy-card therapy-card" href="">
                    <p class="therapy-card__text"> 
                        <span>Therapy For <br /></span>
                        <span>Adults</span>
                    </p>

                    <span class="therapy-card__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/adult.png" alt="Adult">
                    </span>
                </a>

                <a class="therapy-card therapy-card--purple" href="">
                    <p class="therapy-card__text">
                        <span>Therapy For <br /></span>
                        <span>Couples</span>
                    </p>

                    <span class="therapy-card__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/couple.png" alt="Couple">
                    </span>
                </a>
            </div>
        </div>
    </div>

    <div class="steps-section" id="howItWorks">
        <div class="container">
            <h2>How <span>eSafeTalk</span> Works</h2>
            <div class="steps">
                <div class="step">
                    <div class="step__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/how-it-works-1.png" alt="Make An Appointment">
                    </div>

                    <div class="step__content">
                        <p>1</p>
                        <p>Make an Appointment</p>
                        <p>Just a quick and easy registration for easier access to the services in the future.</p>
                    </div>
                </div>

                <div class="step">
                    <div class="step__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/how-it-works-2.png" alt="Initial Assessment">
                    </div>

                    <div class="step__content">
                        <p>2</p>
                        <p>Initial Assessment</p>
                        <p>Answer a few questions as your initial assessment to get matched to therapists based on your needs.</p>
                    </div>
                </div>

                <div class="step">
                    <div class="step__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/how-it-works-3.png" alt="Choose your Therapist">
                    </div>

                    <div class="step__content">
                        <p>3</p>
                        <p>Choose your Therapist</p>
                        <p>Choose the therapist from the recommended ones based on your initial assessment.</p>
                    </div>
                </div>

                <div class="step">
                    <div class="step__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/how-it-works-4.png" alt="Enter the Safe Space">
                    </div>

                    <div class="step__content">
                        <p>4</p>
                        <p>Enter the <a href="">Safe Space</a></p>
                        <p>Start talking to your therapist in your preferred “safe space”- online chat, voice, or video call.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-container">
            <div class="modal">
                <h4>What's a Safe Space?</h4>
                <p>A “Safe Space” is an environment that is free from discrimination, judgment, hate, criticism or any other form of physical or emotional harm. This is a place where you can let your guard down, truly be yourself, and recharge.</p>
                <button class="button">Got it!</button>
            </div>
        </div>
    </div>

    <div class="perks-section" id="whyESafeTalk">
        <div class="container">
            <h2>Perks of Using <span>eSafeTalk</span></h2>

            <div class="perks">
                <div class="perk">
                    <div class="perk__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/perks-247.png" alt="Accessibility">
                    </div>

                    <p class="perk__text">
                        24/7 accessibility to therapy or counseling
                    </p>
                </div>

                <div class="perk">
                    <div class="perk__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/perks-licensed-therapists.png" alt="Licensed Therapists">
                    </div>

                    <p class="perk__text">
                        Get therapy provided by licensed therapists and counselors
                    </p>
                </div>

                <div class="perk">
                    <div class="perk__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/perks-privacy.png" alt="Privacy">
                    </div>

                    <p class="perk__text">
                        Assurance that everything you share is just between you and your therapist
                    </p>
                </div>

                <div class="perk">
                    <div class="perk__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/perks-choice-call.png" alt="Choice of Communication">
                    </div>

                    <p class="perk__text">
                        Your choice of connecting with your therapist- online chat, voice call, or video call
                    </p>
                </div>

                <div class="perk">
                    <div class="perk__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/perks-safe.png" alt="Safe">
                    </div>

                    <p class="perk__text">
                        Feel safe knowing that your therapist or counselor has been vetted and background checked
                    </p>
                </div>

                <div class="perk">
                    <div class="perk__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/perks-booking-therapists.png" alt="Hassle-free">
                    </div>

                    <p class="perk__text">
                        Ease of booking and switching therapists
                    </p>
                </div>

                <div class="perk">
                    <div class="perk__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/perks-support-space.png" alt="Convenient">
                    </div>

                    <p class="perk__text">
                        Get support you need in your preferred space
                    </p>
                </div>

                <div class="perk">
                    <div class="perk__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/perks-affordable.png" alt="Affordable">
                    </div>

                    <p class="perk__text">
                        Affordable and flexible payment plans that fit your means and lifestyle
                    </p>
                </div>

                <div class="perk">
                    <div class="perk__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/perks-match-therapists.png" alt="Match and Choose Therapist">
                    </div>

                    <p class="perk__text">
                        Get matched with the best therapists suited to your individual needs and get to choose by viewing their profile
                    </p>
                </div>

                <div class="perk">
                    <div class="perk__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/perks-points.png" alt="Points Reward">
                    </div>

                    <p class="perk__text">
                        Earn points that help with your therapy or help others
                    </p>
                </div>
            </div>

            <div class="perks__photo">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/photos/perks-esafetalk.png" alt="Perks Photo">
            </div>
        </div>
    </div>

    <?php include get_template_directory() . "/sections/page-banner.php" ?>

    <?php if($featuredBlogs = get_field('featured_blogs')) : ?>
    <div class="blogs-section">
        <div class="blogs-section__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/blog-section-bg.jpg" alt="Perks Photo">
        </div>

        <div class="section-title">
            <h5>Featured Blogs</h5>
            <h2>Let's talk about it</h2>
        </div>

        <div class="container">
            <div class="blog-cards">
                <?php foreach($featuredBlogs as $blogDetails) : ?>
                    <?php
                        /** @var WP_Post $blog */
                        $blog = $blogDetails['blog'];
                        $timeToRead = get_field('time_to_read', $blog->ID);
                        $thumbnail = get_field('thumbnail', $blog->ID);
                        $featuredTag = get_field('featured_tag', $blog->ID);
                        $tag = $featuredTag ? get_tag($featuredTag) : null;
                    ?>
                    <a class="blog-card" href="<?php echo get_permalink($blog); ?>">
                        <div class="blog-card__thumbnail">
                            <img src="<?php echo esc_attr($thumbnail['sizes']['thumbnail']); ?>" alt="<?php echo esc_html__($blog->post_title); ?> thumbnail photo">
                        </div>

                        <div class="blog-card__content">
                            <h4><?php echo esc_html__($blog->post_title); ?></h4>

                            <p><?php echo get_the_excerpt($blog) ?></p>

                            <div class="blog-card__details">
                                <?php if($tag) : ?>
                                    <span><?php echo esc_html__($tag->name); ?></span>
                                <?php endif; ?>

                                <?php if($tag && $timeToRead) : ?>
                                    <span></span>
                                <?php endif; ?>

                                <?php if($timeToRead) : ?>
                                    <span><?php echo esc_html__($timeToRead) ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                <?php endforeach ?>
            </div>

            <a class="link link--icon" href="/blogs">
                <span>See all blogs</span>
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/arrow.png" alt="Arrow">
            </a>
            <div class="u-clearfix"></div>
        </div>
    </div>
    <?php endif ?>

    <?php if($featuredTherapists = get_field('featured_therapists')) : ?>
    <div class="therapists-section" id="featuredTherapists">
        <div class="therapists-section__details container">
            <h2>Meet our <span>Therapist</span></h2>

            <div>
                <p>Choose the therapist from the recommended ones based on your initial assessment.</p>

                <a class="link link--icon" href="/join-our-team">
                    <span>See all perks</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/arrow.png" alt="Arrow">
                </a>
                <div class="u-clearfix"></div>
            </div>
        </div>

        <div class="swiper-wrapper">
            <div class="therapist-cards swiper-wrapper">
                <?php foreach($featuredTherapists as $therapist) : ?>
                    <div class="swiper-slide">
                        <div class="therapist-card ">
                            <div class="therapist-card__photo">
                                <img src="<?php echo esc_attr($therapist['picture']['sizes']['medium']); ?>" alt="<?php echo $therapist['name']; ?>'s Photo">
                            </div>

                            <div class="therapist-card__details">
                                <p class="details__name"><?php echo esc_html__($therapist['name']) ?></p>
                                <p><?php echo esc_html__($therapist['description']) ?></p>

                                <ul class="details__practices">
                                    <?php foreach($therapist['scope_of_practices'] as $scopeOfPractice) : ?>
                                        <li><?php echo esc_html__($scopeOfPractice['scope_of_practice']); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="therapist-section__invite">
            <h3>Work with us</h3>
            <a class="button" href="">Join our team</a>
        </div>
    </div>
    <?php endif ?>

    <?php if($reviews = get_field('featured_reviews')) : ?>
    <div class="reviews-section container" id="featuredReviews">
        <h5>People we've talked to</h5>
        <h2>Let's end the stigma together</h2>

        <div class="review-cards">

            <?php foreach($reviews as $review) : ?>
            <div class="review-card">
                <p><?php echo esc_html__($review['review']); ?></p>

                <div class="reviewer">
                    <div class="reviewer__photo">
                        <img src="<?php echo esc_attr($review['picture']['sizes']['medium']); ?>" alt="<?php echo $review['nickname']; ?>'s Photo">
                    </div>
                    <div>
                        <p><?php echo esc_html__($review['nickname']); ?></p>

                        <?php if($review['client_type']) : ?>
                            <p><?php echo esc_html__($review['client_type']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
    <?php endif ?>
	<div class="featured--blog--section">
		<h3>Featured Blogs</h3>
		<h1>Let’s talk about it</h1>
		<div class="blogs--wrapper">
			<?php foreach($otherBlogs as $blog) : ?>
                <?php
                    /** @var WP_Post $blog */
                    $timeToRead = get_field('time_to_read', $blog->ID);
                    $thumbnail = get_field('thumbnail', $blog->ID);
                    $featuredTag = get_field('featured_tag', $blog->ID);
                    $tag = $featuredTag ? get_tag($featuredTag) : null;
                ?>
                	<a class="blog--container" href="<?php echo get_permalink($blog); ?>">
						<div class="blog--img--container">
		                    <img src="<?php echo esc_attr($thumbnail['sizes']['thumbnail']); ?>" alt="<?php echo esc_html__($blog->post_title); ?> thumbnail photo">
						</div>
						<h1 class="blog--heading--1"><?php echo esc_html__($blog->post_title); ?></h1>
						<p class="blog--paragraph--1"><?php echo get_the_excerpt($blog) ?></p>
						<div class="blog--tag">
				
                            <?php if($tag) : ?>
                                <span><?php echo esc_html__($tag->name); ?></span>
                            <?php endif; ?>

                            <?php if($tag && $timeToRead) : ?>
                                <span></span>
                            <?php endif; ?>

                            <?php if($timeToRead) : ?>
                                <span><?php echo esc_html__($timeToRead) ?></span>
                            <?php endif; ?>
						</div>
					</a>
			<?php endforeach; ?>

			<div class="blog--container">
				<div class="blog--img--container">
                    <img src="https://pre-prod.esafetalk.com/app/uploads/2022/03/blog_img_1.jpg">
				</div>
				<h1 class="blog--heading--1">My Anxiety Interferes With My Ability to Hold a Job</h1>
				<p class="blog--paragraph--1">It’s been a while since we’ve spent some quality time together, and that was fine. Although we’ve known each other for a very long time.</p>
				<div class="blog--tag"><span>Depression</span> &bull; 2 min read </div>
			</div>
			<div class="blog--container">
				<div class="blog--img--container">
                    <img src="https://pre-prod.esafetalk.com/app/uploads/2022/03/blog_img_2.jpg">
				</div>
				<h1 class="blog--heading--1">My Anxiety Interferes With My Ability to Hold a Job</h1>
				<p class="blog--paragraph--1">It’s been a while since we’ve spent some quality time together, and that was fine. Although we’ve known each other for a very long time.</p>
				<div class="blog--tag"><span>Anxiety</span> &bull; 2 min read </div>
			</div>
			<div class="blog--container">
				<div class="blog--img--container">
                    <img src="https://pre-prod.esafetalk.com/app/uploads/2022/03/blog_img_3.jpg">
				</div>
				<h1 class="blog--heading--1">How To Fully Release Difficult Emotions That Hold You Back</h1>
				<p class="blog--paragraph--1">It’s been a while since we’ve spent some quality time together, and that was fine. Although we’ve known each other for a very long time.</p>
				<div class="blog--tag"><span>Self-Help</span> &bull; 2 min read </div>
			</div>
		</div>
	</div>
	
	<div class="featured--care--providers">
		<div class="providers--wrappers">
			<div class="provider--container">
				<div class="provider--img">
					<img src="https://pre-prod.esafetalk.com/app/uploads/2022/03/jill.png">
				</div>
				<div class="provider--info">
					<h5>For Professionals</h5>
					<h1>Be part of a team of <span>Care Providers</span></h1>
					<p>Open up more opportunities to help people seeking therapy here in eSafeTalk.</p>
					<a class="join--btn">Join as a Care Provider</a>
				</div>
			</div>
		</div>
	</div>
	<div class="testimony--section">
		<h2>PEOPLE We’ve talked to</h2>
		<h1>Let’s end the stigma together.</h1>
		<div class="testimony--slider">
			<div>
				<a class="testimony-card">
				    <img src="https://pre-prod.esafetalk.com/app/uploads/2022/03/sample_1.png">
				</a>
			</div>
	
			<div>
				<a class="testimony-card">
				    <img src="https://pre-prod.esafetalk.com/app/uploads/2022/03/sample_2.png">
				</a>
			</div>
	
			<div>
				<a class="testimony-card">
				    <img src="https://pre-prod.esafetalk.com/app/uploads/2022/03/sample_3.png">
				</a>
			</div>
			
			<div>
				<a class="testimony-card">
				    <img src="https://pre-prod.esafetalk.com/app/uploads/2022/03/sample_1.png">
				</a>
			</div>
	
			<div>
				<a class="testimony-card">
				    <img src="https://pre-prod.esafetalk.com/app/uploads/2022/03/sample_2.png">
				</a>
			</div>
	
			<div>
				<a class="testimony-card">
				    <img src="https://pre-prod.esafetalk.com/app/uploads/2022/03/sample_3.png">
				</a>
			</div>
		</div>
	</div>
    <?php include get_template_directory() . "/sections/contact-us.php" ?>
</main>
<script type="text/javascript">
jQuery(document).ready(() => {
    jQuery('.testimony--slider').slick({
	   slidesToShow: 4,
       slidesToScroll: 1,
       speed: 9500,
       autoplaySpeed: 0,
       autoplay: true,
       arrows: false,
       cssEase: 'linear',
       variableWidth: true,
       pauseOnHover: true,
	   adaptiveHeight: true,
	   centerMode: true,
       responsive: [
         {
           breakpoint: 480,
           settings: {
             autoplaySpeed: 0,
             autoplay: true,
             arrows: false,
             cssEase: 'linear',
             centerMode: true,
             centerPadding: '5px',
             slidesToShow: 3
           }
         }
       ]
    });
});
</script>
<?php get_footer(); ?>