<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'PLANTY' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GF920p6mXZlxm>l2NFIR[k$Vq9W=q_lR~G8Z`dK8/RRy]i{fe6{G+RY`Tcr:fzj!' );
define( 'SECURE_AUTH_KEY',  'r,jBdO&_%&A-{1j5Htsl&83d#=krj,Ce=02N#F$U/;O*vgy.aW/|Mejc1cH:1[BZ' );
define( 'LOGGED_IN_KEY',    '^L%[o!/D<h$!z+Hp<g.aWdpIGw[Z]x0in=Q/Y&DFAgN._:tq46Bh&NENwJj 1Lq.' );
define( 'NONCE_KEY',        '&E^YoBPp3l}{x^~<!C%5kOytV`]v`PyF$kxOiwC0*qiY@F=@VV?DmO1(bEaF+t3e' );
define( 'AUTH_SALT',        '1s3vqReF#L&G&?/|Ahx$vy5qqDj;yk#Aslm_`c1tUUCmQ$ivwK!p#Uqb(Rbt9;E^' );
define( 'SECURE_AUTH_SALT', 'q;j.o$j~bc +! TjY[KSz4#R*BX{<vcY>Rx19Aoy)z)`-CN]20Fnv${a5#;~Mqhx' );
define( 'LOGGED_IN_SALT',   'thP6lXDN}hsRk.x *.4A5y>$WsbP25XWL!<PEfv+vQ^@3-AE{wXH@<ZN^uDHe8B@' );
define( 'NONCE_SALT',       '6w%m-lG{O@QsacV{`Y9V(&.iSiMePz)v.Pb:kIat^G=yX~VZ0%R1|}V$WFgE+Geq' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
