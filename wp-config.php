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
define('DB_NAME', 'cookicode_bdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '|I?3 -CrOZv/a:hyYCRXg[c6e0j/X!tT}T)6$EH*w1+b?Kc3;Odig;-|1:4Bm~:-');
define('SECURE_AUTH_KEY',  '$E=zBH)7phQbU(rWkDh8R-jkw<dHX31}dO<~]V<h1[llolEW$&KF$Ggs#cG0_}d2');
define('LOGGED_IN_KEY',    ';4KU#1uRYoJydgDD;Zm8Q%MZM~^jP[$..E-9J|dmi$q8IY&yd@@pDpB0|uoEv{K?');
define('NONCE_KEY',        'OpPvo=9`+fp%JF|d4!WE9G)0F0D%:(T }<0NH18`2Ww/+/!GLt-82DSG%.ftrD,o');
define('AUTH_SALT',        'j/(sFbT$Lh#~A*bWOaD84+0w1MIoogQ2p|hl~d}lrAZRWL8.4o8pkZw+r1I@4n#M');
define('SECURE_AUTH_SALT', 'a]flclj4/eAf5z.t=,E1$;GvLfeJG9pJ@wU+k30kKSRaq2vO6@rr8woIQalkklF+');
define('LOGGED_IN_SALT',   '$CKHSV/[EU8yS~ndj#OKp_Shtz[o#ns^OxCrr2rreQ|3^[uIlF4nd2sZS=e3o+W ');
define('NONCE_SALT',       'yh<XN7?ibBP~0ppjLh_8pZqitb(Y*-V|m125x63j/a~^,T (GwCYi)$2naPBd63l');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');