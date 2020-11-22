
<?php
/**
 * -------------------------------------------------------------------
 * SETTING UP VARIABLE CONSTANT FOR APPLICATION
 * -------------------------------------------------------------------
 * @author Firmansyah <vhivirmansyah@gmail.com>
 */
// error_reporting(E_ALL);

	/**
	 * ---------------------------------------------------------------
	 * APPLICATION CONFIG
	 * ---------------------------------------------------------------
	 */
		// setup SYSTEM PREFIX
		define('SYS_PREFIX'  , 'sys_');
		// setup App name
		define('APP_NAME'    , 'Monitor Karyawan');
		// setuo App version
		define('APP_VERSION' , '4.0');
		// setup App owner
		define('APP_OWNER'   , 'KKI@LP3I');
		// setup App theme
		define('APP_THEME'   , 'black');
		// setup App logo
		define('APP_LOGO'    , 'upload/logo.png');
		// setup App sub logo
		define('APP_SUB_LOGO', 'upload/sub-logo.png');
		// setup App fav icon
		define('APP_FAVICON' , 'upload/favicon.ico');
		// setup App Prefix
		define('APP_PREFIX'  , NULL);
		// Email Signature
		define('EMAIL_SIGNATURE'  , 'Khaerul Istafa');

	/**
	 * --------------------------------------------------------------
	 * DATABASE CONFIG
	 * --------------------------------------------------------------
	 */
	// local koneksi
		// setup database host
		define('DB_HOST'    , 'localhost');
		// // setup database name
		define('DB_DATABASE', 'kki_real');
		// // setup username
		define('DB_USERNAME', 'root');
		// // setup password
		define('DB_PASSWORD', '');

	/**
	 * --------------------------------------------------------------
	 * DYNAMIC CONFIG
	 * --------------------------------------------------------------
	 */
		// setup dynamic content url
		define('CONTENT_URL' , NULL);
		// setup dynamic css of page
		define('CSS_PAGE'    , NULL);
		// setup dynamic including file js of page
		define('JS_PAGE'     , NULL);
		// setup dynamic including script js of page
		define('JS_ACTION'	 , NULL);
		// setup dynamic page name
		define('PAGE_NAME'	 , NULL);
	/**
	 * -------------------------------------------------------------
	 * PATH AND DIRECTORIES CONFIG
	 * -------------------------------------------------------------
	 */
		// 
		define('BASE_APP'         , '/application');
		// 
		define('BASE_ASSETS'      , '/assets');
		// 
		define('BASE_SYS'         , '/system');
		//
		define('BASE_DOCS'        , '/docs');
		// 
		define('SERVER_NAME'      , $_SERVER['SERVER_NAME']);
		// 
		define('SERVER_PATH'      , substr($_SERVER['PHP_SELF'], 0,strrpos($_SERVER['PHP_SELF'], '/')));
		// 
		define('ROOT_URL'         , $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']));
		// 
		define('APP_URL'          , '.' . BASE_APP);
		// 
		define('ASSETS_URL'       , '.' . BASE_ASSETS);
		// 
		define('SYS_URL'          , '.' . BASE_SYS);
		// 
		define('DOCS_URL'         , '.' . BASE_DOCS);
		// 
		define('ROOT_DIR'         , __DIR__);
		// 
		define('APP_DIR'          , ROOT_DIR . BASE_APP);
		// 
		define('ASSETS_DIR'       , ROOT_DIR . BASE_ASSETS);
		// 
		define('SYS_DIR'          , ROOT_DIR . BASE_SYS);
		// 
		define('DOCS_DIR'         , ROOT_DIR . BASE_DOCS);