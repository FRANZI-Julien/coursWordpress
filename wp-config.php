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
define( 'DB_NAME', 'courswordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'I`Vax;/I2hTW n4`G>ly}}^U,F{D,1daQWzQV{qRR*%jh,4D8uY;:1%MPODs5Jab' );
define( 'SECURE_AUTH_KEY',  'F8f}3dRJ7II4BuB^j0&PIbhfKFJ#MIk/&U9$Q{@sw3H,<a~C;3c$:${6U_~RdHuU' );
define( 'LOGGED_IN_KEY',    '0_]Wqs@o7m_M]2|VqQ![M@$E:0}G$xL7Wf.htKm;R#Vvy!ymZj8W4q*/:9##g1$B' );
define( 'NONCE_KEY',        'oHP.C;P@+aN8r,Tf)3~~U<>#2`I`0?:T75TcQOl`bZ4tX2fcMTfsf=G~@YrKDlh|' );
define( 'AUTH_SALT',        '1KnD<,Iz}oruOcgupe.Av0]fIxBiAtqfEW,]aEPS5|302=L0v_QB+rz;`v2/)VCn' );
define( 'SECURE_AUTH_SALT', 'VpotB?BxFcJE|8u%*Xs@}|Sl9(WN?>QD-z+sA /&X)mO..B&9d=Gm$Ij/-e)/@+6' );
define( 'LOGGED_IN_SALT',   'D|G&D*5Jjn(C|y^!uP%fC/^XWPGiJ:cX$j%9iW}om?n`xSGkgz{%Qv*Ulomowm8o' );
define( 'NONCE_SALT',       'Ln-o:Nc3]HRb9bHR(0JJjq3mr,+2{*iJ&gJ0wJgugS Iu$<HQddFSrz.])f1#v3X' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cwp0323_';

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
