<?php
/*
Template Name: Blog Subtopics
*/

$heroImage = get_field('hero_image');
$conditionName = get_field('condition');
$needToKnow = get_field('need_to_know');
$sources = get_field('sources');
$related = get_field('related_reads');
?>
<?php get_header(); ?>
<main>
    <div class="hero-gradient">
        <div class="hero-gradient__bg">
            <img src="https://pre-prod.esafetalk.com/app/uploads/2022/03/bg-gradient.png" alt="About Background">
        </div>

        <div class="container">
            <div class="hero-gradient__content">
                <h5>Condition</h5>
                <h1><?php echo esc_html__($conditionName); ?></h1>
            </div>

            <?php if($heroImage): ?>
                <div class="hero-gradient__photo">
                    <img src="<?php echo $heroImage['sizes']['large']; ?>" alt="<?php echo esc_html__(the_title()) ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="topic container">
        <?php echo esc_html__(the_content()); ?>
    </div>

    <?php if($needToKnow && count($needToKnow) > 0) : ?>
    <div class="subtopics-section">
        <div class="container">
            <h1>What You Need to Know About <?php echo esc_html__($conditionName); ?> in the Philippines</h1>

            <div class="subtopics">
                <?php foreach ($needToKnow as $key => $blog) : ?>
                <a class="subtopic" href="<?php echo get_permalink($blog['blog']); ?>">
                    <span><?php echo $key + 1; ?></span>
                    <?php echo esc_html__($blog['list_title']) ;?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if($sources && count($sources) > 0) : ?>
    <div class="sources-section container">
        <h3>Sources</h3>

        <div class="sources">
            <?php foreach($sources as $source): ?>
            <a class="source" href="<?php echo esc_html__($source['link']); ?>" target=”_blank” rel="noreferrer">
                <p><?php echo esc_html__($source['title']); ?></p>
                <span><?php echo esc_html__($source['link']); ?></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

    <?php if($related && count($related) > 0) : ?>
    <div class="related-reads-section">
        <div class="container">
            <h3>Related Reads</h3>

            <div class="blog-cards">
                <?php foreach($related as $blog) : ?>
                    <?php
                        $timeToRead = get_field('time_to_read', $blog->ID);
                        $thumbnail = get_field('thumbnail', $blog->ID);
                        $featuredTag = get_field('featured_tag', $blog->ID);
                        $tag = $featuredTag ? get_tag($featuredTag) : null;
                    ?>

                    <a class="blog-card" href="<?php echo get_permalink($blog); ?>">
                        <div class="blog-card__thumbnail">
                            <img src="<?php echo esc_attr($thumbnail['sizes']['medium']); ?>" alt="<?php echo esc_html__($blog->post_title); ?> thumbnail photo">
                        </div>

                        <div class="blog-card__content">
                            <h3><?php echo esc_html__($blog->post_title) ?></h3>

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
    </div>
    <?php endif; ?>

    <?php include get_template_directory() . "/sections/page-banner.php" ?>
</main>
<?php get_footer(); ?>
