<?php
//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Listado De Productos";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
include("inc/nav.php");
?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs["Productos"] = "";
		include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">

		<!-- row -->
		<div class="row">
			
			<!-- col -->
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark">
					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa  fa-tag"></i> 
						Lista de Productos
					<span>
						><!--Aqui va el filtro-->
					</span>
				</h1>
			</div>
			<!-- end col -->
			
			<!-- right side of the page with the sparkline graphs -->
			<!-- col -->
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8 text-right">
				
				<a href="javascript:void(0);" class="btn btn-default shop-btn">
					<i class="fa fa-3x fa-shopping-cart"></i>
					<span class="air air-top-right label-danger txt-color-white padding-5">0</span>
				</a>
			</div>
			<!-- end col -->
			
			</div>
		</div>
		
		<!-- end row -->
		<section id="widget-grid" class="">
			<div class="row">
				<div class="col-sm-8 col-md-8 col-lg-8">
						<div class="btn-group">
								<a class="btn btn-info" href="javascript:void(0);">Almacen DuNord</a>
								<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><span class="caret"></span></a>
								<ul class="dropdown-menu">
								<li>
									<a href="javascript:void(0);">Action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Another action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0);">Separated link</a>
								</li>
							</ul>
						</div><!-- /btn-group --></td>
						<div class="btn-group">
								<a class="btn btn-info" href="javascript:void(0);">Precio</a>
								<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><span class="caret"></span></a>
								<ul class="dropdown-menu">
								<li>
									<a href="javascript:void(0);">Action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Another action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0);">Separated link</a>
								</li>
							</ul>
						</div><!-- /btn-group --></td>
						<div class="btn-group">
								<a class="btn btn-info" href="javascript:void(0);">Ordenar Por:</a>
								<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><span class="caret"></span></a>
								<ul class="dropdown-menu">
								<li>
									<a href="javascript:void(0);">Action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Another action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0);">Separated link</a>
								</li>
							</ul>
						</div><!-- /btn-group --></td>
					<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="input-group">
								<input class="form-control input-md" type="text" id="fa-icon-search" placeholder="Buscar un producto...">
								<span class="input-group-addon"><i class="fa fa-fw fa-md fa-search"></i></span>
					</div>
				</div>
			</div>
		</section>
		<!--
			The ID "widget-grid" will start to initialize all widgets below 
			You do not need to use widgets if you dont want to. Simply remove 
			the <section></section> and you can use wells or panels instead 
			-->

		<!-- widget grid -->
		<section id="widget-grid" class="">

			<!-- row -->

			<div class="row">
				<? 
				$sql="SELECT 	`IdProducto`, 
				`producto`.`Nombre` as ProductoNombre, 
				`Archivo`, 
				`Precio`, 
				`Descripcion`, 
				`categoria`.`Nombre` as CategoriaNombre, 
				`Estado`
				 
				FROM 
				`producto`
				JOIN  `categoria`
				ON (`categoria`.`IdCategoria`=`producto`.`IdCategoria`)";
				$micon->consulta($sql);
				while($row=$micon->campoconsultaA()){
					$Images="images/productos/".$row[IdProducto]."/".$row[Archivo];
					
				?>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<!-- product -->
						<div class="product-content product-wrap clearfix">
							<div class="row">
									<div class="col-md-5 col-sm-12 col-xs-12">
										<div class="product-image"> 
											<img src="<?=$Images?>" alt="194x228" class="img-responsive">
											<?
											switch ($row[Estado]) {
												case "E":
													$MiTag="";
													$MiTexto="";
													break;
												case "O":
													$MiTag="hot";
													$MiTexto="Oferta";
													break;
												case "N":
													$MiTag="sale";
													$MiTexto="Nuevo";
													break;
											}
											?> 
											<span class="tag2 <?=$MiTag?>">
												<?=$MiTexto?>
											</span> 
										</div>
									</div>
									<div class="col-md-7 col-sm-12 col-xs-12">
									<div class="product-deatil">
											<h5 class="name">
												<a href="#">
													<?=$row[ProductoNombre]?> <span><?=$row[CategoriaNombre]?></span>
												</a>
											</h5>
											<p class="price-container">
												<span><?="$".$row[Precio]?></span>
											</p>
											<span class="tag1"></span> 
									</div>
									<div class="description">
											<p><?=$row[Descripcion]?></p>
									</div>
									<div class="description">
										<td><a class="btn btn-primary" href="products-detail.php?productid=<?=$row[IdProducto]?>"><i class="fa fa-shopping-cart"></i> Ordenar </a></td><td>
									</div>
								</div>
							</div>
						</div>
						<!-- end product -->
					</div>
				<?}?>
				<div class="col-sm-12 text-center">
					<a href="javascript:void(0);" class="btn btn-primary btn-lg">Load more <i class="fa fa-arrow-down"></i></a>
				</div>

			</div>

			<!-- end row -->

		</section>
		<!-- end widget grid -->

	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
	// include page footer
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

<!-- PAGE RELATED PLUGIN(S) 
<script src="<?php echo ASSETS_URL; ?>/js/plugin/YOURJS.js"></script>-->

<script>

	$(document).ready(function() {
		/* DO NOT REMOVE : GLOBAL FUNCTIONS!
		 *
		 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
		 *
		 * // activate tooltips
		 * $("[rel=tooltip]").tooltip();
		 *
		 * // activate popovers
		 * $("[rel=popover]").popover();
		 *
		 * // activate popovers with hover states
		 * $("[rel=popover-hover]").popover({ trigger: "hover" });
		 *
		 * // activate inline charts
		 * runAllCharts();
		 *
		 * // setup widgets
		 * setup_widgets_desktop();
		 *
		 * // run form elements
		 * runAllForms();
		 *
		 ********************************
		 *
		 * pageSetUp() is needed whenever you load a page.
		 * It initializes and checks for all basic elements of the page
		 * and makes rendering easier.
		 *
		 */
		
		 pageSetUp();
		 
		/*
		 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
		 * eg alert("my home function");
		 * 
		 * var pagefunction = function() {
		 *   ...
		 * }
		 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
		 * 
		 * TO LOAD A SCRIPT:
		 * var pagefunction = function (){ 
		 *  loadScript(".../plugin.js", run_after_loaded);	
		 * }
		 * 
		 * OR
		 * 
		 * loadScript(".../plugin.js", run_after_loaded);
		 */
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>