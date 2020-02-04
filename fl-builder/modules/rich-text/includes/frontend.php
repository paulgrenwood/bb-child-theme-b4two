<div class="fl-rich-text<?php echo ' b42s__fl-rich-text_' . $settings->blocktype; ?>">
	<?php

	global $wp_embed;

	echo wpautop( $wp_embed->autoembed( $settings->text ) );?>
</div>
