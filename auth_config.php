<?php
// GitHub Secrets থেকে আসা ভেরিয়েবলগুলো
define('CLIENT_ID', getenv('AZURE_CLIENT_ID'));
define('CLIENT_SECRET', getenv('AZURE_CLIENT_SECRET'));
define('TENANT_ID', getenv('AZURE_TENANT_ID'));
define('USER_FLOW', getenv('AZURE_USER_FLOW')); // এটা অবশ্যই যোগ করতে হবে (উদা: B2C_1_signupsignin)
define('REDIRECT_URI', 'https://blockaisolution.com/callback.php');
?>
