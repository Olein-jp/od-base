<?php
/*
 * project   : OD Base
 * file name : sidebar.php
 * created   : 2017/06/16
 */
?>
<aside id="secondary" class="sidebar" role="complementary">
	<?php if ( ! is_active_sidebar( 'sidebar' ) ){ return; } ?>
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside>