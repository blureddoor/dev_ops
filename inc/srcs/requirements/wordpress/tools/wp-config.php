<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'leovintila');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'leovintila007');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'mariadb');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z#J`NG0X@+(;VzgrJ<ohlC6U;*-}SYI[(zC09>$tp#SHlG O$T%c12HB:HV!,{a#');
define('SECURE_AUTH_KEY',  'Y<c-yj#=oH(df)Lo,<?mS.jjo#3MV1AHIp-5x-SPMay|<vY2yDx{)#d^efS 4.pB');
define('LOGGED_IN_KEY',    'k/+@3@=lz?dih*3ZCGtlEsKGX!HGvwDH*3,zD.02y2i$_x]#{6ZX.RZ19Dp%gR~F');
define('NONCE_KEY',        'b47blY+kJmFCTN{ZQQDR/2h/Z`)YzC9ri :vRpl.EfI[#*D/z2DeI3>_2Wx<%K:B');
define('AUTH_SALT',        '5+#e~2~jwBdE=1=Cdx0Q^x>~[o8,t@jp@&mvsq3fm`mscg>Vu*-vgmZtv,$-L$ev');
define('SECURE_AUTH_SALT', '0St0||6-a FBb^S+d+OxaAa_pN#3weB|2K-z@e|F5yH.3-+~ A?gvpPAbB-<CkRx');
define('LOGGED_IN_SALT',   'eXJ<3.kQm+[Ce{EEBzAiyG2yD,`9]uR9?Vvq|9XU|kZMzU/I;-h-L3_[2$.;a-aS');
define('NONCE_SALT',       '(#eF_20+9qmD:XrBm$d{e>r(5v$c<[{L$@y$<q?>Wy&qrzL4D+vz_ :|2L;<K}B~');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') ) {
	define('ABSPATH', '/var/www/wordpress');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');