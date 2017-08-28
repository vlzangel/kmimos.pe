<?php
	include("wp-load.php");

	global $wpdb;

	$cuidadores = $wpdb->get_results("
		SELECT 
			c.id AS id,
			m.meta_value AS img
		FROM 
			cuidadores AS c
		INNER JOIN wp_usermeta AS m ON (m.user_id = m.user_id)
		WHERE
			m.meta_key = 'name_photo'
	");

	echo "<pre>";
		print_r($cuidadores);
	echo "</pre>";
?>