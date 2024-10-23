<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /index.php");
    exit();
}
?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="/assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="/assets/vendor/modernizr/modernizr.js"></script>

		<!-- Custom Styles -->
		<link rel="stylesheet" href="/roles/profesor/css/styles.css">
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php include_once 'resources/header.php'?>
			<!-- end: header -->

			<div class="inner-wrapper">

				<!-- start: sidebar -->
				<?php include_once 'resources/bar_lat.php' ?>
				<!-- end: sidebar -->



				<section id="main-content"> 
					<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="/index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
						<div class="row">
					</div>

					
					<!-- start: page -->
					<div class="row">
						
						<!-- My Profile -->
						<div class="col-xl-3 col-lg-6">
							<section class="panel panel-transparent">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Mi perfil</h2>
								</header>
								<div class="panel-body">
									<section class="panel panel-group">
										<header class="panel-heading bg-primary">

											<div class="widget-profile-info">
												<div class="profile-picture">
													<img src="/assets/images/!logged-user.jpg">
												</div>
												<div class="profile-info">
													<h4 class="name text-semibold"><?=$_SESSION['user_name']?></h4>
													<h5 class="role"><?=$_SESSION['user_rol']?></h5>
													<div class="profile-footer">
														<a href="/roles/profesor/user_profile.php">(Editar perfil)</a>
													</div>
												</div>
											</div>

										</header>
										<div id="accordion">
											<div class="panel panel-accordion panel-accordion-first">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
															<i class="fa fa-check"></i> Tareas
														</a>
													</h4>
												</div>
												<div id="collapse1One" class="accordion-body collapse in">
													<div class="panel-body">
														<ul class="widget-todo-list">
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" checked="" id="todoListItem1" class="todo-check">
																	<label class="todo-label" for="todoListItem1"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem2" class="todo-check">
																	<label class="todo-label" for="todoListItem2"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem3" class="todo-check">
																	<label class="todo-label" for="todoListItem3"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem4" class="todo-check">
																	<label class="todo-label" for="todoListItem4"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem5" class="todo-check">
																	<label class="todo-label" for="todoListItem5"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem6" class="todo-check">
																	<label class="todo-label" for="todoListItem6"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>
														</ul>
														<hr class="solid mt-sm mb-lg">
														<form method="get" class="form-horizontal form-bordered">
															<div class="form-group">
																<div class="col-sm-12">
																	<div class="input-group mb-md">
																		<input type="text" class="form-control">
																		<div class="input-group-btn">
																			<button type="button" class="btn btn-primary" tabindex="-1">Agregar</button>
																		</div>
																	</div>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<div class="panel panel-accordion">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
															 <i class="fa fa-comment"></i> Mensajes
														</a>
													</h4>
												</div>
												<div id="collapse1Two" class="accordion-body collapse">
													<div class="panel-body">
														<ul class="simple-user-list mb-xlg">
															<li>
																<figure class="image rounded">
																	<img src="/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
																</figure>
																<span class="title">Joseph Doe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="/assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
																</figure>
																<span class="title">Joseph Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="/assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
																</figure>
																<span class="title">Joe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
																</figure>
																<span class="title">Joseph Doe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</section>

								</div>
							</section>
						</div>


						<div class="col-xl-3 col-lg-6">

							<!-- My Stats -->
							<section class="panel panel-transparent">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Mi estado</h2>
								</header>
								<div class="panel-body">
									<section class="panel">
										<div class="panel-body">
											<div class="small-chart pull-right" id="sparklineBarDash"></div>
											<script type="text/javascript">
												var sparklineBarDashData = [5, 6, 7, 2, 0, 4 , 2, 4, 2, 0, 4 , 2, 4, 2, 0, 4];
											</script>
											<div class="h4 text-bold mb-none">488</div>
											<p class="text-xs text-muted mb-none">Media de visitas al perfil</p>
										</div>
									</section>
									<section class="panel">
										<div class="panel-body">
											<div class="circular-bar circular-bar-xs m-none mt-xs mr-md pull-right">
												<div class="circular-bar-chart" data-percent="45" data-plugin-options='{ "barColor": "#2baab1", "delay": 300, "size": 50, "lineWidth": 4 }'>
													<strong>Media</strong>
													<label><span class="percent">45</span>%</label>
												</div>
											</div>
											<div class="h4 text-bold mb-none">12</div>
											<p class="text-xs text-muted mb-none">Proyectos de trabajo</p>
										</div>
									</section>
									<section class="panel">
										<div class="panel-body">
											<div class="small-chart pull-right" id="sparklineLineDash"></div>
											<script type="text/javascript">
												var sparklineLineDashData = [15, 16, 17, 19, 10, 15, 13, 12, 12, 14, 16, 17];
											</script>
											<div class="h4 text-bold mb-none">89</div>
											<p class="text-xs text-muted mb-none">Tareas pendientes</p>
										</div>
									</section>
								</div>
							</section>

						<!-- Section friends -->	
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">
										<span class="label label-primary label-sm text-normal va-middle mr-sm">198</span>
										<span class="va-middle">Amigos</span>
									</h2>
								</header>
								<div class="panel-body">
									<div class="content">
										<ul class="simple-user-list">
											<li>
												<figure class="image rounded">
													<img src="/assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
												</figure>
												<span class="title">Joseph Doe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="/assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="/assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
										</ul>
										<hr class="dotted short">
										<div class="text-right">
											<a class="text-uppercase text-muted" href="#">(View All)</a>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<div class="input-group input-search">
										<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
											</button>
										</span>
									</div>
								</div>
							</section>
						</div>
						
					</div>
					
					<!-- end: page -->
					</section>
				</section>



			</div>




			<?php include_once 'resources/footer.php' ?>
		</section>

		<!-- Vendor -->
		<script src="/assets/vendor/jquery/jquery.js"></script>
		<script src="/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<script src="/assets/vendor/jquery-validation/jquery.validate.min.js"></script>


		<!-- Specific Page Vendor 
		<script src="/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="/assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="/assets/vendor/flot/jquery.flot.js"></script>
		<script src="/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="/assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="/assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="/assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="/assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="/assets/vendor/raphael/raphael.js"></script>
		<script src="/assets/vendor/morris/morris.js"></script>
		<script src="/assets/vendor/gauge/gauge.js"></script>
		<script src="/assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="/assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="/assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>-->
		
		<!-- Theme Base, Components and Settings -->
		<script src="/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="/assets/javascripts/dashboard/examples.dashboard.js"></script>

		<!-- Custom Script -->
		 <script src="/roles/profesor/js/navPage.js"></script>
		 <script src="/roles/profesor/js/dataSend.js"></script>
		 <script src="/roles/profesor/js/formsValidate.js"></script>
		 <script src="/roles/profesor/js/jqueryAnimations.js"></script>

	</body>
</html>