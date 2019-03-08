<?php
$cpt_portfolio = new eng_postobject;
$cpt_portfolio->type = 'cpt';
$cpt_portfolio->name = 'portfolio';
$cpt_portfolio->args = array(
	'labels' => array(
		'name' => __( 'Portfolio Posts' ),
		'singular_name' => __( 'Portfolio Post' )
	),
	'public' => true,
	'supports' => array(
		'title',
		'editor',
		'author',
		'thumbnail',
		'excerpt',
		'comments',
			'custom-fields' 
	),
	'capability_type' => 'post',
	'rewrite' => array('slug'=> 'portfolio')
	
);
$cpt_portfolio->startpostobject();

$tax_portfolio_job_type = new eng_postobject;
$tax_portfolio_job_type->type = 'taxonomy';
$tax_portfolio_job_type->name = 'job-type';
$tax_portfolio_job_type->posttypeassign = 'portfolio';
$tax_portfolio_job_type->args = array(
    'label' => 'Job Types',
    'public' => true,
    'hierarchical' => true,
    'show_in_nav_menus' => true,
    'args' => array( 
		'orderby' => 'term_order' 
	),
    'rewrite' => array( 
		'slug' => 'job-type',
		'with_front' => false 
	),
    'query_var' => true,
);
$tax_portfolio_job_type->startpostobject();
?>