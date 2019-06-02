<?php
/*
  One wp-config for local development to staging to production.
*/
// Define Environments
$environments = array(
  'development' => 'hectopress.test',
  'staging' => 'staging.project.tld',
  'production' => 'project.tld',
);
// Get Server name
$server_name = $_SERVER['SERVER_NAME'];

foreach($environments AS $key => $env){
  if(strstr($server_name, $env)){
    define('ENVIRONMENT', $key);
    break;
  }
}

// If no environment is set default to production
if(!defined('ENVIRONMENT')) define('ENVIRONMENT', 'production');
// Define different DB connection details depending on environment
switch(ENVIRONMENT){
  case 'development':
    define('DB_NAME', 'hectopress');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
    define('WP_SITEURL', 'http://hectopress.test/');
    define('WP_HOME', 'http://hectopress.test/');
    define('WP_CACHE', false );
    define( 'WP_DEBUG', true );
    define( 'WP_DEBUG_LOG', true );
    define( 'WP_DEBUG_DISPLAY', false );
    @ini_set( 'display_errors', 0 );
    define( 'SCRIPT_DEBUG', true );
  break;

  case 'staging':
    define('DB_NAME', 'database_name');
    define('DB_USER', 'database_user');
    define('DB_PASSWORD', 'database_pass');
    define('DB_HOST', 'localhost');
    define('DB_HOST_SLAVE', 'localhost' );
    define('DB_CHARSET', 'utf8');
    define( 'DB_COLLATE', '' );
    define('WP_SITEURL', 'https://staging.project.tld' );
    define('WP_HOME', 'https://staging.project.tld' );
    define('WP_DEBUG', TRUE );
    define( 'WP_CACHE', TRUE );
  break;

  case 'production':
    define('DB_NAME', 'database_name');
    define('DB_USER', 'database_user');
    define('DB_PASSWORD', 'database_pass');
    define('DB_HOST', 'localhost');
    define('DB_HOST_SLAVE', 'localhost' );
    define('DB_CHARSET', 'utf8');
    define( 'DB_COLLATE', '' );
    define('WP_SITEURL', 'https://project.tld');
    define('WP_HOME', 'https://project.tld');
    define('WP_DEBUG', false);
    define('WP_CACHE', TRUE );
  break;
}

// Default: If server isn't defined, do this.
// Put the details for your production server here.
if(!defined('DB_NAME'))define('DB_NAME', 'database_name');
if(!defined('DB_USER')) define('DB_USER', 'database_user');
if(!defined('DB_PASSWORD')) define('DB_PASSWORD', 'database_pass');
if(!defined('DB_HOST')) define('DB_HOST', 'localhost');
if(!defined('DB_HOST_SLAVE')) define('DB_HOST_SLAVE', 'localhost');
if(!defined('DB_CHARSET')) define('DB_CHARSET', 'utf8');
if(!defined('DB_COLLATE')) define('DB_COLLATE', '');
if(!defined('WP_SITEURL')) define('WP_SITEURL', 'https://project.tld');
if(!defined('WP_HOME')) define('WP_HOME', 'https://project.tld');
if(!defined('WP_DEBUG')) define('WP_DEBUG', false);
if(!defined('WP_CACHE')) define('WP_CACHE', TRUE);

// Don't forget to change this to match
$table_prefix = 'wp_';

// Do you speak my language? e.g: 'en_GB';
define('WPLANG', 'en_GB');

define('DISALLOW_FILE_EDIT', false);
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'ALLOW_UNFILTERED_UPLOADS', true);

// Authentication Unique Keys and Salts.
// {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
define('AUTH_KEY',         'GXogf`k2eEY~{E^{3 -s[c/)b:m GC^NU>!kF@2<0xZ3Dj%W]wj-]x{[}kl1-{7H');
define('SECURE_AUTH_KEY',  'jO_dPCom{KvVYbl02OU^i:|:CzXwQDeS6x$k^a>>XE9D(t:Q!ua0w^+zt-mv{Jm}');
define('LOGGED_IN_KEY',    'r5-`cSZL*3JkEu>|lm_`5jF5-<l-l~~%+Q8hm0?W+8kinM0NwEFE)h+Lu+][U$]o');
define('NONCE_KEY',        '/Hf_I7A_mtv3.ZP`UjHtp2;Z1&)$wk>^<D3sFg]?|OKy+It dyODeVu::,_RaT{D');
define('AUTH_SALT',        '1;5e]cs}nBAc}saddNTJ(I0U6Ks%w0{!^p<?I]_$p6bNL:*cg>a(bV<CJa(*smlY');
define('SECURE_AUTH_SALT', 'rtzzO9g?r~KW:^]O^.Wl4(M=*B}vQ0%-Eok^Hs(dAZg^z=S9}|*4li?)?T~-z7Ca');
define('LOGGED_IN_SALT',   'b)HL~EI[t.ZZ8qCTsp]#x vzyv9 (s-Xpsf.r:M:?`]l8 ,~pS>)x3i*5nF8Y4@f');
define('NONCE_SALT',       'T}LM|{c!S,A`@qNsXE6`d2<mq-dxg|Nb2.7l{!59t3lhNj|tJz$m_F+JYT0$HHB7');

# That's It. Pencils down
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');