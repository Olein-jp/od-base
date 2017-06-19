<?php
/*
 * project   : OD Base
 * file name : 404.php
 * created   : 2017/06/19
 */
?>
<?php get_header(); ?>
	<main id="primary" class="content-area">
		<header class="page-header">
			<h1 class="page-title">お探しのページが存在しませんでした。</h1>
		</header>
		<section class="error-404">
			<h2>検索フォームよりキーワードを検索</h2>
			<?php
				get_search_form();
				the_widget( 'WP_Widget_Recent_Posts' );
			?>
			<h2>記事数の多いカテゴリー</h2>
			<ul>
			<?php
				wp_list_categories( array(
					'orderby'    => 'count',
					'order'      => 'DESC',
					'show_count' => 1,
					'title_li'   => '',
					'number'     => 10,
				) );
			?>
			</ul>
		</section>
	</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>