<?php
/*
Template Name: Home Page
*/

// //Custom Fields
// $prelaunch_price  = get_post_meta( 7, 'prelaunch_price', true );
// $launch_price     = get_post_meta( 7, 'launch_price', true );
// $final_price      = get_post_meta( 7, 'final_price', true );
// $course_url       = get_post_meta( 7, 'course_url', true );
// $button_text      = get_post_meta( 7, 'button_text', true );
// $optin_text       = get_post_meta( 7, 'optin_text', true );
// $optin_button_text = get_post_meta( 7, 'optin_button_text', true );
//
// // Advanced Custom Fields
// $income_feature_image   = get_field('income_feature_image');
// $income_section_title   = get_field('income_section_title');
// $income_section_desc    = get_field('income_section_description');
// $reason_1_title         = get_field('reason_1_title');
// $reason_1_desc          = get_field('reason_1_description');
// $reason_2_title         = get_field('reason_2_title');
// $reason_2_desc          = get_field('reason_2_description');
//
// $who_feature_image      = get_field('who_feature_image');
// $who_section_title      = get_field('who_section_title');
// $who_section_body       = get_field('who_section_body');
//
// $features_section_image = get_field('features_section_image');
// $features_section_title = get_field('features_section_title');
// $features_section_body  = get_field('features_section_body');
//
// $project_feature_title = get_field('project_feature_title');
// $project_feature_body = get_field('project_feature_body');
//
// $video_feature_title = get_field('video_feature_title');
// $video_feature_link = get_field('video_feature_link');
//
// $instructor_section_title = get_field('instructor_section_title');
// $instructor_name          = get_field('instructor_name');
// $bio_excerpt              = get_field('bio_excerpt');
// $full_bio                 = get_field('full_bio');
// $twitter_username         = get_field('twitter_username');
// $facebook_username        = get_field('facebok_username');
// $gplus_username           = get_field('gplus_username');
// $twitter_username         = get_field('twitter_username');
// $number_students          = get_field('number_students');
// $number_reviews          = get_field('number_reviews');
// $number_courses          = get_field('number_courses');


get_header(); ?>

<?php get_template_part('content', 'hero'); ?>

<?php get_template_part('content', 'optin'); ?>

<?php get_template_part('content', 'boost'); ?>

<?php get_template_part('content', 'benefits'); ?>

<?php get_template_part('content', 'crsfeatures'); ?>

<?php get_template_part('content', 'projectfeatures'); ?>

<?php get_template_part('content', 'video'); ?>

<?php get_template_part('content', 'instructor'); ?>

<?php get_template_part('content', 'testimonials'); ?>


<?php
get_footer();
?>
