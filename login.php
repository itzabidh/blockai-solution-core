<?php
/**
 * BlockAI Solution - Login Entry Point
 * This file redirects the user to the Azure CIAM login page.
 */

require_once 'auth_config.php';

// 1. Get the pre-configured Login URL from our config file
$authUrl = getLoginUrl();

// 2. Redirect the user to Azure for authentication
header("Location: " . $authUrl);
exit();
?>
