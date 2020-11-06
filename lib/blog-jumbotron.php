<?php

add_action('genesis_after_header', 'add_jumbotron_blog_page', 15);
function add_jumbotron_blog_page()
{
	$jumbotron_img = get_the_post_thumbnail_url( $post->ID, 'full' );
	$blog_jumbotron_title =  get_post_meta(get_the_ID(), 'blog-jumbotron-title', true);
	$blog_jumbotron_content =  get_post_meta(get_the_ID(), 'blog-jumbotron-content', true);

	$isPost = is_single();
	$default = '';

	if ($isPost && has_post_thumbnail()) {

		echo '<div id="blog-jumbotron" class="blog jumbotron jumbotron-fluid" style="background-image: url(' . $jumbotron_img . ');">

							<div class="container">
								<h1 class="display-4">' . $blog_jumbotron_title . '</h1>
								<p class="lead">' . $blog_jumbotron_content . '</p>
							</div>
							</div> ';

	} else {
		return $default;
	}
}

function blog_jumbotron_meta() { global $post;

	if(!empty($post)) {
		$pageTemplate = get_post_meta ($post -> ID, '_wp_page_template', true);
		$types = array('post');
		foreach ($types as $type) {
				add_meta_box ( 'blog_jumbotron_meta', __('Blog Jumbotron Content', 'vdglaw-theme-genesis' ), 'jumboblog_meta_callback', $type, 'normal', 'high');
		}
	}
}
add_action( 'add_meta_boxes', 'blog_jumbotron_meta' );

function jumboblog_meta_callback( $post ) {
wp_nonce_field( basename( __FILE__ ), 'jumboblog_nonce' );
$jumboblog_stored_meta = get_post_meta( $post->ID );?>

	<div style="margin-top: 1.618em;">
		<h3>Blog Jumbotron Content</h3>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<strong><label for="blog-jumbotron-title" class="basic-row-title"><?php _e('JumboTron Title','vdglaw-theme-genesis')?></label></strong>
			<input style="width: 100%;" type="text" name="blog-jumbotron-title" id="blog-jumbotron-title" value="<?php if (isset($jumboblog_stored_meta['blog-jumbotron-title'])) echo $jumboblog_stored_meta['blog-jumbotron-title'][0]; ?>" />
			</div>
			<div class="col-md-6">
			<strong><label for="blog-jumbotron-content" class="basic-row-title"><?php _e( 'JumboTron Content', 'vdglaw-theme-genesis' )?></label></strong>
			<textarea style="width: 100%;" rows="4" name="blog-jumbotron-content" id="blog-jumbotron-content"><?php if ( isset ( $jumboblog_stored_meta['blog-jumbotron-content'] ) ) echo $jumboblog_stored_meta['blog-jumbotron-content'][0]; ?></textarea>
			</div>
		</div>
	</div>

<?php
}

// Saves the custom meta input
add_action('save_post', 'blog_jumbotron_save');
function blog_jumbotron_save($post_id)
{

	// Checks save status
	$is_autosave = wp_is_post_autosave($post_id);
	$is_revision = wp_is_post_revision($post_id);
	$is_valid_nonce = (isset($_POST['jumboblog_nonce']) && wp_verify_nonce($_POST['jumboblog_nonce'], basename(__FILE__))) ? 'true' : 'false';

	// Exits script depending on save status
	if ($is_autosave || $is_revision || !$is_valid_nonce) {
		return;
	}

	// Checks for input and sanitizes/saves if needed
	if (isset($_POST['blog-jumbotron-title'])) {
		update_post_meta($post_id, 'blog-jumbotron-title', sanitize_text_field($_POST['blog-jumbotron-title']));
	}

	if (isset($_POST['blog-jumbotron-content'])) {
		update_post_meta($post_id, 'blog-jumbotron-content', sanitize_text_field($_POST['blog-jumbotron-content']));
	}
}
