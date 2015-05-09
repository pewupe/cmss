<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'wo');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'root');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2QBX,t,`54Q:!(,7l`yU3vr_DT~2qD2m1v--5N7aD@){FX[*8e^^8a9Bg.sP*F4=');
define('SECURE_AUTH_KEY',  'j0kHH6hOW?|#&F8&]##op&t(F6yg~S;gNGBqr.}76t(oOB7oT6y7wx 7`V|v{1P`');
define('LOGGED_IN_KEY',    'bnI-4( jkF%*}3#S#r3sVhqWwh0~8gaoP,,iu7+RK-[ .i]p0t|x5G.JY9qIweS-');
define('NONCE_KEY',        '/tsE(G)>MeoqASzfe3hW*y|]T!Y_pf:)V?/iCB1W-O];_AlhT8pn}.~DpTML%R5+');
define('AUTH_SALT',        '5}*-lsC*-qKFa!%Il!BZY[l&`DC$xy[(`e|@U@&iNNH+aqVpta~hspD y82UuA?+');
define('SECURE_AUTH_SALT', '-N#5}x.X&?9xI>+oX:BBl: :1yTz)CPt|(Tbc|G:nW/bfp((.ow+kW-g*a@VCt>)');
define('LOGGED_IN_SALT',   '5NJI5#Om My(Zf(l=p]1x+^BUFlaz5Mb$}z k8<lz`4YsGkFpdXK#9}jEJ[rktjI');
define('NONCE_SALT',       '!Cw{(e.j|$f:]qcROqu^+bNBa@u:CeaQjo+#Su~OR4H@&YTFE=^ +H%F/.D+9i^O');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');