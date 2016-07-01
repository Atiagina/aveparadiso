<?php get_header(); ?>
       
<!-- MAIN PART OF THE SITE -->  

<div class="container-fluid full-width" >
    <div class="row">
        <div class="col-xs-12 customfull">
<?php 
		$query = new WP_Query( 'pagename=slider' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                add_flexslider(); 
            }
        }

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
</div>
</div>
    </div>

<div class="container-fluid full-width section" id="music" >
    <div class="row playrow">
        <div class="col-xs-12">
        
        <div id="triangle-right"></div>
        
            </div>
        <div class="myrow"><h1>music</h1>
            <div class="col-xs-12">
                <!-- Begin Dynamic Sidebar -->
    <?php dynamic_sidebar('musical') ?>					
    <!-- End Dynamic Sidebar -->
            </div>
        </div>
</div>

<div class="container-fluid full-width section" id="social" >
    <div class="row playrow">
        <div class="col-xs-12">
        
        <div id="triangle-left"></div>
        
            </div>
        <div class="myrow"><h1>social</h1>
            <div class="col-xs-12">
               
            </div>
            </div>
        </div>
</div>

<div class="container-fluid full-width section" id="bio" >
    <div class="row playrow">
        <div class="col-xs-12">
        
        <div id="triangle-right"></div>
       
            </div>
        <?php 
		$query = new WP_Query( 'pagename=bio' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                echo '<div class="row myrow">';
				echo '<h1>' . get_the_title() . '</h1>';
				echo '<div class="col-xs-12 col-sm-6 playrowtext">';
				the_content();
				echo '</div>';
                echo '<div class="col-xs-12 col-sm-6">';
                echo '<img src="';
                echo $url;
                echo '" class="img-responsive">';
                echo '</div>';
                echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
    </div>
    </div>


<div class="container-fluid full-width section" id="tour" >
    <div class="row playrow">
        <div class="col-xs-12">
        
        <div id="triangle-left"></div>
        
            </div>
        <?php 
		$query = new WP_Query( 'pagename=tour' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                echo '<div class="row myrow">';
				echo '<h1>' . get_the_title() . '</h1>';
				
                echo '<div class="col-xs-12 col-sm-6">';
                echo '<img src="';
                echo $url;
                echo '" class="img-responsive">';
                echo '</div>';
                echo '<div class="col-xs-12 col-sm-6 playrowtext">';
				the_content();
				echo '</div>';
                echo '</div>';
                
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
        
        </div>
</div>

<div class="container-fluid full-width section" id="contact" >
    <div class="row playrow">
        <div class="col-xs-12">
        
        <div id="triangle-right"></div>
       
            </div>
        <?php 
		$query = new WP_Query( 'pagename=contact' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
                echo '<div class="row myrow">';
				echo '<h1>' . get_the_title() . '</h1>';
				echo '<div class="col-xs-12">';
				the_content();
				echo '</div>';
                echo '</div>';
            }
        }
            /* Restore original Post Data */
		wp_reset_postdata();
		?>
            
        </div>
</div>

<?php get_footer(); ?>

