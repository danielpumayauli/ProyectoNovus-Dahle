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
define('DB_NAME', 'novus-dahle');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'e;:/V Zs`+Kx Fgb yFOe:|~^J ;@X3x),nPT.!{UY,8q65[O04iZ4$0yvE,${#.');
define('SECURE_AUTH_KEY', '}Og0yi8<C~{-4dngjNv?Fwqs&*`mPEcQk8d9]U4cf$a#XC`<o+S+t{zGoT4(!HNg');
define('LOGGED_IN_KEY', 'Yu[9P<<}=Hg~<dWTIly*4wlC@e*de-pwS>7F9B^ 7B]QDQt0z`~8C:8}l7w)f8%!');
define('NONCE_KEY', '5Ie-n|R/qWce&{0oQOP27^GWGG&9LKJ=xUg3NO94N+9#J7-=HeWMa)YSUW,GQ?l9');
define('AUTH_SALT', '2U0&Pd%y0$zRh?%ucCGV2CX!iUm_X3Xv+A;vfS!_+G-V,74lD&KqVZzRp8ppBAq&');
define('SECURE_AUTH_SALT', 'VQ~N{T2#U?hIU-[T|oj#;X0OIaFfcf]mj4}Z[{TVSA*)Nf~Tk1re_yjWt<3~R%6_');
define('LOGGED_IN_SALT', 'k&dsMK8,5Gowg{Ke2yTXm~rIf[*.!O),5r+0+zsvwlM`aal&=u^fv3gN:T}|Z3ox');
define('NONCE_SALT', '_70ipBZq.R+V!tKphwocX/IjXXud1O$47oby3AYPn^GvIO6#LQBrp>&=XG^:`2uK');

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
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

