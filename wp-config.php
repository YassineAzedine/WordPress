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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'F!Yci}1y!X^H2E35O0!c!uB2{4bJaRY>wM(}8k$6`i^Bh.K}uK@*y:7|gz|whd#A' );
define( 'SECURE_AUTH_KEY',  '0]*:?Cf)&*:zc+[#_Jc=VRZY)@SGV^&0i{{SF9FBLy.54`)=dR)sUsx{CpI3ScBt' );
define( 'LOGGED_IN_KEY',    'Qn&[:n}WhD<s^oBfBL?G287CT9OA&RUB7c7^G/m,UIdEV X,Yts?(tgL7MC2/j>Q' );
define( 'NONCE_KEY',        'p[D4Tt1k#q]RZZU&3PiuQq:1qk;H&B*/Pf>nP>prt!,(T|cQjar0Rkt`15$?[2gT' );
define( 'AUTH_SALT',        'a1ES}P>J%(?IZjuy<vcv8Iz<&rl%RTF27LVNqYG5$N jP_F?W8Vf#tI[E|Yy{-}>' );
define( 'SECURE_AUTH_SALT', 'u S9q|8p:n2EX9[7u0SJB;h9!ybnYhBL|%(pU(YYNfkM(UBm#T31RcX&2h}M?-hA' );
define( 'LOGGED_IN_SALT',   'Sl:?T[&oMx[5?*L6#&ai0t4_Hf!Pt!x52H4p58b7A]=iahVBx3:=:,AHXZQ3<U>~' );
define( 'NONCE_SALT',       '63C27$p_jN?2H<#-z)c-X#kLfEZufszt7g3J_&#jnpD9qF*o9IlfDX+8Qx5G6#Gn' );
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
