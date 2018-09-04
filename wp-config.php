<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'fazen267_farm');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DRNJezSS<vcVwHq!Hcn+4&qq[v&}.<u2wbanP68>eF:42;V11+Q<P$Id#eo!BwcP');
define('SECURE_AUTH_KEY',  'IK%s=.`fic0wz]f-j+3w-0oN&3f@LXZ MT>e7AlY.H(s;,f(1QO]/2RHN|7usfE;');
define('LOGGED_IN_KEY',    'v!*2!vq*jl}* 9]+Boq,(bd#uJz/F`cC}2}guOf{`2H]X8r`b2j3UZ~Nj7]]zHS+');
define('NONCE_KEY',        'W6P91R:@JW!,/8~=r2PQk2DX1|68u ;~Kp6o.~+F4CNRF5b5pzq`_)yLSUPO%]bf');
define('AUTH_SALT',        'Y@FtsjE!%jJsk9Z-P>kEv~tmn9-6hBGd2unSLGy?#=B.@ %/fl ^0EOUqp>QN%UZ');
define('SECURE_AUTH_SALT', 'D6k2`gg^_s+ho{aH@mVh?.*?j4gZiU^eg(%Z:>2QEo igFWxR.Og~+QB?UHE`3VM');
define('LOGGED_IN_SALT',   '4c/YvF@c@3rcq*-_~L6|N==%te~YD{LYk)Dri~~,n9i@/t3kTz#?Uvl5p7cQj!`L');
define('NONCE_SALT',       'k;>m1#,|3Hi5x-Z)8`?337vE6rx6^Kv(iCLP8&XeO.Ay,=K-4M3s{FoWX|{8(B[j');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
