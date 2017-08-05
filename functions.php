<?php
add_action( 'wp_enqueue_scripts', 'btd_enqueue' );

function btd_enqueue() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
?>