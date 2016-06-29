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
            </div>
        </div>
</div>

<div class="container-fluid full-width section" id="social" >
    <div class="row playrow">
        <div class="col-xs-12">
        
        <div id="triangle-left"></div>
        
            </div>
        <div class="myrow"><h1>social</h1>
            </div>
        </div>
</div>

<div class="container-fluid full-width section" id="bio" >
    <div class="row playrow">
        <div class="col-xs-12">
        
        <div id="triangle-right"></div>
       
            </div>
         <div class="row myrow"><h1>bio</h1>
             <div class="col-md-6 col-xs-12">
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et rhoncus enim, ac scelerisque risus. Suspendisse non tortor tortor. Vivamus malesuada metus quis consequat ornare. Fusce quis justo mollis arcu tincidunt laoreet. Morbi nec condimentum libero, ut consectetur nibh. </p>
<p>Etiam vel justo erat. 
Suspendisse sit amet tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas lacinia convallis mollis. Quisque mattis finibus accumsan. Nunc sit amet fermentum lorem. Suspendisse a scelerisque felis.
quis tincidunt. Aenean mollis est at urna pretium suscipit. Fusce pharetra quis elit et suscipit. Maecenas ornare aliquam tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec finibus tellus eget justo pellentesque molestie.</p>
             </div>
             <div class="col-md-6 col-xs-12"> <img src="img/playa.png" alt="playa"></div>
            </div>
        </div>
</div>

<div class="container-fluid full-width section" id="tour" >
    <div class="row playrow">
        <div class="col-xs-12">
        
        <div id="triangle-left"></div>
        
            </div>
        <div class="myrow"><h1>tour</h1>
            </div>
        </div>
</div>

<div class="container-fluid full-width section" id="contact" >
    <div class="row playrow">
        <div class="col-xs-12">
        
        <div id="triangle-right"></div>
       
            </div>
         <div class="myrow"><h1>contact</h1>
            </div>
        </div>
</div>
   </body> 
</html>

