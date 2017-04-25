<?php
/**
 * Comments
 *
 * The templated used to accept and display comments on posts.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

// Hide comments on protected posts.
if ( post_password_required() ) : ?>
	<p>This post is password protected. Enter the password to view comments</p>
<?php
return;
endif; ?>

<?php // Show the comments.
if ( have_comments() ) : ?>
	<h2><?php comments_number(); ?></h2>
	<ol>
		<?php
		wp_list_comments(); ?>
	</ol>

<?php // If comments are closed show a message saying so.
elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	<p>Comments are closed</p>
<?php endif; ?>
	
<?php // Show the comment form.
comment_form();
