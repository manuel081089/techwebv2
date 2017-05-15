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
define('DB_NAME', 'techwebv2');

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
define('AUTH_KEY', 'ocO-??P=UOBTWE!rK2tgKnbH&`wJ>az~?kYIo(~9q~qhccR(Y|5femMt(X{J*OaY');
define('SECURE_AUTH_KEY', 'Oe-H=Dt.@ %S2k< &p!^Y6uyilOW1E@iV!R6.#$!OB|)*XUf|tH~2jy:Q/Q>|TRb');
define('LOGGED_IN_KEY', 'JbcK<MvJ$)PdilGu3~V/(E/?e=FZl!TWme*@u!Ol6D* K^@b(((Ty/(_UFdEx*gh');
define('NONCE_KEY', 'jK}Y[LDAB(;fN1zm$L2/V:M wwg|%v73Uj)JB!9L}knpPB`x_kQa(HN1J)g>.]IJ');
define('AUTH_SALT', '#_=td?R7+E}E0i28~IwkO)9~x>#:Oh:kS&0ki>CPP}bPcz%G:oLWa,A{NOnUHOYg');
define('SECURE_AUTH_SALT', 'jt>jv}~G}|`MT8WwLE|uy`pAJE)>{L79Dt4U:5C!9*4QLPx&7SpzD,*>qiw!j &J');
define('LOGGED_IN_SALT', ',A}eI7%[!8v|g+ET6s?~ky@.-$J-Ss0S)BHqueaN<+d6jSK3Y7wE%*=j>_sqZ3zu');
define('NONCE_SALT', 'Y/ONqSyZ0ylvVxIPQ$+S2kj@@||a~+XY8p0}cLIMOi7?]|L_/VeVTNFa3XwnldbQ');


/*define('WP_PROXY_HOST', 'http://172.19.172.1');
define('WP_PROXY_PORT', '8080'); */

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

