<div class="beauty" style="position: relative;">
	<div class="video-container content-asset">
		<div class="hideClick beauty-intro">
			<?php
			if ( ! empty( $instance['title'] ) ) {
				echo '<h2>' . $instance['title'] . '</h2>';
			}
			if ( ! empty( $instance['desc'] ) ) {
				echo '<p>' . $instance['desc'] . '</p>';
			}
			?>
			<div class="btns">
				<div class="btn-player"><i class="fa fa-play-circle"></i></div>
				<p class="watch"><?php echo esc_attr__( 'Watch the video', 'sailing' ) ?></p>
			</div>
		</div>
		<?php
		$src_poster = wp_get_attachment_image_src( $instance['self_poster'], 'full' );
		if ( $src_poster ) {
			echo ' <img src="' . $src_poster[0] . '" class="yt-player beauty-bg" data-parallax-trigger=".beauty" data-video="' . $instance['external_video'] . '?enablejsapi=1&amp;autoplay=1&amp;modestbranding=1&amp;rel=0&amp;color=white&amp;theme=light">';
		}
		?>
	</div>
</div>
