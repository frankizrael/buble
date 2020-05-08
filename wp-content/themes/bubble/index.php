<?php 
set_query_var('ENTRY', 'index');
$frontpage_id = get_option( 'page_on_front' );
$blog_id = get_option( 'page_for_posts' );
get_header(); ?>
<!-- section index init -->
<?php get_template_part('include/nav'); ?>

<!-- section index end -->
<?php get_footer(); ?>
