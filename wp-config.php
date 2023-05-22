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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wpru' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'Zk!(VZbR4qFfc$9:9!fulxFD4C}}mq U$JG,-3-=izlXbZ_O86/FO&|BE~1Jq>;x' );
define( 'SECURE_AUTH_KEY',  ' :Y%&^L=(76jzS?60CO~J()Q[h5T(;wa*)H3PNaq!Q:RAP;t!piS?L!h[oc{JJlC' );
define( 'LOGGED_IN_KEY',    '.7LEgnOq2D~*=rKop!}$0R{C)OT$#M@sS`cuLPa#!<Owe77SN~Q+iJyy4>M-QUoQ' );
define( 'NONCE_KEY',        'M2fdQBgW|7E0nf2h2veq}he>oT*$vC};5)/3BHyb{3QB/L~7$m,{Ny8]Zg6mZuc&' );
define( 'AUTH_SALT',        '=sW2OzFgqR6.O?bRqSw5g4,b?g_e}Jma#-F5Pk-e%PW*@*&e^ex&w#ZZ9Le<mgNj' );
define( 'SECURE_AUTH_SALT', '!%xu/h@pdNjlVsp1KY{`iCH4eBVBR7E}0zO%1alx$[9uP~<AgSu#z*:M,7{AW@46' );
define( 'LOGGED_IN_SALT',   ';(?~6xO@2-^m&;lVR^o*)(2Up_1T3PE4;)oDJv(`:&^HNk7cWGXy-9CILa(FaO7q' );
define( 'NONCE_SALT',       ']1OfTG|ROLrnd>mT_U5YpXn>{~n>dG62kqbi_nSE6_<{>)G!y)9Ug)e%R/I@|V>}' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_wpru_';

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
