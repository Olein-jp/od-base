<?php
/*
 * project   : OD Base
 * file name : comments.php
 * created   : 2017/06/19
 */
?>
<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">コメント</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

	<?php endif;

	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments">コメント機能は停止されています</p>
	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->