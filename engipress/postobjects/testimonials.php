<?php
$cpt_testimonials = new eng_postobject;
$cpt_testimonials->type = 'cpt';
$cpt_testimonials->name = 'testimonials';
$cpt_testimonials->args = array(
	'labels' => array(
		'name' => __( 'Testimonials' ),
		'singular_name' => __( 'Testimonial' )
	),
	'public' => true,
	'supports' => array(
		'title',
		'editor',
		'author',
		'thumbnail',
		'excerpt',
		'comments'
	),
	'capability_type' => 'post',
	'rewrite' => array('slug'=> 'testimonials')
	
);
$cpt_testimonials->startpostobject();

$tax_testimonials_cat = new eng_postobject;
$tax_testimonials_cat->type = 'taxonomy';
$tax_testimonials_cat->name = 'testimonials-category';
$tax_testimonials_cat->posttypeassign = 'testimonials';
$tax_testimonials_cat->args = array(
    'label' => 'Testimonial Categories',
    'public' => true,
    'hierarchical' => true,
    'show_in_nav_menus' => true,
    'args' => array( 
		'orderby' => 'term_order' 
	),
    'rewrite' => array( 
		'slug' => 'testimonials-category',
		'with_front' => false 
	),
    'query_var' => true,
);
$tax_testimonials_cat->startpostobject();
?>