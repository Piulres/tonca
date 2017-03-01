<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'tonca');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^a9+;6=mh=~]%Sbp?P/L%NxI+Qan^4{jB}}XF;^V&JWV7TlNfu[OkE_DBjIT^,+u');
define('SECURE_AUTH_KEY',  'P@s4;;^5x]!hL3N/zD3b!;`B3di4elM;_Jy$ZNKqeXy3}ytcA}]gTo=-)|lDnF-{');
define('LOGGED_IN_KEY',    'MaAOb[f6m):KGKSNWYuj!h=TFRE}s=g997BHFw?hbQKhtQlO:2@wHt,?h!SPC&X<');
define('NONCE_KEY',        '!|yZ<n|kz7#l.D7Y^dAOZ}Z=d{d+bg[Gwdc(HJwx04Rpo>5 }qA14;F{R#7R<88f');
define('AUTH_SALT',        'sIvG#LKvk-5q-41ZpS+E67hl})e:s[xRz9o&n3zCG${mJu][6:b# ^Xs$u!!}S%B');
define('SECURE_AUTH_SALT', 'WRhL=1EC/[|bqW7H%^&54@tOI.pS xq-<pbm_bBJurC!bF^X>Y&f8_!/bOad)dz;');
define('LOGGED_IN_SALT',   '.pe!qfSlK*U[D&$.-`2;!#^lIplFXWH5m&LS0G[V-ezi}46BW!8Kcusu1gplne@;');
define('NONCE_SALT',       'v&Vfgz1G@jxVHk)2/[3FRqc[| SM3mys?4[{Q~HPGGZB_,[MkL/KE^2JCOGk%z2s');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'custom_db';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
