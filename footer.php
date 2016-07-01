
<div class="container-fluid full-width">
    <div class="row myrow socialrow">
        <div class="col-xs-12 col-sm-8">
        <ul id="footersocial">
                    
                    <li><a href="https://soundcloud.com/aveparadiso"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
                    
                    <li><a href="https://www.facebook.com/AveParadiso/" target="_blank"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
                    <li><a href="https://itunes.apple.com/us/album/subtropical-ep/id1119379254" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
                    <li><a href="https://open.spotify.com/album/7hJ6s4p2Wh4E18JsaLxzO3" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/aveparadiso/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCYiAPYwz-xsBFzzDdh7KYFA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/aveparadiso" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                </ul>
    
    
    </div>
    <div class="col-xs-12 col-sm-4" id="frasefooter">
        <small>&copy;<?=date('Y');?> Made for AveParadiso by <a href="http://atiagina.com" target="_blank">Atiagina</a> </small>
    </div>
</div>
    <div class="row myrow">
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


        
    </div>

    
<a href="#logo" class="backtotop">↑</a>

	


   
<?php wp_footer(); ?>

   </body> 
</html>