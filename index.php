<?php
/*
 * project   :OD Base
 * file name :index.php
 * created   :2017/06/13
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<header class="site-header">
	<div class="site-header__branding">
		<?php if ( is_home() || is_front_page() ): ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else: ?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>
		<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	</div>
	<nav class="site-header__gnavi">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'global',
				'menu_class' => 'gnavi',
				'depth' => 1,
			) );
		?>
	</nav>
	<figure class="custom-header-image">
		<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" />
	</figure>
</header>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
		<?php
			// カテゴリー名をリンクなしで取得したい場合
			$cat = get_the_category();
			$cat = $cat[0];
			// 出力はline.55
		?>
		<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<div class="entry-meta">
				<span class="date">投稿日:<?php the_time( get_option( 'date_format' ) ); ?></span>
				<span class="category">カテゴリー:<?php if ( $cat ) { echo esc_html( $cat->name ); } // カテゴリー名（リンクなし）を表示 ?></span>
				<span class="categori-links">カテゴリー:<?php the_category( '、' ); ?></span>
				<span class="tag-links">タグ:<?php the_tags( '', '、' ); ?></span>
				<span class="author">投稿者:<?php the_author(); ?></span>
			</div>
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
			<div class="entry-excerpt">
				<?php the_excerpt(); ?>
			</div>
		</article>
		<?php endwhile; endif; ?>
	</div>
	<aside id="secondary" class="sidebar" role="complementary">
		<?php if ( ! is_active_sidebar( 'sidebar' ) ){ return; } ?>
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</aside>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>