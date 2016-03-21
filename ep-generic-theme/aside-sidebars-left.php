<?php include(locate_template('vars.php')); ?><aside id="sidebar-left" class="sidebar content col-left">
<?php
if ( is_posttype('testimonials') ) :
dynamic_sidebar('Testimonials Sidebar');elseif ( is_blog() ) :dynamic_sidebar('Blog Sidebar');
else :
dynamic_sidebar('Main Sidebar');
endif;
?>
</aside>