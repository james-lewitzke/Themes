<?php include(locate_template('vars.php')); ?>
<?php
if ( is_posttype('testimonials') ) :
dynamic_sidebar('Testimonials Sidebar');
else :
dynamic_sidebar('Main Sidebar');
endif;
?>
</aside>