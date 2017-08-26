<?php
	add_action('wp_ajax_order', 'order_processing');
	add_action('wp_ajax_nopriv_order', 'order_processing');

	function order_processing() {

		sleep(3);
		echo "test";
		wp_die();
	}
