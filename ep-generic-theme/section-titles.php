<?php
include(locate_template('vars.php'));

/* Overall Titles */
if ( is_page() ) :
echo '<h1 id="primarytitle-page" class="primarytitle col-middle col-faux-left">' . get_the_title($post->ID) . '</h1>';

elseif ( is_tax() ) :
echo '<h1 id="primarytitle-taxonomy" class="primarytitle">' . single_cat_title() . '</h1>';
echo '<div id="primarydesc-taxonomy" class="primarydesc">' . category_description() . '</div>';

elseif ( is_archive() ) :
echo '<h1 id="primarytitle-archives" class="primarytitle">Monthly Archives for' . get_the_date('F, Y') . '</h1>';

endif;
?>