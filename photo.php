<?php

/**
 * photo
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootloader
require('bootloader.php');

// user access
if ($user->_logged_in || !$system['system_public']) {
	user_access();
}

// valid inputs
if (!isset($_GET['photo_id']) || !is_numeric($_GET['photo_id'])) {
	_error(404);
}

try {

	// get photo
	define('PRIVACY_ERRORS', true);
    $get_rows = $db->query("SELECT posts.post_id FROM posts INNER JOIN posts_products ON posts.post_id = posts_products.post_id INNER JOIN users ON posts.user_id = users.user_id WHERE posts.post_type = 'product' AND posts_products.available = '1'") or _error("SQL_ERROR");
	var_dump($get_rows);
	$photo = $user->get_photo($_GET['photo_id'], true);
	if (!$photo) {
		_error(404);
	}
	/* assign variables */
	$smarty->assign('photo', $photo);

	// get ads campaigns
	$ads_campaigns = $user->ads_campaigns();
	/* assign variables */
	$smarty->assign('ads_campaigns', $ads_campaigns);

	// get ads
	$ads = $user->ads('photo');
	/* assign variables */
	$smarty->assign('ads', $ads);

	// get widgets
	$widgets = $user->widgets('photo');
	/* assign variables */
	$smarty->assign('widgets', $widgets);
} catch (PrivacyException $e) {
	_error('PERMISSION');
} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page header
page_header($photo['og_title'], $photo['og_description'], $photo['og_image']);

// page footer
page_footer("photo");
