<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-two' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h$|V.wnREz#%1HS7;=?lHJWLa(0yl:oD| T,Q@3`[>Kl8}R`3a69&Z`50QRxo)/;' );
define( 'SECURE_AUTH_KEY',  'MBdWj11_&BdmY9(>E?[>D*.]e;:szr>2AXGXx|%xqYlR6F=55dqpou_^-E0bO[:=' );
define( 'LOGGED_IN_KEY',    '8@8o#BV{D+9ig4d%k3dr X`=a|-47}*iE[{VS:d1a4J1<7Bo?8~)FPK|s+5UcdUz' );
define( 'NONCE_KEY',        'F)c*rpX!z*8dc0J~Z-#:(e~b0vLfmmJT4<asI>4 oW>kGb+n!oSN9fBCZJ$l$.Fy' );
define( 'AUTH_SALT',        '`M723L`nA; aJU0t@S-igoK#5SbTY3oy|W;tH BpU_?GD@O%p6ZQ7a*pXimuQrK%' );
define( 'SECURE_AUTH_SALT', 'mw8`Q4piQ )]RPbn5az`m;_3k;_[WMa5EbHYq9x@;SEw+:6Brk]HX3WO$#2[ ***' );
define( 'LOGGED_IN_SALT',   '$k3+K23h3CnH@-2;auO+51z?=!wxU-?<7xdVy $p;v=w@^RqLjbrci1Xg6<c Tr-' );
define( 'NONCE_SALT',       'Ry^z1)cjHk2cS#eS|vvrgiNzX6ctghE;^_HoDS^Yg,Eo<g~wAu:^/8d6Npyh_~|e' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
