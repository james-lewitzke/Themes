<aside id="sidebar-right" class="sidebar content col-right">
	<?php
	if ( is_blog() ) :
		dynamic_sidebar('Sidebar - CPT - Blog');
	else :
		dynamic_sidebar('Sidebar - Main');
	endif;
	?>
</aside>