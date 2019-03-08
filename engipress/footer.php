</section>
<footer>	<div id="footer-inner" class="wrap floatarea">
	<?php	eng_credit();		eng_social();		eng_copyright('footer');	
	wp_nav_menu(array(
	'container' => 'nav',
	'container_id' => 'legalnav',
	'theme_location' => 'legalnav',
	)); 
	?>
	</div>
</footer>
<?php eng_footer(); ?>
