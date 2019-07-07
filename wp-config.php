<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wp_ctv' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '123456' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`xPZIV1xzUEk:}QgMZKTLAm6AJ@>g#$)$5X-- Uuva@An]Cm9ln18Osf}g,8],xS' );
define( 'SECURE_AUTH_KEY',  'Ywnt1-OGN-_+|@].!Ads$j&R>%}8Grcww5!^sofLO{08qEF#uy&h[EM,+fg92$;Y' );
define( 'LOGGED_IN_KEY',    '2:+>LsNNUCLvY5zqwV%w$cWqC:F=uz-y>Jx;k+G<O*B_TTlC~-_D-S?)B<5!(9!8' );
define( 'NONCE_KEY',        '00{xBzDF|944fnax|Emb;Y[$%1L/^N-cB.,bN8h=&TQq3Wl/r{&XMx^cxIwFNUln' );
define( 'AUTH_SALT',        '8{SqMm|?>o]RWFo8`j(?QLrh>}W7$]&_NhxOm^J~Q5ZMcpNjcx$pcvZe@fdPd9u8' );
define( 'SECURE_AUTH_SALT', 'ZAU{ovC`/a,`..Gn$U`JSU_A/5/mq~z{VfJJ.rgAGGcN rZk4s 4[=_U}U<Dy#t~' );
define( 'LOGGED_IN_SALT',   'GjEkY4Rq=@L9Cy@MoXW1eP8>_{ar;!UO228aI-Pu8]a8l*Pb*g%ellQpYvbZ)&Ho' );
define( 'NONCE_SALT',       '2Qf10d|%F6@,5U&N1HTu^&3r2]s>v`>,n8F+X>S|{6hYxBBQ;_En>KPS#$_CBD:H' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
