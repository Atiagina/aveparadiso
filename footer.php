<footer>
<div class="col-xs-12 col-sm-6">
    <a class="navbar-brand" href="http://www.ave.atiagina.com">
            <?php 
		$query = new WP_Query( 'pagename=logopage' );
        
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                echo '<img src="';
                echo $url;
                echo '" id="logo" alt="Ave Paradiso logo" height=90></a>';
                
            }
        }
wp_reset_postdata();
		?>
    
    </div>

<div class="col-xs-12 col-sm-4" id="frasefooter">
        <small>&copy;<?=date('Y');?> Made for AveParadiso by <a href="atiagina.com" target="_blank">Atiagina</a> </small>
    </div>
    
<a href="#logo" class="backtotop">↑</a>
	</footer> 

	


   
<?php wp_footer(); ?>

   </body> 
</html>