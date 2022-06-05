<?php

/**
 * expire email send
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('bootstrap.php');

try {

	global $db;
        $get_subscribed_users = $db->query("SELECT user_id, user_package, user_subscription_date FROM users WHERE user_subscribed = '1'") or _error("SQL_ERROR_THROWEN");
        if ($get_subscribed_users->num_rows == 0) {
            return;
        }
        while ($subscribed_user = $get_subscribed_users->fetch_assoc()) {
            /* get package */
			 $get_package = $db->query(sprintf('SELECT * FROM packages WHERE package_id = %s', secure($subscribed_user['user_package'], 'int'))) or _error("SQL_ERROR_THROWEN");
			 if ($get_package->num_rows == 0) {
            return false;
        }
        $package = $get_package->fetch_assoc();
			if ($package) {
                switch ($package['period']) {
                    case 'day':
                        $duration = 86400;
                        break;

                    case 'week':
                        $duration = 604800;
                        break;

                    case 'month':
                        $duration = 2629743;
                        break;

                    case 'year':
                        $duration = 31556926;
                        break;

                    case 'life':
                        continue 2;
                        break;
                }
                $time_left = time() - ($package['period_num'] * $duration);
                $enddate = strtotime($subscribed_user['user_subscription_date']) + ($package['period_num'] * $duration);
                $showleft= ceil(($enddate - time()) / (60 * 60 * 24));
                 if($showleft <= 0){
                    $user_id=$subscribed_user['user_id'];
                    $get_user = $db->query(sprintf("SELECT * FROM users WHERE user_id = %s", secure($user_id, 'int'))) or _error("SQL_ERROR_THROWEN");
                    if ($get_user->num_rows == 0) {
                        return false;
                    }
                   $user= $get_user->fetch_assoc();
                   $subject = __("Expired Pro Package") . " " . $system['system_title'];
                   $body = get_email_template("expired_package_email", $subject, ["name" => $user['user_name']]);
                    /* send email */
                     if (!_email($user['user_email'], $subject, $body['html'], $body['plain'])) {
                        throw new Exception(__("Activation email could not be sent"));
                    }
                   if($user['user_email']){
                       echo "<h6>";
                       echo $user['user_email'];
                       echo "</h6>";
                       
                   }

                 }
           
            
			}
            
           
        }
   
} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}
