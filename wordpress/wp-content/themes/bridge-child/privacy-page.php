<?php /* Template Name: Boxed Layout Template */ ?>
<?php get_header(); ?>

<div class="page-wrap bubble-bg-2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="terms-wrap bx-shadow pt--sm-4 pb-sm-2 pl-sm-5 pr-sm-5 mt-5 mb-5">
          <h1 class="udr-heading mb-4"><?=get_the_title()?></h1>
          <?php if (have_posts()) : 
							while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
			<?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>