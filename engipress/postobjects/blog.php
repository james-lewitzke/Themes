<?php
$cpt_blog = new eng_postobject;
$cpt_blog->type = 'cpt';
$cpt_blog->name = 'blog';
$cpt_blog->args = array(
	'labels' => array(
		'name' => __( 'Blog Posts' ),
		'singular_name' => __( 'Blog Post' )
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
	'rewrite' => array('slug'=> 'blog')
	
);
$cpt_blog->startpostobject();

$tax_blog_cat = new eng_postobject;
$tax_blog_cat->type = 'taxonomy';
$tax_blog_cat->name = 'blog-category';
$tax_blog_cat->posttypeassign = 'blog';
$tax_blog_cat->args = array(
    'label' => 'Blog Categories',
    'public' => true,
    'hierarchical' => true,
    'show_in_nav_menus' => true,
    'args' => array( 
		'orderby' => 'term_order' 
	),
    'rewrite' => array( 
		'slug' => 'blog-category',
		'with_front' => false 
	),
    'query_var' => true,
);
$tax_blog_cat->startpostobject();
?>