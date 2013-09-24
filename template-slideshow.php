 /*
Template Name: Slideshow
*/
<?php
//This is for our custom Slides menu
$args = array( 'post_type' => 'slides', 'orderby' => 'menu_order');
$loop = new WP_Query( $args );
?>

<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">

        <?php $x = 0; ?>
        <?php $firstMarked = false; ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $x++; ?>" class="<?php echo !$firstMarked ? "active":"";?>"></li>
        <?php $firstMarked = true;?>
		<?php endwhile; ?>
    </ol>
  
  <div class="carousel-inner">
  
  
    <?php $firstMarked = false; ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="item <?php echo !$firstMarked ? "active":"";?>">
  <?php the_post_thumbnail('full');?>
  <div class="container">
    <div class="carousel-caption">
      <h1>
        <?php the_title(); ?>
      </h1>
      <p>
        <?php the_excerpt(); ?>
      </p>
    </div>
  </div>
</div>
<?php $firstMarked = true;?>
<?php endwhile; ?>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>
