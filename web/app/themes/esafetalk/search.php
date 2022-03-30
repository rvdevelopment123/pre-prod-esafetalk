<?php
/*
Template Name: Search
*/

$searchText = esc_html__($_GET['search']);

$searchQuery = new WP_Query([
    'post_type' => 'post',
    's' => $searchText,
    'post_count' => 10,
]);
$searchResults = $searchQuery->get_posts();
?>
<?php get_header(); ?>
<main>
    <div class="blog">
        <div class="blog__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/bg-blur.png" alt="Background">
        </div>

        <h1>Search Blog</h1>

        <div class="container">
            <form action="<?php echo get_home_url(); ?>/search" method="GET">
                <div class="search-box">
                    <input type="text" name="search" value="<?php echo $searchText; ?>" placeholder="Type a keyword...">

                    <div>
                        <button class="button">Search</button>
                        <div class="u-clearfix"></div>
                    </div>
                </div>

                <div class="u-clearfix"></div>
            </form>
        </div>

        <?php if(!empty($searchResults)) : ?>
        <div class="blog-cards container">
            <?php foreach($searchResults as $blog) : ?>
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

                        <p><?php echo get_the_excerpt($blog); ?></p>

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
        <?php endif; ?>
    </div>

</main>
<?php get_footer(); ?>
