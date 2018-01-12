<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpc_00c5aa');

/** MySQL database username */
define('DB_USER', 'live_00c5aa');

/** MySQL database password */
define('DB_PASSWORD', 'fBqTa2&sXd5M');

/** MySQL hostname */
define('DB_HOST', '10.1.31.51');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         ')_^Ot#-!9wyN)UzLp]Wc0:[&X$kHt|S+G/l( ow;)=;+k(io-R#`Q|y-E[wve(dK');
define('SECURE_AUTH_KEY',  '!|>_WMiRFan[4;uD$Ryr9+k&wdG7+k=~9&1P~9:ey<}6b&JF^QPl=S]W/[uDh4@V');
define('LOGGED_IN_KEY',    'vy8)4`hIrgTAK+?7+E$N*l{^$]+.hmlyMDOb6gp7!Z@_!6|TgkKIgAC-]$[yRYh&');
define('NONCE_KEY',        '2}$.sz]$=Z>JJxd!|qZ-r-SpJ5I3sS&]I1i!~1/_--?I2|kbTK@}A<;%z-->H_z|');
define('AUTH_SALT',        '@}>6TjE2C5X++$AXN.w9<{%J6u{Xvk$-wC_REiPJPX-pXdF:gu(PaSHH*tsY)#RU');
define('SECURE_AUTH_SALT', '-}^PLUfUER+7 6k4pqGBp3I8(K(wIpgffJFSb:3/`cY(G226DRA9udV6<mW}NFC8');
define('LOGGED_IN_SALT',   'R6L,k$>IH/?CfQU9I#;HA`]yu@oQxM,(GGem_?GHS,U{:[Mc</s_{g<;B+n#KQrp');
define('NONCE_SALT',       's/b@h;8)m[sNj<&M`cADuq1Fe|XqE7Yq.JUM[@}I3F|Az+eZi/z~|avtO+|HN/s-');


$table_prefix = 'wp_';


define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', 0775);
define('FS_CHMOD_FILE', 0664);
define('WP_AUTO_UPDATE_CORE', false);

define('WP_CACHE', false);

/** WordPress Custom Config. **/
define('ZWP_BRAND_KEY', 'wpc');
define('WP_DEBUG', False);
define('ZWP_REGION_NAME', 'tyo1');




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
