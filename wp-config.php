<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'new_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'AdminLeo' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=*<?vKuQxry2|/M[;98oNXr[1v8>ev.i]b3x[wfB%q0)!D@1(Dtp0W)5+wym!/=H' );
define( 'SECURE_AUTH_KEY',  ']:uETuRqYU-#k(nvX3Ti4!9;9(L9pt2!Yy+h%S &AV>H33Ny>9kZ@qNJ5d8I*|G=' );
define( 'LOGGED_IN_KEY',    'N p_t/3^pnKf, p$`}=*h7O~{R Hfk-m}^Z`fNOJG&Mv6*(Y522[S}iJXg|k92m>' );
define( 'NONCE_KEY',        'yw-AE*#v1(OYEsslmBkl|b)vu|w5(roJDY%jO7f -pEkXh=~%.T~;r&Tq& N3qn ' );
define( 'AUTH_SALT',        'b4e*K9j0LZ?B$JRK%t9:?J|*Ab`mE[do2os{`%eFExAQQq!pvMko&M}3p?E1:8 f' );
define( 'SECURE_AUTH_SALT', '2*Dp9]N)hcTpvm2|dI%ysw}zU9cvJjyrL[*BrPAhP}X#SogvaEcwE2_WCZ]D_-bG' );
define( 'LOGGED_IN_SALT',   'QoGDi}Yn3=HFyC{:1q2@;^_6c[HR+r a>rxK^-cKl&%8:=z=(wP!v~33euZ~u#eZ' );
define( 'NONCE_SALT',       '0&4we%-*WwEEv3GLznp~(9mc1}+TgJ__K}3a>alOd:Q/}GdFt&!Fee}X.LV3#*fU' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
