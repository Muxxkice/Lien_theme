<?php get_header(); ?>
<div id="contents">
  <div id="main">
    <section id="news">
			<div class="myposthead">
      <h1>最新情報</h1>
			</div>
      <ul>
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
          <li>
            <time datetime="<?= get_the_date(DATE_W3C); ?>">
              <?= get_the_date(); ?>
            </time>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>

						<?php if( has_post_thumbnail() ): ?>
							<figure>
								<?php the_post_thumbnail(); ?>
							</figure>
							<?php endif; ?>
          </li>
        <?php endwhile;endif; ?>
      </ul>
      <?php the_posts_pagination(); ?>
    </section>
  </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>


