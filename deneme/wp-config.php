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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\deneme\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wordpressdeneme' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'kLGTz2ClMFLr+$=gr])7d gXtK6y9DglF!Eo;bigbz!j<su4f2U.wUu6-l9I(a]A' );
define( 'SECURE_AUTH_KEY',  '/8t7dN=^Xr)%^<O|30Y~Ii-7m8kAk$e3z;CZ &LN(nH.,$BU5j!u( `=Uy.Ru[.l' );
define( 'LOGGED_IN_KEY',    '=0[^y0uA0a.rx6,t@[T>[d5Itsx?I:h|u.QS)a0]mk$a$P=6qq6?Up]luE9@}CL<' );
define( 'NONCE_KEY',        'uIX<LO2H5%]+BJFt`v[s-&yNfi^fn`7Ol8aEK9;ICk2<rVsh$N$/JCxsjLR*m#7]' );
define( 'AUTH_SALT',        '{*+2>Xi:e}lK09:K77R*>d0Zm~<##F7+-;HB{bdv~j8nY*&?5<I|X#~7PcYyM(u_' );
define( 'SECURE_AUTH_SALT', 'QR}_5bdwk5u[Gznk.>PNyGVpbZ>WFz.mlf]+hF[3gOdMdp0Mr]]?}*16FvPXf4a;' );
define( 'LOGGED_IN_SALT',   '41Hk;uXc)WlT3!dZ]7YA]znRo!>hfEV>[TAs!vk*Fekg(xo bIb8myoM8_ikpCz[' );
define( 'NONCE_SALT',       ']aE.zl}<ls!5#:Ovc&oB*6.C/^+bvjK&:1X<,F9!Iaf`CONUa%16(`VrPKT8BDE<' );

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
define( 'WP_DEBUG', false );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';