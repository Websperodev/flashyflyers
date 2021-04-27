<?php get_header(); ?>
<div class="page-wrap pb-5 pt-4 bubble-bg-2">

            <?php if (have_posts()) : 
							while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
			<?php endwhile; endif; ?>

    </div>
    <?php get_footer(); ?>
