<?php get_header(); ?>
<div class="mv">
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
<!-- <?php
if( is_home() || is_front_page() ){
	echo do_shortcode('[smartslider3 slider="2"]');
}
?> -->


</div>
<div class="about flex">
	<div class="about_pic">
	<img src="<?php echo get_template_directory_uri(); ?>/img/cake.jpg">


	</div>
	<div class="about_content">
		<h2>お菓子できっかけを作りたい</h2>
		<p>手土産に持っていく焼き菓子、</p>
		<p>誕生日やクリスマスに買って帰るケーキ、</p>
		<p>頑張ったじぶんへのご褒美。</p>
		<p>お菓子という小さなGiftがたのしい時間を共有するきっかけになることを願って。</p>
		<p>フランス語で絆を意味する [Lien] は美味しいお菓子を通じて、人と人との橋渡しになれるお菓子作りを目指しています。</p>
	</div>

</div>
<main class="mycontainer">

	<div class="myposthead">
	<h2>最新情報</h2>

	</div>
	<ul>
    <?php $mypost = get_posts([
      'post_type' => 'post', // どの情報
      'posts_per_page' => 5  // 情報の件数
    ]);
    if($mypost):foreach($mypost as $post):setup_postdata($post); ?>
      <li>
        <time datetime="<?= get_the_date(DATE_W3C); ?>">
          <?= get_the_date(); ?>
        </time>
	<article <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
	<p><?php the_title(); ?></p>
	</a>
	</article>

    <?php endforeach;wp_reset_postdata();endif; ?>
</ul>
</main>


<?php get_footer(); ?>

