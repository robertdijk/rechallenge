<?php
get_header();
?>
	<!-- Main -->
	<main <?php echo is_post_type_archive('company') || is_post_type_archive('job_opening') ? 'class="shrink"' : ''; ?>>
		<?php
		get_template_part("parts/navigation/breadcrumb");

		if (have_posts() && false !== ($archive_post_type = get_post_type())) {
			get_template_part('parts/post-type/archive', get_post_type());
		} else {
			get_template_part('parts/post-type/archive', 'empty');
		}
		?>
	</main>

<?php
get_footer();