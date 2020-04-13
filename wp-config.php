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
define( 'DB_NAME', 'GalinaWP' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'adminGALINA' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '(D9>9EU$oN^)C|k`)7O(K%h$82{Tw6C y{9IktbEz^#7wn9a_+8NPe<#^o,{[|VR' );
define( 'SECURE_AUTH_KEY',  'Rq!&K[5!*r)yNY>Fh!8aE/@T0*#%2yhP+msLxw#%2VDNLja2rIZXwQCP!ud}@}yK' );
define( 'LOGGED_IN_KEY',    'CG98}`H_&XU8UW}Q.Gf%NNJH/xV]7%:q#r+pOut7`yUOI79D<KV|FW3A wMI>3.)' );
define( 'NONCE_KEY',        '|!CJ{1Y^IX<-4E6`0Y~zg{FCXtSbfU=Ki=&VInO3tqc^}dE8/uotC[c$<=+X*QKd' );
define( 'AUTH_SALT',        'U%2o4Yg|Lwr_DD)aTS(Yn%)fsEIM=@9r-mpJ^vOJN0+bV7G/I,09roGJ0P%o@EPo' );
define( 'SECURE_AUTH_SALT', '4/R,CdS,,&JAlw>{f}MnnI_sd[f1nPV@f4$zwndJC9iO`e>B+h0E2Citj4-:V_T7' );
define( 'LOGGED_IN_SALT',   'f/-*9av2=8oZ:|;]A/0[^~ ORhi)wxGXT`CXIDn3@/uE{eUa7-KxD,~Ou7Ibm?XT' );
define( 'NONCE_SALT',       '`;[nQ%zcSPDs[{F-!%`~Mu1DW:U~+Y4HAhJ^kyKT7}lun]dm5),H;,sFiR&_**j ' );

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
