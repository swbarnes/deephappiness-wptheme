<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content', 'optin' ); ?>

<?php get_template_part( 'template-parts/home', 'about_blog' ); ?>

<?php get_template_part( 'template-parts/content', 'free_report_banner' ); ?>

<?php get_template_part( 'template-parts/home', 'about_me' ); ?>

<?php
get_footer();
