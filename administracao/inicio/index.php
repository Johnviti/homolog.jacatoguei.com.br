<?php
// CORE
include('../../_core/_includes/config.php');
// RESTRICT
restrict('1');
// SEO
$seo_subtitle = "Início";
$seo_description = "";
$seo_keywords = "";
// HEADER
$system_header .= "";
include('../_layout/head.php');
include('../_layout/top.php');
include('../_layout/sidebars.php');
include('../_layout/modal.php');

//pega estado
$queryestados = mysqli_query( $db_con, "SELECT * FROM estados WHERE id = $estop");
$dataest = mysqli_fetch_array( $queryestados );

//pega cidade
$querycidades = mysqli_query( $db_con, "SELECT * FROM cidades WHERE id = $cidop");
$datacid = mysqli_fetch_array( $querycidades );


?>

<div class="middle minfit bg-gray">

	<div class="container">

		<div class="row">

		

		</div>

		<div class="lista-menus">

			<div class="row">
                 
				<div class="col-md-4">
					<div class="lista-menus-menu">
						<a class="bt" href="<?php admin_url(); ?>/usuarios">
							<i class="lni lni-radio-button"></i>
							<span>Usuários</span>
							<strong><i class="lni lni-chevron-right text-center"></i></strong>
							<div class="clear"></div>
						</a>
					</div>
				</div>
				

				<div class="col-md-4">
					<div class="lista-menus-menu">
						<a class="bt" href="<?php admin_url(); ?>/subdominios">
							<i class="lni lni-domain"></i>
							<span>Subdominios</span>
							<strong><i class="lni lni-chevron-right text-center"></i></strong>
							<div class="clear"></div>
						</a>
					</div>
				</div>
                
                <div class="col-md-4">
					<div class="lista-menus-menu">
						<a class="bt" href="<?php admin_url(); ?>/segmentos">
							<i class="lni lni-domain"></i>
							<span>Segmentos</span>
							<strong><i class="lni lni-chevron-right text-center"></i></strong>
							<div class="clear"></div>
						</a>
					</div>
				</div>
				 
                
				<div class="col-md-4">
					<div class="lista-menus-menu">
						<a class="bt" href="<?php admin_url(); ?>/estabelecimentos">
							<i class="lni lni-home"></i>
							<span>Estabelecimentos</span>
							<strong><i class="lni lni-chevron-right text-center"></i></strong>
							<div class="clear"></div>
						</a>
					</div>
				</div>
                
				<div class="col-md-4">
					<div class="lista-menus-menu">
						<a class="bt" href="<?php admin_url(); ?>/assinaturas">
							<i class="lni lni-star"></i>
							<span>Assinaturas</span>
							<strong><i class="lni lni-chevron-right text-center"></i></strong>
							<div class="clear"></div>
						</a>
					</div>
				</div>  
				
				<div class="col-md-4">
					<div class="lista-menus-menu">
						<a class="bt" href="<?php admin_url(); ?>/vouchers">
							<i class="lni lni-ticket-alt"></i>
							<span>Vouchers</span>
							<strong><i class="lni lni-chevron-right text-center"></i></strong>
							<div class="clear"></div>
						</a>
					</div>
				</div>
                 
				<div class="col-md-4">
					<div class="lista-menus-menu">
						<a class="bt" href="<?php admin_url(); ?>/planos">
							<i class="lni lni-list"></i>
							<span>Planos</span>
							<strong><i class="lni lni-chevron-right text-center"></i></strong>
							<div class="clear"></div>
						</a>
					</div>
				</div>
                 
			</div>

		</div>

	</div>

</div>

<?php 
// FOOTER
$system_footer .= "";
include('../_layout/rdp.php');
include('../_layout/footer.php');
?>