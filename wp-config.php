<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'monimmo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '2201' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4jItGDYGg&!K*vttjSN>[kSR3aZy%HY]0R1X(OTpCCjT5mOhlw@p^R4==6Ut;l<c' );
define( 'SECURE_AUTH_KEY',  '@TV3%ihq:D)>w$VG<16ffaug(:ucK9EP<33dh.TIoA}.]VL9)/CD4Y/VZ]wc+Px-' );
define( 'LOGGED_IN_KEY',    'HWaJVc@XxlhbPq{[2^vp-<Eu:Yyzl3N~wF@(8pC~YrSOcjDPWFna^K#NXtEgld/B' );
define( 'NONCE_KEY',        'Rg[AlQ7npZdC@ #V$IXsc(?Hw[gU(m0Y[Wg`(Q4tjCd}UaaxF0n~Y=@+8)Hgg:eg' );
define( 'AUTH_SALT',        'T+dN>Cyz3w:a&5h1y^GVV!2Ohpys#S~_YXAX?tf-`@jrE=ioFYA[}Wtq+swY84Qp' );
define( 'SECURE_AUTH_SALT', '?:u0)Rd:9I1t5Al!4Ob/D*)oyNk_hfj{]^^[e^EG+5&SI>^DkiVM84FIa,,ICU{&' );
define( 'LOGGED_IN_SALT',   '|vMfwl#H_AJ-b0s2a_5|CR(/M&%.I`~<K}Lu:{tPi. wDx+YSb+kA>P`Ba$!*EIo' );
define( 'NONCE_SALT',       'H]<FNp]tJwDc*q!new[~n]:dTr?8%,pDV> skPM|&xf#bwZh2$gz2BqCO1n(-|Nh' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
