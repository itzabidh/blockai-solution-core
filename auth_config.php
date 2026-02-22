<?php
/**
 * BlockAI Solution - Azure Entra External ID Configuration
 * This file contains sensitive credentials. DO NOT PUSH TO GITHUB.
 */

// ১. Application (client) ID
define('CLIENT_ID', '8b9564f5-9adb-4960-8b69-78dd65e62a59');

// ২. Directory (tenant) ID
define('TENANT_ID', '3c91ceb7-f959-444a-ba3b-d1f91d721ece');

// ৩. Client Secret Value
define('CLIENT_SECRET', 'iV68Q~~I-6Da.QV5p-Q9mSSdNTfQnTrw_EydWcr8');

// ৪. Redirect URI (তোমার Azure পোর্টালে যা সেট করা আছে)
// যদি লোকালহোস্টে টেস্ট করো তবে নিচেরটা ব্যবহার করো:
define('REDIRECT_URI', 'http://localhost/blockai/callback.php'); 

// ৫. User Flow Name (তোমার পোর্টালে বানানো ফ্লো-এর নাম)
define('USER_FLOW', 'SignUpSignIn'); 
?>
