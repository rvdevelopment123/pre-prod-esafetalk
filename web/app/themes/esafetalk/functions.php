<?php

include_once "acf/acf-front-page.php";
include_once "acf/acf-blog-details.php";
include_once "acf/acf-blogs.php";
include_once "acf/acf-faqs.php";
include_once "acf/acf-mental-health-condition.php";

function add_theme_scripts()
{
//    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/public/main.css', array(), '1.1', 'all');

    wp_enqueue_script('script', get_template_directory_uri() . '/public/main.js', array (), 1.1, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

/**
 * POST TYPE CHANGES
 */

function post_type_registration()
{
    register_post_type('mh_conditions', [
        'labels' => [
            'name' => 'Mental Health Conditions',
            'singular_name' => 'Mental Health Condition',
        ],
        'menu_position' => 4,
        'menu_icon' => 'dashicons-book',
        'public' => true,
        'publicly_queryable' => true,
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'mental-health-conditions'
        ]
    ]);
}

add_action('init', 'post_type_registration');

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blogs';
    $submenu['edit.php'][5][0] = 'Blogs';
    $submenu['edit.php'][10][0] = 'Add Blogs';
    echo '';
}

function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Blogs';
    $labels->singular_name = 'Blog';
    $labels->add_new = 'Add Blog';
    $labels->add_new_item = 'Add Blog';
    $labels->edit_item = 'Edit Blog';
    $labels->new_item = 'Blog';
    $labels->view_item = 'View Blog';
    $labels->search_items = 'Search Blogs';
    $labels->not_found = 'No Blogs found';
    $labels->not_found_in_trash = 'No Blogs found in Trash';
}

add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

function add_mental_health_condition_columns($columns)
{
    return array_merge($columns, array(
        'condition' => 'Condition',
    ));
}
add_filter ('manage_mh_conditions_posts_columns', 'add_mental_health_condition_columns');

function mental_health_condition_custom_column($column, $post_id)
{
    switch ($column) {
        case 'condition':
            echo get_post_meta ($post_id, 'condition', true);
            break;
    }
}
add_action('manage_mh_conditions_posts_custom_column', 'mental_health_condition_custom_column', 10, 2);

/**
 * POST TYPE CHANGES END
 */

/**
 * DISABLE COMMENTS
 */

add_action('admin_init', function ()
{
    // Redirect any user trying to access comments page
    global $pagenow;

    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

/**
 * DISABLE COMMENTS END
 */

/**
 * EXCERPT CHANGES
 */

function change_excerpt_length() {
    return 25;
}

add_filter( 'excerpt_length', 'change_excerpt_length', 999);

function change_excerpt_more( $more ) {
    return '...';
}

add_filter('excerpt_more', 'change_excerpt_more');

/**
 * EXCERPT CHANGES END
 */

add_action( 'phpmailer_init', 'send_smtp' );
function send_smtp( \PHPMailer\PHPMailer\PHPMailer $phpmailer ) {
    $phpmailer->IsSMTP();
    $phpmailer->Host = $_ENV['SES_HOST'];
    $phpmailer->Port = 587; // could be different
    $phpmailer->Username = $_ENV['SES_USER']; // if required
    $phpmailer->Password = $_ENV['SES_PASSWORD']; // if required
    $phpmailer->SMTPAuth = true; // if required
    $phpmailer->SMTPSecure = 'tls'; // enable if required, 'tls' is another possible value
    $phpmailer->setFrom($_ENV['FROM_MAIL'], 'eSafeTalk');
}