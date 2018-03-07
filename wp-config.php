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
define('DB_NAME', 'wp');

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
define('AUTH_KEY', 'Ni+A~~t11jq5)B1t<)bFs*,kuJ}=`0,v,/S*}*uw$uI&jY(PMA>bxcVCy`]B!UjW');
define('SECURE_AUTH_KEY', 'EU?C4:cv4K9q^:fi7W,P}EQ$-}`s/mMf?K/}$*3=|w|N+Y](.H#^st.L_t|}`9~~');
define('LOGGED_IN_KEY', '{lub}uRFQJzmC{>+n-~?u`^^(zP[:E##s|a-|1r7XY<oPAem6i~B$VMxHZl>o1AA');
define('NONCE_KEY', 'OC&A Y=~UUmC6q(<3[%M;@T3vsMg-[d9`V]4A!z&To.bgw .]F0y,rvCT8!5AA=t');
define('AUTH_SALT', ')w+S7,H/dc3cS]149Pc1FFMpIpw`oimKy #^qZE|ii:IQ1MOwcH2As5JVk bt7,<');
define('SECURE_AUTH_SALT', 'Vy%)Nm=oQP;c6GY^9(-t5r2pT?guw.(<Fz3ZZ1^c0>2gNMd]5l<#t%4|vh1,#G:e');
define('LOGGED_IN_SALT', ',,vbd=(c<^tgZ6&TXgkyW71aR!HErRi%JvrgPuL2UX<{e`nU,7!aFB2<LoK08JVD');
define('NONCE_SALT', 'Vb.qAXcKEF>Hz~|d1*_?H3y;H,9>$[WE#2?Ov25mKdRWheAS1G#h:|^KTL_[Yndo');

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

