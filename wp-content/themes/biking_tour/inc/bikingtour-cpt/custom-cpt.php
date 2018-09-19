<?php
// include the custom post type class
include_once('cpt.php');

// create a blog post type
$biking_tour_blog_poststyle = new CPT(array(
                        'post_type_name' => 'blog',
                        'singular' => 'blog',
                        'plural' => 'blogs',
                        'rewrite' => array('slug' => 'blog','with_front' => false),
                    ),array(
                        'supports' => array('title', 'editor', 'thumbnail')
                    ));  

$biking_tour_blog_poststyle -> menu_icon("dashicons-welcome-write-blog");

$biking_tour_blog_poststyle ->set_textdomain('biking_tour');











