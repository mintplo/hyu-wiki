<?php

$IS_DEBUG = getenv('IS_DEBUG');
$DEBUG_SERVER = getenv('SERVER_HOST');

# Visual Editor의 API URL로도 사용하기 때문에 매우 중요!
## The protocol and server name to use in fully-qualified URLs
$wgServer = getenv('SERVER_HOST');

# Trust an X-Forwarded-For (XFF) header specifying a private IP in requests
# from a trusted forwarding proxy
$wgSquidServersNoPurge = [ '10.0.0.0/8' ];

# Database settings
$wgDBserver = getenv('DATABASE_HOSTNAME');
$wgDBname = getenv('DATABASE_NAME');
$wgDBuser = getenv('DATABASE_USERNAME');
$wgDBpassword = getenv('DATABASE_PASSWORD');

# Visual Editor
$wgVirtualRestConfig['modules']['parsoid'] = array(
    'url' => getenv('PARSOID_HOST'),
    'domain' => 'mediawiki',
);

# Email & SMTP
$wgEmergencyContact = getenv('EMERGE_CONTACT_EMAIL_ADDR');
$wgPasswordSender   = getenv('PASSWORD_SENDER_CONTACT_EMAIL_ADDR');

$wgSMTP = [
    'host'      => getenv('SMTP_HOST'),
    'IDHost'    => getenv('SMTP_HOST'),
    'port'      => 25,
    'auth'      => false,
    'username'  => getenv('SMTP_USERNAME'),
    'password'  => getenv('SMTP_PASSWORD'),
];

# Email bounce handler, for Debug 127.0.0.1
$wgBounceHandlerInternalIPs = [ '0.0.0.0/0' ];

# Google Analytics Tracking ID
$wgGoogleAnalyticsAccount = getenv('GOOGLE_ANALYTICS_TRACKING_ID');

# Site secret key
$wgSecretKey = getenv('MW_SECRET_KEY');
# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = getenv('MW_UPGRADE_KEY');

# AWS
// Configure AWS credentials.
// THIS IS NOT NEEDED if your EC2 instance has an IAM instance profile.
$wgAWSCredentials = [
	'key' => getenv('AWS_S3_ACCESS_KEY'),
	'secret' => getenv('AWS_S3_SECRET_KEY'),
	'token' => false
];
$wgAWSRegion = getenv('AWS_S3_REGION_NAME');
$wgAWSBucketName = getenv('AWS_S3_BUCKET_NAME');
