<?php
global $insubdominioid;
global $insubdominiourl;
global $httprotocol;
global $db_con;
global $simple_url;

$define_query = mysqli_query( $db_con, "SELECT * FROM cidades WHERE id = '$insubdominioid' LIMIT 1");
$define_data = mysqli_fetch_array( $define_query );

$app['url'] = $httprotocol.$insubdominiourl.".".$simple_url;

$app['type'] = "2";
$app['id'] = $define_data['id'];

$app['title'] = htmlclean( $define_data['nome'] );
$app['uf'] = htmlclean( ucfirst( strtolower( data_info( "estados", $define_data['estado'], "uf" ) ) ) );
if( strlen( $app['title'] ) < 10 ) {
	$app['cidade_message'] = "Você está em ";
} else {
	$app['cidade_message'] = "";
}
$app['estado'] = htmlclean( data_info( "estados", $define_data['estado'], "nome" ) );
$app['avatar'] = $app['url']."/_core/_cdn/img/favicon.png";
$app['logo'] = $app['url']."/_core/_cdn/img/logo.png";

$app['contato_whatsapp'] = "https://api.whatsapp.com/send?phone=5581998562254&text=Olá preciso de ajuda!";
$app['contato_email'] = "contato@jacataloguei.com.br";
$app['contato_facebook'] = "https://facebook.com/jacatalogueiguei";
$app['contato_instagram'] = "https://instagram.com/jacataloguei";
$app['endereco_completo'] = "jacataloguei! - TODOS OS DIREITOS RESERVADOS!";

$app['categoria'] = mysqli_real_escape_string( $db_con, $_GET['categoria'] );

setcookie( 'cidade', $app['id'], (time() + (120 * 24 * 3600)), "/", ".".$simple_url);

?>