<?php

/**
 * post
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
if (!isset($_GET['post_id']) || !is_numeric($_GET['post_id'])) {
	_error(404);
}

try {
   
	// get post
	define('PRIVACY_ERRORS', true);

	

	$row = array();
   
	if($user->_is_admin){
		$get_rows = $db->query("SELECT posts.post_id FROM posts INNER JOIN posts_products ON posts.post_id = posts_products.post_id INNER JOIN users ON posts.user_id = users.user_id WHERE posts.post_type = 'product' AND posts_products.available = '1'") or _error("SQL_ERROR");
	}elseif($user->_data['user_subscribed']=='1'){
     $get_rows = $db->query("SELECT post_id  FROM posts_products  WHERE  status = 'gold'" ) or _error("SQL_ERROR");

	}elseif($user->_data['user_subcribed'] == '2'){
		$get_rows = $db->query("SELECT post_id  FROM posts_products  WHERE  status = 'platinum'" ) or _error("SQL_ERROR");
	}elseif($user->_data['user_subcribed'] == '3'){
		$get_rows = $db->query("SELECT post_id  FROM posts_products  WHERE  status = 'diamond'" ) or _error("SQL_ERROR");
	}else{
		$get_rows=[];
	}

	

	while ($row = $get_rows->fetch_assoc()) {
		$row = $row['post_id'];

		if ($row) {
			$rows[] = $row;
		}

	}
	$prepost = $user->get_post($_GET['post_id']);

	if($prepost['post_type'] == 'product'){
		if (in_array($_GET['post_id'], $rows)){
			$post = $user->get_post($_GET['post_id']);
		}else{
			_error(404);
		}

	}else{
		$post = $user->get_post($_GET['post_id']);
	}
	 
	
    if (!$post) {
		_error(404);
	}
	/* assign variables */
	$smarty->assign('post', $post);

	// get ads campaigns
	$ads_campaigns = $user->ads_campaigns();
	/* assign variables */
	$smarty->assign('ads_campaigns', $ads_campaigns);

	// get ads
	$ads = $user->ads('post');
	/* assign variables */
	$smarty->assign('ads', $ads);

	// get widgets
	$widgets = $user->widgets('post');
	/* assign variables */
	$smarty->assign('widgets', $widgets);
} catch (PrivacyException $e) {
	_error('PERMISSION');
} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page header
page_header($post['og_title'], $post['og_description'], $post['og_image']);

// page footer
page_footer("post");
