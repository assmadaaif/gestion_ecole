<?php include"include/header.php";?>
<?php include"include/menu.php";?>

  
  <!-- Left side column. contains the logo and sidebar -->
  <
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Formateur</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Localisation</li>
								<li class="breadcrumb-item active" aria-current="page">Calendarier</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-xl-12">									
							<div class="card">
								<div class="card-body">
									<div class="mb-30 mb-xl-0">
										<div id="calendar"></div>
									</div>
								</div>
							</div>
						</div>							
						<div class="col-xl-3">
							
							<div id="external-events" class="mt-20">
							</div>
						</div>
					</div>					
					
					<div class="modal fade" id="event-modal" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<form class="needs-validation" name="event-form" id="" novalidate>
									<div class="modal-header py-3 px-4 border-bottom-0">
										<h5 class="modal-title" id="modal-title">Évènement</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									
								</form>
							</div>
						</div> 
					</div>					
				</div>				
			</div> 
		</section>
		<!-- /.content -->
	  </div>	  
	
  </div>
  <!-- /.content-wrapper -->
	

<?php include"include/footer.php";?>
	
	
