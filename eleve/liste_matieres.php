<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/header.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/menu_eleve.php"; ?>







<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Eleve</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Ecole</li>
								<li class="breadcrumb-item active" aria-current="page">Liste de mes matières</li>
							</ol>
						</nav>
					</div>
				</div>

			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="box">
				<div class="box-body">
					<div class="row my-5">					 
						<div class="col-lg-2 ms-auto">
							<div class="form-group">
								<div class="input-group">
									<input type="search" class="form-control" placeholder="chercher">
									<span class="input-group-text"><i class="fa fa-search"></i></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="table-responsive">
							<table class="text-fade table">
								<thead class="bg-success">
									<tr>
										<th>#</th>
										<th>Matière</th>
										
										<th>Formaturs</th>
										<th>Ecole</th>

										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
                                        <td>Mathématique</td>
										<td>
											<img src="../images/avatar/avatar-10.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Carl Jenkins
										</td>
										
										<td>Ecole1</td>
									</tr>
									<tr>
										<td>2</td>
                                        <td>Arabe</td>

										<td><img src="../images/avatar/avatar-12.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Bertha Martin</td>
								
                                       
										<td>Ecole2</td>
									</tr>
									<tr>
										<td>3</td>
                                        <td>Phisique</td>

										<td>
											<img src="../images/avatar/avatar-15.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Stacie Hall</td>
										
                        
										<td>Ecole3</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/footer.php"; ?>
