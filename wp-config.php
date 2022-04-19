<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'stolemyidea' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'root' );

/** MySQL sunucusu */
define( 'DB_HOST', 'mariadb' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xu}bF-zloVcI|bIl#wqHx}-7j.PR]2|pv WCin}Il75}#B0$ n#%yIW|c&?j1? 7' );
define( 'SECURE_AUTH_KEY',  'gcmS/>/X:lEFE&cb5~;TKZ;O*^y=T]n*$Jm{U)/r(2MK#miZ-kjH93;62=4q2Y]B' );
define( 'LOGGED_IN_KEY',    'n,9 ]9oy_M,@IY}6Ssktpx oRw#^qfOp{c`+7P3Pip)2JMzD%9x+0 }]|V[ji@ih' );
define( 'NONCE_KEY',        'QQ0<JKU?49s$nCGey/V:a#+72Y.%;)u5>x,jV{hf94dUwbQ.w1}C_P%5Wi>kIl>0' );
define( 'AUTH_SALT',        'Bdm)Q<2|xc@~0g2L||C+<d5pldl(v  $76:lwg$?Vcs!zMWFc KlE]>FcZ>+kcF;' );
define( 'SECURE_AUTH_SALT', '-7TRBdijHZ|,~Oi_J@Ftcs<j);omh{rff`#1.YB~g8))1*:br=<r})`:&H*vjTCU' );
define( 'LOGGED_IN_SALT',   'K~c.GmscV-sb25zM}sVjM&[9]UXgFm_/WFUOxU_L7o.4D;cvm:7?iS#%7|~h=[3#' );
define( 'NONCE_SALT',       'Z^:l~9;5P,5Cb=cMy+ubO0g#40(OJ=G?IR&L,g:qLhQFXI[c1S9Ye+Cnw7|E&D#i' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';