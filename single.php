<?php get_header(); ?>
	<div id="main" class="container">
		<div id="posts">
			<?php
			if (have_posts()) :
				while (have_posts()) :
					the_post() ;
			?>
			<div class="post-single">
				<div class="post-thumbnail">
					<?php if (has_post_thumbnail()) : ?>
						<div class="thumbnail" style="background-image:url('<?php the_post_thumbnail_url('large'); ?>');"></div>
					<?php else: ?>
						<div></div>
					<?php endif; ?>
				</div>
				<div class="post-title">
					<h2>
						<p><?php echo get_the_title(); ?></p>
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
						<?php the_content(); ?>
					</p>
				</div>
				<div class="border-btm"></div>
			</div>
			<div class="navigation">
				<div class="prev"><?php previous_post_link(); ?></div>
				<div class="next"><?php next_post_link(); ?></div>
			</div>
			<?php
				endwhile;
			else:
			?>

			<div></div>

			<?php
			endif;
			?>

		</div><!-- posts -->
		<?php get_sidebar(); ?>
	</div><!-- main -->
	<?php get_footer(); ?>
</body>
</html>
