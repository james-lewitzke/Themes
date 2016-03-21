<?php include(locate_template('vars.php')); ?>
</section>
<footer class="wrap floatarea">
<div id="footerlegal">
<?php if ($toggleengipress == 'enable' ) : ?>
<div id="engipress">
Theme Design by <a href="http://engipress.com/">Engipress</a>
</div>
<?php endif; ?>
<?php
if ( $phrasecopyright ) : echo '<div id="copyright">' . $phrasecopyright . '</div>'; endif;
wp_nav_menu(array(
'container' => 'nav',
'container_id' => 'legalnav',
'theme_location' => 'legalnav',
)); 
?>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>