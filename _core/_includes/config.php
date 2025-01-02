<?php

set_time_limit(90);

ob_start();

// Debug

error_reporting(0);

//error_reporting(E_ALL);

// Time

date_default_timezone_set('America/Sao_Paulo');

// Url

$httprotocol = "https://";

if (!$_SERVER['HTTPS']) {
    $fixprotocol = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: " . $fixprotocol);
}

$system_url = $httprotocol . "conheca.jacataloguei.com.br/administracao";

$panel_url = $httprotocol . "conheca.jacataloguei.com.br/painel";

$admin_url = $httprotocol . "conheca.jacataloguei.com.br/administracao";

$afiliado_url = $httprotocol . "conheca.jacataloguei.com.br/afiliado";

$just_url = $httprotocol . "conheca.jacataloguei.com.br";

$app_url = $httprotocol . "conheca.jacataloguei.com.br/app";

$simple_url = "conheca.jacataloguei.com.br";

// Title

$seo_title = "conheca.jacataloguei.com.br!";

// Db

$db_host = "localhost";
$db_user = "jaca1078_marketplace";
$db_pass = "Jacataloguei2024";
$db_name = "jaca1078_cardapio";

// SMTP

$smtp_name = "conheca.jacataloguei.com.br";
$smtp_user = "notificacoes@conheca.jacataloguei.com.br";
$smtp_pass = "1A*7qyYJD2[i8j";

// Manunten

$manutencao = false;

if ($manutencao) {
    include("manutencao.php");
    die;
}

// Includes

include("functions.php");

// Tokens

// Recaptcha
// Gerar em: https://www.google.com/recaptcha/admin/
$recaptcha_sitekey = "6Lfk2KYqAAAAAGc1nHnhaxOkf-nv6jQCMip1JhdX";
$recaptcha_secretkey = "6Lfk2KYqAAAAAKEEZJfofbTaEffHR3HBsFMhjBWM";

// External token Utilizado para receber os callbacks do mercado pago pro sistema, pode manter padr
$external_token = "6LfBMLcUAAAAALxKYfylrPMhMMg35IskTG4R7jYw-sucessoshow";
// Mercado pago
// Gerar em: https://www.mercadopago.com.br/developers/panel/credentials
$mp_sandbox = false;

if ($mp_sandbox == true) {
    $mp_public_key = "";
    $mp_acess_token = "";
} else {
    $mp_public_key = "";
    $mp_acess_token = "";
    $mp_client_id = "";
    $mp_client_secret = "";
}

// Plano padr (id)

$plano_default = "5";

// Root path

$rootpath = $_SERVER["DOCUMENT_ROOT"];

// Images

$image_max_width = 1000;
$image_max_height = 1000;
$gallery_max_files  = 10;

// Global header and footer

$system_header = "";
$system_footer = "";

// Keep Alive

if ($_SESSION['user']['logged'] == "1" && strlen($_SESSION['user']['keepalive']) >= 10 && $_SESSION['user']['keepalive'] != $_COOKIE['keepalive']) {
    setcookie('keepalive', "kill", time() - 3600);
    if (strlen($_SESSION['user']['keepalive']) >= 10) {
        setcookie('keepalive', $_SESSION['user']['keepalive'], (time() + (120 * 24 * 3600)));
    }
}

$keepalive = $_COOKIE['keepalive'];

if ($_SESSION['user']['logged'] != "1" && strlen($keepalive) >= 10) {
    make_login($keepalive, "", "keepalive", "2");
}

?>
