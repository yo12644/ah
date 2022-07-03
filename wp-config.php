<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'yo1_wop' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'yo1' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'guilhem2009' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mysql-yo1.alwaysdata.net' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ' Va=HH5p)Z%)-5JrR30&di|C1)_g~H*ZP3}/@:It d.@bE;agF,7)rVt2`%Mz&dP' );
define( 'SECURE_AUTH_KEY',  '#3BY[Y;F=|BH`KkC?0!/R4@V?O+|JRoEaj@jtk<@N0-lZqGHo-^M_9y=2{=dwDAO' );
define( 'LOGGED_IN_KEY',    'N<_|<Jenti3}&A`#xGW{Y>NyF[2Q5xvDV@_vAQPn26POsp^]uB{%N+}V[v-utp#6' );
define( 'NONCE_KEY',        '3]Hw|Ok8T.bH1F?BB-jri%zJ%^OM7jWhwXJwKEe:A8OH!/;|NXv-Pnkb]sJtSbU)' );
define( 'AUTH_SALT',        ',zs le<oW;Ji7WJuk2~)us^E>g~@4IniQ+$W]3]mUhdNYC5Wb?!.P_$rY7U `gCn' );
define( 'SECURE_AUTH_SALT', '!wjw]#*m|(CIQo?V:@=&A+7KjZBrS9tElxz-bpOBltGJg0/b+77|kmfJ>^j4Z@Ja' );
define( 'LOGGED_IN_SALT',   '6!E}n-k=Eg&1$kpC-xx.qR-@<Sw:Ai*U3nJnBno4`Hm?I&Q4@;{OITk9n{|@vFGX' );
define( 'NONCE_SALT',       'iKsb)]:1<gJGAOUK1Wi+U]:RU7/7eA=dnpU)j|m_IkiY5}oAhUBR~zmc+]$5wP2+' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
