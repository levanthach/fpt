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
define('DB_NAME', 'banhang');

/** Username của database */
define('DB_USER', 'banhang');

/** Mật khẩu của database */
define('DB_PASSWORD', 'banhang');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '}&xha($(`p~`xDm# hY>MB4k<D3?r:<26bpGTz%eK 5e<5@1&MS94GWx`cO7w]gO');
define('SECURE_AUTH_KEY',  ' e1#mr4<Vmv5Ju8Z(z8=ah]aT%x.]:4GN697[l#n< kkeo4JyI#QSEg8.cLo_uiy');
define('LOGGED_IN_KEY',    ']k_+Eq  }BzJG>yN{KUPH5}aL1Fp:z3Ko7c^N!*)#G(@*3yy%RD=xN%kgN#!?)w}');
define('NONCE_KEY',        'M:`]Ak/J91PL)rU@VZOMer@;!fHM8?dPw;Yp aY0 {t01{`P:@fv0T:@~$w=8t![');
define('AUTH_SALT',        ']t+d)SQo)E#7Q[(f`asx7PC)n1bjS%erj|DfpGTzj8A#K>~iG^aurZYv!Q[k.Vt~');
define('SECURE_AUTH_SALT', '>heB1t.1!t0cr(?$%)wg)1Lmd8=v<x0A[<szVlU)~Z^za[|BuN-aFy>5O4tRh[8:');
define('LOGGED_IN_SALT',   'E1NCz%:;t|``LRPF(aW(PGN5c_i@1Hw85z@a hCP:zfS8oRy*c@p4_9I:-4n`6Gw');
define('NONCE_SALT',       'm;UXyYpjc)&R8-c-4~z{gr**3l4]<Ui66sud6`5W$T@y8SU&ayH,Q6Kpj!qRQxcK');

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
define('WP_MEMORY_LIMIT', '128M');