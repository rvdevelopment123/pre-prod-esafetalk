<?php
/*
Template Name: Blogs
*/

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

$allBlogs = get_posts($args);

// Conditions
$conditions = get_posts([
    'post_type' => 'mh_conditions',
]);
?>
<?php get_header(); ?>
<main>
    <div class="blog">
        <div class="blog__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/bg-blur.png" alt="Background">
        </div>

        <h1>Blog</h1>

<!--
        <div class="container">
            <form action="<?php echo get_home_url(); ?>/search" method="GET">
                <div class="search-box">
                    <input type="text" name="search" placeholder="Type a keyword...">

                    <div>
                        <button class="button">Search</button>
                        <div class="u-clearfix"></div>
                    </div>
                </div>

                <div class="u-clearfix"></div>
            </form>
        </div>
-->

        <?php if(!empty($featuredBlogs)) : ?>
            <div class="featured-blogs container">
                <a class="featured-blog-card" href="<?php echo get_permalink($latest); ?>">
                    <?php
                        $timeToRead = get_field('time_to_read', $latest->ID);
                        $thumbnail = get_field('thumbnail', $latest->ID);
                        $featuredTag = get_field('featured_tag', $latest->ID);
                        $tag = $featuredTag ? get_tag($featuredTag) : null;
                    ?>
                    <div class="featured-blog-card__thumbnail">
                        <img src="<?php echo esc_attr($thumbnail['sizes']['large']); ?>" alt="<?php echo esc_html__($latest->post_title); ?> thumbnail photo">
                    </div>

                    <div class="featured-blog-card__content">
                        <h3><?php echo esc_html__($latest->post_title) ?></h3>

                        <p><?php echo get_the_excerpt($latest) ?></p>

                        <div class="featured-blog-card__details">
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

                <div class="featured-blog-strips">
                    <?php foreach($otherBlogs as $blog) : ?>
                        <?php
                            /** @var WP_Post $blog */
                            $timeToRead = get_field('time_to_read', $blog->ID);
                            $thumbnail = get_field('thumbnail', $blog->ID);
                            $featuredTag = get_field('featured_tag', $blog->ID);
                            $tag = $featuredTag ? get_tag($featuredTag) : null;
                        ?>
                        <a class="featured-blog-strip" href="<?php echo get_permalink($blog); ?>">
                            <div class="featured-blog-strip__thumbnail">
                                <img src="<?php echo esc_attr($thumbnail['sizes']['thumbnail']); ?>" alt="<?php echo esc_html__($blog->post_title); ?> thumbnail photo">
                            </div>

                            <div class="featured-blog-strip__content">
                                <p><?php echo esc_html__($blog->post_title); ?></p>

                                <div class="featured-blog-strip__details">
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
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="all-blogs">
            <div class="all-blogs__nav container">
                <ul>
                    <li><a <?php if(!$activeCategory) echo 'class="active"'; ?> href="<?php echo get_permalink() ?>">All</a></li>

                    <?php foreach($categories as $category) : ?>
                        <li><a <?php if($activeCategory && $activeCategory->term_id == $category->term_id) echo 'class="active"'; ?> href="<?php echo get_permalink() . '?category=' . $category->term_id; ?>"><?php echo $category->name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="blog-cards container">
                <?php foreach($allBlogs as $blog) : ?>
                    <?php
                        /** @var WP_Post $blog */
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
                <?php endforeach; ?>
            </div>
        </div>

        <div class="conditions container">
            <h5>Learn More</h5>
            <h2>Mental Health Conditions</h2>

            <div class="conditions-grid">
                <?php foreach($conditions as $condition) : ?>
                    <a class="condition" href="<?php echo get_permalink($condition); ?>"><h1><?php echo esc_html__(get_field('condition', $condition->ID)); ?></h1></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php include get_template_directory() . "/sections/page-banner.php" ?>
</main>
<?php get_footer(); ?>
