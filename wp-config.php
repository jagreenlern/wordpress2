<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'wordpress' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'wordpress' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '666666' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', ',CrUF{4|upj<67Ve0 ,2o(-2ud=*ZxPL9u1HlPrBg((o55#>8s+F!RoO^0CG{ew^' );
define( 'SECURE_AUTH_KEY', 'MZRepBGUKRic1<S<@i d!uRj8Z?K7!upJd_z03%|W rm2*3;X(v^_XkLx`_oH>V*' );
define( 'LOGGED_IN_KEY', '/.2r]$y4xQ9G#|HR5RjxQ1={pMKN1}9G%9q=`LRD:A=)MHAoIlH/4>4`)$*JjfUo' );
define( 'NONCE_KEY', 'kpz1wsq>J)L)h(P-X+:+^@RFy8GU_1a~R1:t.ox)x`6g8L*!<F(@5z^lUE+E}@bz' );
define( 'AUTH_SALT', 'aeRha3[mV|n@uHSn}1WKVL4nsNDlh(_p:bKX=cE|V`%/5fK/g)V~@>j[~@xj^>Pw' );
define( 'SECURE_AUTH_SALT', 'qBJxKFyHC5e=evH m]WP7[7qNW;/yquT-O4U-Sk)3|21i@@^/IpA(4Vq-4fz=Ww{' );
define( 'LOGGED_IN_SALT', ']T&Ialq4w?dx!ef6eb_YwZS|3|D5WD;n%Jp XApVIhpZ;y/cp:<ni5~I3f[|,.h>' );
define( 'NONCE_SALT', '(l@!]#nN46w P8obP%@,@f&*)e9+ZTsYZ.N*6tY;(V[c)8Zgn&ZAj}2<OQ$#~at-' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

