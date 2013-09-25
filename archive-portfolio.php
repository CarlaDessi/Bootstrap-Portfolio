<?php get_header(); ?>

 <?php
		$args = array(
			'post_type' => 'portfolio'
		);
		$products = new WP_Query( $args );
		if( $products->have_posts() ) {
			while( $products->have_posts() ) {
				$products->the_post();
				?>
                
                
                
                <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><a href="<?php echo get_permalink(); ?>">
          <?php the_title(); ?>
          </a></h2>
          <p class="lead"><?php
$content = get_the_content('Read more');
print $content;
?></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
                
                
                
                
                <?php
			}
		}
		else {
			echo 'Oh ohm no portfolios!';
		}
	?>


<?php get_footer(); ?>