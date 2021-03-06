<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'wpadmin' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'password' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Lb?=PLpsQM-E.3yk0O-kM#Y]`}1+fIXY>}Xd>2{,aPfu%I+-WvI).9,qn{xc!/m7');
define('SECURE_AUTH_KEY',  '{6cO-^OzU~gR-M5dMM2&l <=}a5+Iu S)h]pJ1r*G!pP@s(,-I#^@ntXbh+]ZvMv');
define('LOGGED_IN_KEY',    'l6zkb9>.|U$2.5W_~FE/-$)qa0q0W>$oidd%l`<*p5J@tGX1{-L-Er8qT}W$SmoR');
define('NONCE_KEY',        'O<-5)qE-&Ff?p,s|w{}Lq}Uu!.S@n<-1zlw_Sa+mg]va1vzl]>M9U~h-G8}<uAWV');
define('AUTH_SALT',        'l-`tB%5v?dV|n>-=7]&E)HDtYc9VX?Gpz9LUdDg#dknUbZm+=eS,11xS-TdnP`>2');
define('SECURE_AUTH_SALT', 'nT86dN7y<UY95Q[J$qHvmD)F/;k52m3@*n4=*h%C-TD+KYu+1FcJ+n=dv9Tjd-fs');
define('LOGGED_IN_SALT',   ':X5IZL)B}^%p3-#G<hMR8qS{Nm^ful?{P],w3/P, B^oES~;Xu^;@C)U_T&*aZ-F');
define('NONCE_SALT',       '.f$Ra-@XnvGnu>$E8(,l<^{/?9ry,TMn30NZ+h5)DCx]_@1Ky7Za[OP5e3{yp66E');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
