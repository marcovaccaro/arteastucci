<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file definisce le seguenti configurazioni: impostazioni MySQL,
 * Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
 * E' possibile trovare ultetriori informazioni visitando la pagina: del
 * Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. E' possibile ottenere le impostazioni per
 * MySQL dal proprio fornitore di hosting.
 *
 * Questo file viene utilizzato, durante l'installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web,è anche possibile copiare questo file in "wp-config.php" e
 * rimepire i valori corretti.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
// ** dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'Sql656266_2');

/** Nome utente del database MySQL */
define('DB_USER', 'Sql656266');

/** Password del database MySQL */
define('DB_PASSWORD', '51555fa9');

/** Hostname MySQL  */
define('DB_HOST', '62.149.150.187');

/** Charset del Database da utilizare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha
idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * E' possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0PT=,_dHyX;OD.y>(1O0H<88T]:9H3, SI[-(pv})gL ,P),~7jw]#vB:IegG^N6');
define('SECURE_AUTH_KEY',  'q]}w [is{QEH> FR4&[t};*pK!mQpma7dUfp?=feB0A^[C{7Ym!L;2+?=,p.hAmE');
define('LOGGED_IN_KEY',    '`*}N^-GJeq?(P`w7kR|-bZm.}q*9Wu%jta+.-[YY|-0wg1aZ+QsgEJBDsPe<7R)s');
define('NONCE_KEY',        'fp_u`@E0aw|,;/tc cY~Nzot=hQUQ+|&czl4a0OE(YEWw;HL671g/:I|P+u.dUrY');
define('AUTH_SALT',        ' q8V&*Jg6eI#cDHh%-7b_%Gm}fy;JNDsL?-0)F(e~-(KUT)U,dW;iD$c$^Z(QpjP');
define('SECURE_AUTH_SALT', 'CB~Cp6!Gg| UNci$hPA|W-tF~TUX1CMS1oT{S{/kbt$q8NpSb~|TzrmGW 7@TguC');
define('LOGGED_IN_SALT',   'f+z1r3L&li~0ieq+In0oY|Vr>(OADyozx2B{05)&K`jGY1Ef_z`+r{#wcfznN46=');
define('NONCE_SALT',       '07Tc7R)%WkQ^1p^m.t:Me<~[;?ijXeOR>#gz;W:FE,{%jjCX4oo;Yl+iL{Y.BfMM');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress .
 *
 * E' possibile avere installazioni multiple su di un unico database if you give each a unique
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Lingua di Localizzazione di WordPress, di base Inglese.
 *
 * Modificare questa voce per localizzare WordPress. Occorre che nella cartella
 * wp-content/languages sia installato un file MO corrispondente alla lingua
 * selezionata. Ad esempio, installare de_DE.mo in to wp-content/languages ed
 * impostare WPLANG a 'de_DE' per abilitare il supporto alla lingua tedesca.
 *
 * Tale valore è già impostato per la lingua italiana
 */
define('WPLANG', 'it_IT');

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all'interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta lle variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
