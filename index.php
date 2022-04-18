<?php get_header(); ?>

  <?php wp_body_open(); ?>
  <?php if(have_posts()):while(have_posts()):the_post(); ?>

  <div class="myposthead">
    <?php the_category(); ?>
    <article <?php post_class('mycontainer'); ?> >
    <h1><?php the_title(); ?></h1>
    <time datetime="<?php echo esc_attr( get_the_date(DATE_W3C)) ?>">
    <?php echo esc_html( get_the_date() ); ?>
    </time>
  </div>

 <?php the_content(); ?>
  <?php the_post_navigation(); ?>
  </article>
  <?php endwhile;endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
