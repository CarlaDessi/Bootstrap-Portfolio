<?php get_header(); ?>

<h1>Latest Work</h1>
<div class="row row-offcanvas row-offcanvas-right">
  <div class="col-xs-12 col-sm-9">
    <p class="pull-right visible-xs">
      <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Menu</button>
    </p>
    <div class="row">
      <?php
		$args = array(
			'post_type' => 'portfolio'
		);
		$products = new WP_Query( $args );
		if( $products->have_posts() ) {
			while( $products->have_posts() ) {
				$products->the_post();
				?>
      <div class="col-6 col-sm-6 col-lg-4">
        <h2><a href="<?php echo get_permalink(); ?>">
          <?php the_title(); ?>
          </a></h2>
        <p>
          <?php the_content(); ?>
        </p>
      </div>
      <!--/span-->
      <?php
			}
		}
		else {
			echo 'Oh ohm no portfolios!';
		}
	?>
    </div>
    <!--/row-->
    
    <hr>
    <h1>Latest Posts</h1>
    <div class="span8">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h4> <a href="<?php echo get_permalink(); ?>">
        <?php the_title(); ?>
        </a><br/>
        <small>
        <?php the_time('F j, Y'); ?>
        </small></h4>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <!--/span--> 
  
</div>
<!--/row-->

<hr>
<?php get_footer(); ?>
