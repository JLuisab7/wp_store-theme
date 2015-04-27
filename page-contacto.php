<?php
/*
	Template Name: Contacto 
*/
?>
<?php get_header() ?>
	<div class="container main content">
		<div class="ten columns offset-by-three page clearfix">
		  	<?php if (have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
		    <h1 class="center"><?php the_title(); ?></h1>
		    <div class="feature_divider"></div>	
					<?php the_content(); ?>
			<?php endwhile; ?>		
			<?php endif ?>
		</div>
		<br class="clear" />
	</div>
	<div class="embed-container maps">
	    <iframe width="100%" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=16792+Burke+Lane,+Huntington+Beach,+CA.+92647&amp;z=15&amp;output=embed"></iframe>
	</div>
	<div class="container" style="padding:0"></div> 
<?php get_footer(); ?>