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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{Z]a*qKTEBKN2C4mID0R=?%N]6/p8,}MB>2CY-!M,.5G(c)!cun4k.C.18b+Em:o' );
define( 'SECURE_AUTH_KEY',  'pS.wlg{*P>x:&=7QBfpdOE-4/hUD] te)/*lA,IEDExO_bKOUFJA7k(|/WmPv8eg' );
define( 'LOGGED_IN_KEY',    '>mrXMR# zN?:C#xC`D6xFqQi0dbrR+O@S-WVzLxf$oyWdJ.<A%]UDCo;-py[Lk{V' );
define( 'NONCE_KEY',        '!3wbL.Y/T)mHK%aa1)sZ2 }l`YG37gJ18ahX`5#-I,3idfJ4X*>HT+7@cb+x6AE<' );
define( 'AUTH_SALT',        '&`W#6l<ZA?OkLfX}wYu9oL@z;n8#1[vq#;gi1-n3j23o#R%4p>Owfb<=tK<kakPB' );
define( 'SECURE_AUTH_SALT', 'HMWT$K:B5mn>N%Bc#V-%t_t:}#QNWAAxfZ;b.e6[@Jr8)F.ZXHB;`]w+6jQ>!w=d' );
define( 'LOGGED_IN_SALT',   'AYh`!L]`%(-#t>h]%txN=Ra|B?L7}%28R2`|Q,C &ATX{;W5}_}1N+*VFCBDC NK' );
define( 'NONCE_SALT',       'klW@#+X;2&!IdbD9=:oS]CuLOwh_g^_|MN1G{B+lkL<G#Cvi_hD-2nRIsR&b> k3' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
