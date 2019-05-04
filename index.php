<?php get_header(); ?>
	<div id="main" class="container">
		<div id="posts">
			<?php
			if (have_posts()) :
				while (have_posts()) :
					the_post() ;
			?>
			<div class="post">
				<div class="post-thumbnail">
					<?php if (has_post_thumbnail()) : ?>
						<div class="thumbnail" style="background-image:url('<?php the_post_thumbnail_url('large'); ?>');">
					<a class="permalink" href="<?php the_permalink(); ?>"></a>
				</div>
					<?php else: ?>
						<p></p>
					<?php endif; ?>
					<div class="thumnail-uline"></div>
				</div>
				<div class="post-title">
					<h2>
					<a class="font-black" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
					</h2>
				</div>
				<div class="post-meta">
					<?php echo get_the_date(); ?>
				</div>
				<div class="post-category">
					<i class="fas fa-tags"></i>
					<?php the_category(', '); ?>
				</div>
				<div class="post-content">
					<p class="font-black">
						<?php the_excerpt(); ?>
					</p>
				</div>
				<div class="border-btm"></div>
			</div>
			<?php
				endwhile;
			else:
			?>

			<p>記事はありません</p>

			<?php
			endif;
			?>

			<div class="navigation">
				<div class="prev"><?php previous_posts_link('前のページ'); ?></div>
				<div class="next"><?php next_posts_link('次のページ'); ?></div>
			</div>
		</div><!-- posts -->
		<?php get_sidebar(); ?>
	</div><!-- main -->
	<?php get_footer(); ?>
</body>
</html>
