<?php get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<?php if ( have_posts() ) : ?>
<div class="span8">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
						

						
							<?php the_excerpt(); ?>
                            <hr />
    <div>
       
			<?php endwhile; ?>
</div>
			
		<?php endif; ?>
		<?php endif; ?>

<?php get_footer(); ?>








