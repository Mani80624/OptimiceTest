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
				
				
				<section role="main" class="content-body">
					

					
					
			    <header class="page-header">
						<h2>Estudiantes</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Páginas</span></li>
								<li><span>Estudiantes</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

			  <div class="row">
	
	
				<div class="col-md-6">
	
				</div>
				
                <div class="row" id="result_students">
				</div>


				<section class="panel">
					<header class="panel-heading">
						<div class="panel-actions">
							<a href="#" class="fa fa-caret-down"></a>
							<a href="#" class="fa fa-times"></a>
						</div>
							
						<h2 class="panel-title">Mis estudiantes</h2>
					</header>
					<div class="panel-body">
                        <div class="table-resposive">
                        <table class='table mb-none'>
		                    <thead>
			                    <tr>
			                        <th>id</th>
			                        <th>nombre de alumno</th>
			                        <th>nombre del curso</th>
			                        <th>editar/borrar</th>
		                        </tr>
	                        </thead>
                            <tr>
                                <td>23</td>
                                <td>Manuel Dolores Cruz</td>
                                <td>Cálculo I</td>
                                <td class='actions-hover'>
                                    <a><i class='fa fa-pencil'></i></a>
                                    <a><i class='fa fa-trash-o'></i></a>
                                <td>
                            </tr>
                            <tbody> 
                            </tbody>
                            </table>
                        </div>
                    <!--<div id="table_async" class="table-responsive">
	
						</div>-->
					</div>
				</div>



				<div class="row mt4" id="hide-edit">
					<div class="tabs">
						<div class="tab-content">
							<div class="tab">
								<form class="form horizontal" id="edit-form">
									<h4 class="mb-xlg">Editar</h4>
									<fieldset>
										<div class="form-group">
											<label class="col-md-3 control-label">Nombre del curso</label>
											<div class="col-md-8">
												<input type="text" name="name_course" id="name_course" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Horas del curso</label>
											<div class="col-md-8">
												<input type="number" name="hours" id="hours" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Descripción de curso (no más de 250 carácteres)</label>
											<div class="col-md-8">
												<input type="text" name="description" id="description" class="form-control">
											</div>
										</div>
									</fieldset>
									<div class="row">
										<div class="col-md-9 col-md-offset-3">
											<button type="submit" class="btn btn-primary" id="course-update">Actualizar</button>
											<button type="reset" class="btn btn-danger" id="cancel-update">Cancelar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>


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


		<!-- Specific Page Vendor -->
		
		<!-- Theme Base, Components and Settings -->
		<script src="/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="/assets/javascripts/dashboard/examples.dashboard.js"></script>

		<!-- Custom Script -->
		 <script src="/roles/profesor/js/courses.js"></script>

	</body>
</html>
