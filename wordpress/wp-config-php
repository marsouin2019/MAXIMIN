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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'dweb' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mRSMA' );

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
define( 'AUTH_KEY',         'VLa41/eU(:: H=EsQe6%Vp@+nC+J{Q6w45;2=mG%y<m</4id4]rt(%E46y#t!X(u' );
define( 'SECURE_AUTH_KEY',  'c(^m>a!?G]@d86yEA6MUCS~6>zXtj1S%+){nVW4q-?8)*H9suqrr9hyb_$8>)/xN' );
define( 'LOGGED_IN_KEY',    'A6om|?gzrXY9NvEs=,`S <U$[HaZ*{DR]O4z00#6YG8fJ302l?w@MVR9@!Clq|u;' );
define( 'NONCE_KEY',        'Sms9Dl*Rg:UgNwk;k9dI>T9C_/jlg)4U~ ?-P5VeTKFemEib&<` 3s^->t3QiT~i' );
define( 'AUTH_SALT',        '!7Hn2B2tp_C7_j]c5!~c8l-U;{8gEZ/D38@b^#-OOhKE$z(zq[E=t-eCXW)[H-Qc' );
define( 'SECURE_AUTH_SALT', 'gw}?Q[y5L2.g7E|m+&j6=B|r:!i:sdQN,Ft>(q*RI?~|<g_,/Ga *IsFHAlm`N{{' );
define( 'LOGGED_IN_SALT',   '>cz.zlF|s!0b+zZCz=2gk,a),))h[@<zJu 139!,_;zgBM5nk#eM^THOVU7Kablb' );
define( 'NONCE_SALT',       'zuHQZ7|Nfz~`{^}aiw_%H(D)iCk$@NxlzI#@i1?.sQA@$NTg[NDQV;b%#:|5+F*U' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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

