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
define('DB_NAME', 'prestigecab');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '>|G=b&3h1e5Fv/<wqd=8,|qkF7{k9Y.NXJ=%59|>`a 1b3U-jCT)<Jg!P1nwf#.d');
define('SECURE_AUTH_KEY',  ')[U9}Eb[G*z[8-KJU-y{KL*o2seN19[A/_KS1/( x6(Y#KW$AJ%tkGlrlX.G2fi]');
define('LOGGED_IN_KEY',    ' m53-!1s_9Wa&*9@=]3uhR}4|k#&:b<oq884iJ!>|8lKy.F&6*!8R-9T5p-X#$Gq');
define('NONCE_KEY',        '|j]Gk`fJcnM%3ePD0cN>OqR*KXySx%f4}%SV+s(Z&j@bGmx]0`eUVGGL3il?eQ?G');
define('AUTH_SALT',        '(Bxc?ONXBc&]?D#JXoZq>VSE3+u/+1emVo-pe:9rsclVQqhHP,;j#D!6f*+^D{+f');
define('SECURE_AUTH_SALT', 'F&4nT`AO.;3ut<%,Mg2TP~5PvoQyw=b6`0n)LucRVXPu|t_]gAZ9@:yU)8 1$E~|');
define('LOGGED_IN_SALT',   'yJ*b&7N|K0@R5.h@Wec%-H+xD[niu~SD;QcM^.$ zksF76@XGI.%OQG 2 onu94I');
define('NONCE_SALT',       '@WPNQG h2=Pji%VvPo&TN=$!{Psaepm5}=d=F]$gr*w(uUfN+:Vj1gy*#V>RsKbE');
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