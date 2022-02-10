<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/header.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/menu_parent.php"; ?>






<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Parent</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Absences & Retards</li>
								<li class="breadcrumb-item active" aria-current="page">Absences</li>
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
										<th>Eleve</th>
										<th>Ecole</th>
										<th>Anné scolaire</th>
										<th>Date de debut</th>
										<th>Date de fin</th>
										<th>motif</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>
											<img src="../images/avatar/avatar-10.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Carl Jenkins
										</td>
										<td>Ecole1</td>
										<td>2019-2020</td>
										<td>1H</td>
										<td>2H</td>
										<td>motif...</td>
									</tr>
									<tr>
										<td>2</td>
										<td><img src="../images/avatar/avatar-12.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Bertha Martin</td>
										<td>Ecole2</td>
										<td>2020-2021</td>
                                        <td>3H</td>
										<td>4H</td>
                                        <td>motif...</td>
									</tr>
									<tr>
										<td>3</td>
										<td>
											<img src="../images/avatar/avatar-15.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Stacie Hall</td>
										<td>Ecole3</td>
										<td>2021-2022</td>
                                        <td>8H</td>
										<td>10H</td>
                                        <td>motif...</td>
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
