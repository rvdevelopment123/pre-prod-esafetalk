<?php
/*
Template Name: Blog Article
*/

$blog = get_post();
$timeToRead = get_field('time_to_read', $blog->ID);
$heroImage = get_field('hero_image', $blog->ID);
$featuredCategory = get_field('featured_tag', $blog->ID);
$tag = $featuredCategory ? get_tag($featuredCategory) : null;
$relatedBlog = get_posts( array( 'category__in' => wp_get_post_categories($blog->ID), 'numberposts' => 3, 'post__not_in' => array($blog->ID) ) );
?>
<?php get_header(); ?>
    <main>
        <div class="article-header container">
            <div class="article-header__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/backgrounds/bg-blur.png" alt="Background">
        </div>

        <div class="article-header__details">
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

        <h2><?php echo esc_html__($blog->post_title); ?></h2>

        <?php if($heroImage) : ?>
            <div class="article-header__image">
                <img src="<?php echo esc_attr($heroImage['sizes']['large']); ?>" alt="<?php echo esc_html__($blog->post_title); ?> hero image">
            </div>
        <?php endif; ?>
    </div>

    <div class="article container">
        <div class="article__share">
            <h5>Share <span>this article</span></h5>

            <ul>
                <li title="Facebook">
                    <a class="button button--icon" href="https://facebook.com" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-facebook-gray.png" alt="Facebook">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-facebook.png" alt="Facebook">
                    </a>
                </li>
                <li title="Instagram">
                    <a class="button button--icon" href="https://instagram.com" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-instagram-gray.png" alt="Instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-instagram.png" alt="Instagram">
                    </a>
                </li>
                <li title="Twitter">
                    <a class="button button--icon" href="https://twitter.com" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-twitter-gray.png" alt="Twitter">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-twitter.png" alt="Twitter">
                    </a>
                </li>
                <li title="Email">
                    <a class="button button--icon" href="" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-email-gray.png" alt="Email">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/socmed-email.png" alt="Email">
                    </a>
                </li>
                <li title="Copy Link">
                    <a class="button button--icon" href="" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/copy-link-gray.png" alt="Copy Link">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/copy-link.png" alt="Copy Link">
                    </a>
                </li>
            </ul>
        </div>

        <div class="article__content">
            <?php echo $blog->post_content; ?>
        </div>
    </div>

    <?php if($relatedBlog && count($relatedBlog) > 0) : ?>
    <div class="related-reads-section">
        <div class="container">
            <h3>Related Reads</h3>

            <div class="blog-cards">
                <?php foreach($relatedBlog as $relatedBlog) : ?>
                    <?php
                    $timeToRead = get_field('time_to_read', $relatedBlog->ID);
                    $thumbnail = get_field('thumbnail', $relatedBlog->ID);
                    $featuredCategory = get_field('featured_category', $relatedBlog->ID);
                    $tag = $featuredCategory ? get_tag($featuredCategory) : null;
                    ?>

                    <a class="blog-card">
                        <div class="blog-card__thumbnail">
                            <img src="<?php echo esc_attr($thumbnail['sizes']['medium']); ?>" alt="<?php echo esc_html__($relatedBlog->post_title); ?> thumbnail photo">
                        </div>

                        <div class="blog-card__content">
                            <h4><?php echo esc_html__($relatedBlog->post_title) ?></h4>

                            <p><?php echo get_the_excerpt($relatedBlog) ?></p>

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
    </div>
    <?php endif; ?>

    <?php include get_template_directory() . "/sections/page-banner.php" ?>
</main>
<?php get_footer(); ?>