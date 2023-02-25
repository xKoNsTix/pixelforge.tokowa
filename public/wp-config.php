<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als „wp-config.php“ mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * Diese Datei beinhaltet diese Einstellungen:
 *
 * * Datenbank-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Datenbank-Einstellungen - Diese Zugangsdaten bekommst du von deinem Webhoster. ** //
/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define( 'DB_NAME', 'pixelforge' );

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem Datenbank-Benutzernamen.
 */
define( 'DB_USER', 'pixelforge' );

/**
 * Ersetze passwort_hier_einfuegen mit deinem Datenbank-Passwort.
 */
define( 'DB_PASSWORD', 'jacksparrow' );

/**
 * Ersetze localhost mit der Datenbank-Serveradresse.
 */
define( 'DB_HOST', 'localhost' );

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 *
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',_z!zY[DZy;esW5PuRnI}J*246R+XS|9/oViOKCov 2e|E(5G([2wt=~?D[z|x;$' );
define( 'SECURE_AUTH_KEY',  '`p~l5kEyt`Y*^_2F>-y)f`nCONL&B]`Vu1n<t7i4<Y#c-u<.rE3 rL{l+GvaX&;7' );
define( 'LOGGED_IN_KEY',    'H>BV`BckBp`g&s^wQ~8,85Q1PnvpI-vpo%*a>v)MCTlEqc-wguL_i.EWjoA<Bc[d' );
define( 'NONCE_KEY',        '#cUI`8|+<(.Br5LI0poA>v}[V-b+w3zm%TEZX2X!i^ZrDX]>(lqn_*z{<O{[Irl&' );
define( 'AUTH_SALT',        'n+9.~1,xPrj9Ysa-MHxtd6#8K}<pZ)OSj?t{OK#YZRuK,R-SH8P~)p950Rzy)X4i' );
define( 'SECURE_AUTH_SALT', 'O=mG(Xr1xgv<{?)TaU5C##| kE[xW%$YKY?XF(g4[Y>)?HZh-1-yUD;k.z*]&N?m' );
define( 'LOGGED_IN_SALT',   'BFOak>HV5d<%dcnpJpKqb~z+^vs>r0z<@X6w*f(>,@>Z[sZo;/D<`n . I[zS37K' );
define( 'NONCE_SALT',       '|AeLlMlxvQBnA  q*(L/JZwW[b4Bb~ <b^hSz]Y&TQfo*[yserzLvW*Uyzko&l<<' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Füge individuelle Werte zwischen dieser Zeile und der „Schluss mit dem Bearbeiten“ Zeile ein. */



/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
