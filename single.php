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
					<i class="far fa-clock"></i>
					<?php echo get_the_date(); ?>
				</div>
				<div class="post-category">
					<i class="fas fa-flag"></i>
					<?php the_category(', '); ?>
				</div>
				<div class="post-content">
					<p class="font-black">
						<?php the_content(); ?>
					</p>
				</div>
			</div>
			<?php
				endwhile;
			else:
			?>

			<div></div>

			<?php
			endif;
			?>
			<div class="shares">
				<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fnotes.kentaojapi.info%2F&width=72&layout=button&action=like&size=small&show_faces=false&share=false&height=65&appId=1770595113246251" width="72" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			<a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/v4/public/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>	
			</div>
		</div><!-- posts -->
		<?php get_sidebar(); ?>
	</div><!-- main -->
	<?php get_footer(); ?>
</body>
</html>
