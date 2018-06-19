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
define('DB_NAME', 'desafio_2');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '<,imi~?8fb{QYLdTMLWY]X]J4lniH9zRJ@AoS?Fo n6j/4vb;tjL[y|J(|`E%8Yo');
define('SECURE_AUTH_KEY', 'X}L@%H%`~[fWx4Hx69lC%W*DgwOK*-t@=Z04hEir_zxny&y|.^MGRRXo89kEQKwx');
define('LOGGED_IN_KEY', 'bYeGS|_(LH(02o`/UrC@T~sQ+j9BQWn.=HV:+7#1[Ii9Ogt/ryZ>n^GiLB!2Bu?r');
define('NONCE_KEY', '&#}C]HC>&*v,T+wAAC#pr1NSuj%1*+y7Px0dhGSBk1*y8XyqgqS*xLV NKwYO[B9');
define('AUTH_SALT', '+x!dXU&HGbKGt6# :mbS+%.9yNED>r#oIAjv0E)`a#rY)(@6!DeTH:MzFmZ4E6s#');
define('SECURE_AUTH_SALT', '<1G-Y+fF~w{3,Jn{QC7&q@D;j^0+Mc^L*E} adC,<M2cMzG)KYtyRNOy[_;!c-i}');
define('LOGGED_IN_SALT', '@22mL,3qtn{d]gX<3T{dRUM39N:^`7(|Yq<g]8>LPG6@H NH;)d=OBLQm]97vGkO');
define('NONCE_SALT', '@_~5vhz&f*.(vy9l>w!j9FTsOvR+ {cG%{Qf1b}~y7o3$E*Il>Dd$W9m<wx4V?Ul');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'dl_';


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

