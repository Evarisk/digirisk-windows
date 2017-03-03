<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'digirisk');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'digirisk');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'localdigirisk');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?N( _r k-EhtAYZ$NAPv1z,g`jSro}),B3yU]2-+kY)5JGm:`DM)4WPFSmI+z!Al');
define('SECURE_AUTH_KEY',  '6vA_MX$-H.p2@hBXkNRH;0+q,>+1oSZ|>}vU$Efqu3yrNMSSOivlS:q)87t}|4dm');
define('LOGGED_IN_KEY',    'qG]hbX*km}(u0j1X/pmbsS#],Uz8PY+Z.1}DmG< S5.hVsEVAn`[3?!(U2Z+8y/y');
define('NONCE_KEY',        '~F^Ltig8DWz +hf23bCOaf7u8zK<:3!j|Clms=LwPwB/u^I-`=90XySSnpZK->j7');
define('AUTH_SALT',        '}4kaoAbJ4a0]r|Y*)W-1Z~Pz3bAIp~L^QgjnS<-^b(:RoSarF&D} +_@0aM=Z;*5');
define('SECURE_AUTH_SALT', '0`i15aP-.mH9I Z@!$9b}{BnQfLL]!-TVNq@2nu(Nrx=z/U_1(e8}|qsj;WPOMIc');
define('LOGGED_IN_SALT',   '|6KYd@-LHph8w?b[hF@lcZ0<gQp<h+Om%t>]lzwamVnVTJ3rg<E{^KC+-zj%qhd@');
define('NONCE_SALT',       'aSBQs:U(Zz/5~;Z[0?7eECkcr$WUG>1ujfF!txW}Y+Nn.)m$3j%~qkBEZ9)T5&{X');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');