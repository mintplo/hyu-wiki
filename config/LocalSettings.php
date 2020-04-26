<?php
# This file was automatically generated by the MediaWiki 1.29.1
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "한양 위키";
$wgMetaNamespace = "Hyu_Wiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath        = "";
$wgArticlePath      = "/$1";
$wgUsePathInfo      = true;

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/logo.png";

## Database settings
$wgDBtype = "mysql";

# MySQL specific settings
$wgDBprefix = "wk";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=utf8";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMemCachedServers = [ 'memcached:11211' ];
$wgMainCacheType = CACHE_MEMCACHED;
$wgSessionCacheType = CACHE_MEMCACHED;
$wgParserCacheType = CACHE_MEMCACHED;
$wgMessageCacheType = CACHE_MEMCACHED;

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "ko";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

##
# Using File Cache
##
$wgUseFileCache = true;
$wgFileCacheDirectory = "$IP/cache";
$wgShowIPinHeader = false;

##
# Options for Performance
##

$wgDisableCounters = true; # 위키 사용자를 기록하는 카운터를 비활성화합니다.
$wgShowArchiveThumbnails = false; # 과거 섬네일 비활성화
$wgJobRunRate = 0.01; # doJobs Shell 코드를 느리게 사용하게 하여 서버 자원을 절약하고 속도를 빠르게 합니다.


##
# Google Analytics Settings
##
require_once "$IP/extensions/googleAnalytics/googleAnalytics.php";

// Optional configuration (for defaults see googleAnalytics.php)
// Store full IP address in Google Universal Analytics (see https://support.google.com/analytics/answer/2763052?hl=en for details)
$wgGoogleAnalyticsAnonymizeIP = false; 

// Array with NUMERIC namespace IDs where web analytics code should NOT be included.
$wgGoogleAnalyticsIgnoreNsIDs = array(500);

// Array with page names (see magic word Extension:Google Analytics Integration) where web analytics code should NOT be included.
$wgGoogleAnalyticsIgnorePages = array('ArticleX', 'Foo:Bar');

// Array with special pages where web analytics code should NOT be included.
$wgGoogleAnalyticsIgnoreSpecials = array( 'Userlogin', 'Userlogout', 'Preferences', 'ChangePassword', 'OATH');

// Use 'noanalytics' permission to exclude specific user groups from web analytics, e.g.
$wgGroupPermissions['sysop']['noanalytics'] = true;
$wgGroupPermissions['bot']['noanalytics'] = true;

##
# Time Settings
##

$wgLocaltimezone = "Asia/Seoul";
date_default_timezone_set( $wgLocaltimezone );

##
# Permission Settings
##

# Email Domain Check for Restriction
wfLoadExtension('RestrictEmailDomain');
$wgEmailDomain = ['hanyang.ac.kr', 'ehanyang.ac.kr'];

$wgAuthManagerAutoConfig['preauth'] = [
    'RestrictEmailDomainPreAuthenticationProvider' => [
        'class' => 'RestrictEmailDomainPreAuthenticationProvider',
    ],
];

$wgAutopromote['emailconfirmed'] = APCOND_EMAILCONFIRMED;
$wgImplicitGroups[] = 'emailconfirmed';

## Anonymous
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['createpage'] = false;
$wgGroupPermissions['*']['createtalk'] = false;

$wgGroupPermissions['*']['writeapi'] = false;

## Not Confirmed User
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['user']['createpage'] = false;
$wgGroupPermissions['user']['createtalk'] = false;
$wgGroupPermissions['user']['move'] = false;
$wgGroupPermissions['user']['movefile'] = false;
$wgGroupPermissions['user']['move-subpages'] = false;
$wgGroupPermissions['user']['move-rootuserpages'] = false;
$wgGroupPermissions['user']['move-categorypages'] = false;
$wgGroupPermissions['user']['upload'] = false;
$wgGroupPermissions['user']['reupload'] = false;
$wgGroupPermissions['user']['reupload-shared'] = false;
$wgGroupPermissions['user']['changetags'] = false;

$wgGroupPermissions['user']['writeapi'] = false;

## Confirmed User
$wgGroupPermissions['emailconfirmed']['read'] = true;
$wgGroupPermissions['emailconfirmed']['edit'] = true;
$wgGroupPermissions['emailconfirmed']['createpage'] = true;
$wgGroupPermissions['emailconfirmed']['createtalk'] = true;
$wgGroupPermissions['emailconfirmed']['move'] = true;
$wgGroupPermissions['emailconfirmed']['movefile'] = true;
$wgGroupPermissions['emailconfirmed']['move-subpages'] = true;
$wgGroupPermissions['emailconfirmed']['move-rootuserpages'] = true;
$wgGroupPermissions['emailconfirmed']['move-categorypages'] = true;
$wgGroupPermissions['emailconfirmed']['upload'] = true;
$wgGroupPermissions['emailconfirmed']['reupload'] = true;
$wgGroupPermissions['emailconfirmed']['reupload-shared'] = true;
$wgGroupPermissions['emailconfirmed']['changetags'] = true;

$wgGroupPermissions['emailconfirmed']['writeapi'] = true;

##
# Mail Settings
##

wfLoadExtension('SwiftMailer');

$wgSMTPAuthenticationMethod = 'tls';

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;
$wgEmailConfirmToEdit = true;

##
# Skin Settings
##

wfLoadSkin( 'Vector' );
$wgDefaultSkin = "vector";

##
# Mobile Settings
##

wfLoadExtension( 'TemplateStyles' );
wfLoadExtension( 'MobileFrontend' );
$wgMFDefaultSkinClass = 'SkinVector';

##
# Debug Settings
##

$wgDebugComments = false;
$wgShowExceptionDetails = false;
$wgShowDBErrorBacktrace = false;

##
# Custom Settings
##

wfLoadExtension( 'Renameuser' );
$wgGroupPermissions['sysop']['renameuser'] = true;

wfLoadExtension( 'UserMerge' );
$wgGroupPermissions['sysop']['usermerge'] = true;

wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;

$wgExternalLinkTarget = '_blank';

## Files
$wgUploadSizeWarning = 20971520;
$wgMaxUploadSize = 20971520;
$wgAllowJavaUploads = false;
$wgStrictFileExtensions = true;
$wgFileExtensions = array('bmp', 'png', 'gif', 'jpg', 'jpeg', 'pdf');
$wgFileBlacklist = array(
  # HTML may contain cookie-stealing JavaScript and web bugs
  'html', 'htm', 'js', 'jsb', 'mhtml', 'mht', 'xhtml', 'xht',
  # PHP scripts may execute arbitrary code on the server
  'php', 'phtml', 'php3', 'php4', 'php5', 'phps',
  # Other types that may be interpreted by some servers
  'shtml', 'jhtml', 'pl', 'py', 'cgi',
  # May contain harmful executables for Windows victims
  'exe', 'scr', 'dll', 'msi', 'vbs', 'bat', 'com', 'pif', 'cmd', 'vxd', 'cpl' );

##
# Contribution Scores Settings
##

require_once "$IP/extensions/ContributionScores/ContributionScores.php";
$wgContribScoreIgnoreBots = true;          // Exclude Bots from the reporting - Can be omitted.
$wgContribScoreIgnoreBlockedUsers = true;  // Exclude Blocked Users from the reporting - Can be omitted.
$wgContribScoresUseRealName = true;        // Use real user names when available - Can be omitted. Only for MediaWiki 1.19 and later.
$wgContribScoreDisableCache = false;       // Set to true to disable cache for parser function and inclusion of table.

//Each array defines a report - 7,50 is "past 7 days" and "LIMIT 50" - Can be omitted.
$wgContribScoreReports = array(
    array(7,50),
    array(30,50),
    array(0,50)
);

##
# Wiki Editor
##

wfLoadExtension( 'WikiEditor' );

# Enables use of WikiEditor by default but still allows users to disable it in preferences
$wgDefaultUserOptions['usebetatoolbar'] = 1;

# Enables link and table wizards by default but still allows users to disable them in preferences
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;

# Displays the Preview and Changes tabs
$wgDefaultUserOptions['wikieditor-preview'] = 1;

# Displays the Publish and Cancel buttons on the top right side
$wgDefaultUserOptions['wikieditor-publish'] = 1;

##
# Visual Editor
##
wfLoadExtension( 'VisualEditor' );

// Enable by default for everybody
$wgDefaultUserOptions['visualeditor-enable'] = 1;

// Optional: Set VisualEditor as the default for anonymous users
// otherwise they will have to switch to VE
$wgDefaultUserOptions['visualeditor-editor'] = "visualeditor";

// Don't allow users to disable it
$wgHiddenPrefs[] = 'visualeditor-enable';

$wgVisualEditorEnableWikitext = true;
$wgVisualEditorUseSingleEditTab = false;
$wgDefaultUserOptions['visualeditor-enable-experimental'] = 1;

##
# Cite
##

wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );

##
# Translate Settings
##

wfLoadExtension( 'LocalisationUpdate' );
$wgLocalisationUpdateDirectory = "$IP/cache";

wfLoadExtension( 'CleanChanges' ); #
$wgDefaultUserOptions['usenewrc'] = 1;
$wgCCTrailerFilter = true;
$wgCCUserFilter = false;

wfLoadExtension( 'Babel' ); #
wfLoadExtension( 'cldr' ); #

wfLoadExtension( 'ContentTranslation' ); #
wfLoadExtension( 'UniversalLanguageSelector' ); #

require_once "$IP/extensions/Translate/Translate.php"; #
$wgGroupPermissions['user']['pagetranslation'] = true;
$wgGroupPermissions['user']['translate'] = true;
$wgGroupPermissions['user']['translate-messagereview'] = true;
$wgGroupPermissions['user']['translate-groupreview'] = true;
$wgGroupPermissions['user']['translate-import'] = true;
$wgGroupPermissions['sysop']['pagetranslation'] = true;
$wgGroupPermissions['sysop']['translate-manage'] = true;
$wgTranslateDocumentationLanguageCode = 'qqq';
$wgExtraLanguageNames['qqq'] = 'Message documentation'; # No linguistic content. Used for documenting messages

##
# AWS S3 Settings
##
wfLoadExtension( 'AWS' );

$wgAWSRepoHashLevels = '2'; # Default 0
# 2 means that S3 objects will be named a/ab/Filename.png (same as when MediaWiki stores files in local directories)
$wgAWSRepoDeletedHashLevels = '3'; # Default 0
# 3 for naming a/ab/abc/Filename.png (same as when MediaWiki stores deleted files in local directories)

##
# Temp Settings
##

function StripLogin(&$personal_urls, &$wgTitle) {
    unset( $personal_urls["login"] );
    unset( $personal_urls['anonlogin'] );
    unset( $personal_urls['createaccount'] );
    
    return true;
}

$wgHooks['PersonalUrls'][] = 'StripLogin';
$wgGroupPermissions['*']['createaccount'] = false;

##
# Secret Environment Variables
##
require_once '/ct/secret.php';

##
# Debug Mode
##
if (defined('IS_DEBUG') && IS_DEBUG) {
	# 도메인 변경
	$wgServer = DEBUG_SERVER;

    # 이메일 변경
	$wgEnableEmail = false;

	# 디버깅
	error_reporting( -1 );
	ini_set( 'display_errors', 1 );

    # 디버깅
    $wgDebugToolbar = true;
	$wgDebugComments = true;
	$wgShowExceptionDetails = true;
	$wgShowDBErrorBacktrace = true;
    
	# File Cache가 비활성화되어 있어야 디버그 툴을 쓸 수 있음
    $wgUseFileCache = false;

	# AWS 플러그인 비활성화
	$wgAWSBucketName = null;
	$wgAWSBucketPrefix = null;
}
