<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Detalle Del Producto";

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
					<i class="fa-fw fa fa-home"></i> 
						E-commerce
					<span>>  
						Products View
					</span>
				</h1>
			</div>
			<!-- end col -->
			
			<!-- right side of the page with the sparkline graphs -->
			<!-- col -->
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8 text-right">
				
				<a href="javascript:void(0);" class="btn btn-default shop-btn">
					<i class="fa fa-3x fa-shopping-cart"></i>
					<span class="air air-top-right label-danger txt-color-white padding-5">10</span>
				</a>
				
			</div>
			<!-- end col -->
			
		</div>
		<!-- end row -->

		<!--
			The ID "widget-grid" will start to initialize all widgets below 
			You do not need to use widgets if you dont want to. Simply remove 
			the <section></section> and you can use wells or panels instead 
			-->

		<!-- widget grid -->
		<section id="widget-grid" class="">

			<!-- row -->

			<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-12">
					<!-- product -->
					<div class="product-content product-wrap clearfix product-deatil">
						<?
						$sql="SELECT 	`IdProducto`, 
						`producto`.`Nombre` as ProductoNombre, 
						`Archivo`,`Archivo1`,`Archivo2`, 
						`Precio`, 
						`Descripcion`, 
						`categoria`.`Nombre` as CategoriaNombre, 
						`Estado`
						 
						FROM 
						`producto`
						JOIN  `categoria`
						ON (`categoria`.`IdCategoria`=`producto`.`IdCategoria`)
						WHERE `IdProducto`=$_GET[productid]";
						$micon->consulta($sql);
						$row=$micon->campoconsultaA();
						?>
						<?
						$sql1="SELECT `Nombre`				 
						FROM 
						`almacen`
						JOIN  `almacenproducto`
						ON (`almacenproducto`.`IdAlmacen`=`almacen`.`IdAlmacen`)
						WHERE `IdProducto`=$row[IdProducto]";
						$micon1->consulta($sql1);
						$row1=$micon1->campoconsultaA();
						?>
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<div id="myCarousel-2" class="carousel fade">
										<ol class="carousel-indicators">
											<li data-target="#myCarousel-2" data-slide-to="0" class=""></li>
											<?if($row[Archivo1]!=$null){?>
											<li data-target="#myCarousel-2" data-slide-to="1" class="active"></li>
											<?}?>
											<?if($row[Archivo2]!=$null){?>
											<li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
											<?}?>
										</ol>
									<div class="carousel-inner">
											<!-- Slide 1 -->
											<div class="item active">
												<?$Images="images/productos/".$row[IdProducto]."/".$row[Archivo];?>
												<img src=<?=$Images?> alt="">
											</div>
											<!-- Slide 2 -->
											<?if($row[Archivo1]!=$null){
												$Images2="images/productos/".$row[IdProducto]."/".$row[Archivo1];
											?>
												<div class="item">
													<img src=<?=$Images2?> alt="">
												</div>
											<?}?>
											<!-- Slide 3 -->
											<?if($row[Archivo2]!=$null){
												$Images3="images/productos/".$row[IdProducto]."/".$row[Archivo2];
											?>
												<div class="item">
													<img src=<?=$Images3?> alt="">
												</div>
											<?}?>
										</div>
										<a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
										<a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
										</div>
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
							
								<h2 class="name">
									<?=$row[ProductoNombre]?> 
									<small>Product by <a href="javascript:void(0);"><?=$row1[Nombre]?></a></small>
									<i class="fa fa-star fa-2x text-primary"></i>
									<i class="fa fa-star fa-2x text-primary"></i>
									<i class="fa fa-star fa-2x text-primary"></i>
									<i class="fa fa-star fa-2x text-primary"></i>
									<i class="fa fa-star fa-2x text-muted"></i>
									<span class="fa fa-2x"><h5>(109) Votes</h5></span>	
									
									<a href="javascript:void(0);">109 customer reviews</a>
		 
								</h2>
								<hr>
								<h3 class="price-container">
									<?="$".$row[Precio]?>
									<small>*Incluido IVA</small>
								</h3>
								<hr>
								<div class="description description-tabs">


									<ul id="myTab" class="nav nav-pills">
										<li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">Descripcion Del Producto </a></li>
										<li class=""><a href="#specifications" data-toggle="tab">Categoria</a></li>
										<li class=""><a href="#reviews" data-toggle="tab">Reviews</a></li>
									</ul>
									<div id="myTabContent" class="tab-content">
										<div class="tab-pane fade active in" id="more-information">
											<br>
											<dt><?=$row[Descripcion]?></dt>
										</div>
										<div class="tab-pane fade" id="specifications">
											<br>
											<dl class="">
													<dt><?=$row[CategoriaNombre]?></dt>
			                                </dl>
										</div>
										<div class="tab-pane fade" id="reviews">
											<br>
											<form method="post" class="well padding-bottom-10" onsubmit="return false;">
												<textarea rows="2" class="form-control" placeholder="Write a review"></textarea>
												<div class="margin-top-10">
													<button type="submit" class="btn btn-sm btn-primary pull-right">
														Submit Review
													</button>
													<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Location"><i class="fa fa-location-arrow"></i></a>
													<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Voice"><i class="fa fa-microphone"></i></a>
													<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Photo"><i class="fa fa-camera"></i></a>
													<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add File"><i class="fa fa-file"></i></a>
												</div>
											</form>

											<div class="chat-body no-padding profile-message">
												<ul>
													<li class="message">
														<img src="img/avatars/1.png" class="online">
														<span class="message-text"> 
															<a href="javascript:void(0);" class="username">
																Alisha Molly 
																<span class="badge">Purchase Verified</span> 
																<span class="pull-right">
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-muted"></i>
																</span>
															</a> 
															
															
															Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very image let unto fowl isn't in blessed fill life yielding above all moved 
														</span>
														<ul class="list-inline font-xs">
															<li>
																<a href="javascript:void(0);" class="text-info"><i class="fa fa-thumbs-up"></i> This was helpful (22)</a>
															</li>
															<li class="pull-right">
																<small class="text-muted pull-right ultra-light"> Posted 1 year ago </small>
															</li>
														</ul>
													</li>
													<li class="message">
														<img src="img/avatars/2.png" class="online">
														<span class="message-text"> 
															<a href="javascript:void(0);" class="username">
																Aragon Zarko 
																<span class="badge">Purchase Verified</span> 
																<span class="pull-right">
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																</span>
															</a> 
															
															
															Excellent product, love it!
														</span>
														<ul class="list-inline font-xs">
															<li>
																<a href="javascript:void(0);" class="text-info"><i class="fa fa-thumbs-up"></i> This was helpful (22)</a>
															</li>
															<li class="pull-right">
																<small class="text-muted pull-right ultra-light"> Posted 1 year ago </small>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
							

								</div>
								<hr>
								<div class="row">
									<div class="col-sm-12 col-md-6 col-lg-6">
										
											<a href="javascript:void(0);" class="btn btn-success btn-lg">Agregar Al Carrito ($<?=$row[Precio]?>)</a>
										
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6">
										<div class="btn-group pull-right">
				                            <button class="btn btn-white btn-default"><i class="fa fa-star"></i> Add to wishlist </button>
				                            <button class="btn btn-white btn-default"><i class="fa fa-envelope"></i> Contact Seller</button>
				                        </div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<!-- end product -->
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