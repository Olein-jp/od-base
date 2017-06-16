<?php
/*
 * project   : OD Base
 * file name : page.php
 * created   : 2017/06/16
 */
?>
<?php get_header(); ?>
	<main id="primary" class="content-area">
		<?php while ( have_posts() ): the_post(); ?>
		<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<!--
			#
			# メタ情報は固定ページに掲載しないという場合もあるので
			# コメントアウトしてあります。
			#
			<div class="entry-meta">
				<span class="date">投稿日 : <?php the_time( get_option( 'date_format' ) ); ?></span>
				<span class="author">投稿者 : <?php the_author(); ?></span>
			</div>
			-->
			<?php if ( has_post_thumbnail() ): ?>
			<figure class="entry-thumbnail">
				<?php the_post_thumbnail(); ?>
			</figure>
			<?php 
				/* else:
				 * サムネイルがない場合に挿入する画像を指定
				 * その際にはfigureの位置を再考せよ
				*/
			?>
			<?php endif; ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
		<?php
			endwhile;
		
			the_post_navigation();
		?>
	</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>