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
	$post = $user->get_post($_GET['post_id']);
	if($post["post_type"] == 'product'){
			$package_id=$user->_data['user_package'];
	  if($package_id != null){
			$user_id=$user->_data['user_id'];
			global $db;
			$package=$db->query("SELECT packages.name FROM packages WHERE packages.package_id = $package_id") or _error("SQL_ERROR");
			$status = $package->fetch_assoc();
			$status_name=strtolower($status['name']);
			$package_pd = $db->query("SELECT posts_products.post_id FROM posts_products  WHERE posts_products.status = '$status_name' ") or _error("SQL_ERROR");
			$user_pd = $db->query("SELECT posts.post_id FROM posts INNER JOIN posts_products ON posts.post_id = posts_products.post_id INNER JOIN users ON posts.user_id = '$user_id' WHERE posts.post_type = 'product'") or _error("SQL_ERROR");
			$product_by_package = [];
			$product_by_user = [];
			while ($row = $package_pd->fetch_assoc()) {
				$product_by_package[]= $row['post_id'];

			}
			
			while ($row_user = $user_pd->fetch_assoc()) {
				$product_by_user[]= $row_user['post_id'];

			}
			
			
	        if (in_array($_GET['post_id'], $product_by_package) || in_array($_GET['post_id'], $product_by_user) || $user->_is_admin){
                $post = $user->get_post($_GET['post_id']);
			}else{
				$post = $user->get_post($_GET['post_id']);

			}
                
		}elseif($user->_is_admin){
			$post = $user->get_post($_GET['post_id']);
		}else{
			$post = $user->get_post($_GET['post_id']);
		}
			  

		
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
