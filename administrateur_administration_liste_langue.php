<?php include"include/header.php";?>
<?php include"include/menu.php";?>

<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Administration</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a>
								</li>
								<li class="breadcrumb-item" aria-current="page"><a
										href="administrateur_administration_liste_langue.php">Langues</a></li>
								<li class="breadcrumb-item active" aria-current="page">Liste des Langues</li>
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

					<div class="row">
						<div class="col-md-12 mx-auto">
							<div class="table-responsive">
								<table class="text-fade table table-bordered">
									<thead class="bg-success">
										<tr>
											<th>#</th>
											<th class="text-center">Langue</th>
											<th class="text-center">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>

											<td>1</td>
											<td class="text-center">Fançais</td>
											<td class="table-action  d-flex  justify-content-center align-items-center">
												<form action="">
													<a href="#" class="text-fade text-danger me-2"><i
															class="align-middle" data-feather="x"></i></a>
												</form>
												<form action="">
													<a href="administrateur_administration_modifier_langue.php"
														class="text-fade text-primary me-2"><i class="align-middle"
															data-feather="edit-2"></i></a>
												</form>
												<form action="">
													<a href="#" class="text-fade text-danger me-2"><i
															class="align-middle" data-feather="trash"></i></a>
												</form>
											</td>
										</tr>
										<tr>

											<td>2</td>
											<td class="text-center">Arabe</td>
											<td class="table-action  d-flex  justify-content-center align-items-center">
												<form action="">
													<a href="#" class="text-fade text-danger me-2"><i
															class="align-middle" data-feather="x"></i></a>
												</form>
												<form action="">
													<a href="administrateur_administration_modifier_langue.php"
														class="text-fade text-primary me-2"><i class="align-middle"
															data-feather="edit-2"></i></a>
												</form>
												<form action="">
													<a href="#" class="text-fade text-danger me-2"><i
															class="align-middle" data-feather="trash"></i></a>
												</form>
											</td>
										</tr>
										<tr>

											<td>3</td>
											<td class="text-center">Anglais</td>




											<td class="table-action  d-flex  justify-content-center align-items-center">
												<form action="">
													<a href="#" class="text-fade text-success me-2"><i
															class="align-middle" data-feather="check"></i></a>
												</form>
												<form action="">
													<a href="administrateur_administration_modifier_langue.php"
														class="text-fade text-primary me-2"><i class="align-middle"
															data-feather="edit-2"></i></a>
												</form>
												<form action="">
													<a href="#" class="text-fade text-danger me-2"><i
															class="align-middle" data-feather="trash"></i></a>
												</form>
											</td>
										</tr>
										<tr>

											<td>4</td>
											<td class="text-center">Italie</td>
											<td class="table-action  d-flex  justify-content-center align-items-center">
												<form action="">
													<a href="#" class="text-fade text-danger me-2"><i
															class="align-middle" data-feather="x"></i></a>
												</form>
												<form action="">
													<a href="administrateur_administration_modifier_langue.php"
														class="text-fade text-primary me-2"><i class="align-middle"
															data-feather="edit-2"></i></a>
												</form>
												<form action="">
													<a href="#" class="text-fade text-danger me-2"><i
															class="align-middle" data-feather="trash"></i></a>
												</form>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td class="text-center">Allemand</td>
											<td class="table-action  d-flex  justify-content-center align-items-center">
												<form action="">
													<a href="#" class="text-fade text-success me-2"><i
															class="align-middle" data-feather="check"></i></a>
												</form>
												<form action="">
													<a href="administrateur_administration_modifier_langue.php"
														class="text-fade text-primary me-2"><i class="align-middle"
															data-feather="edit-2"></i></a>
												</form>
												<form action="">
													<a href="#" class="text-fade text-danger me-2"><i
															class="align-middle" data-feather="trash"></i></a>
												</form>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-lg-2 ms-auto ">
						<a href="administrateur_administration_ajouter_langue.php ">
							<button type="submit" class="btn btn-primary ms-3 mb-3"> <i class="fa fa-plus"
									aria-hidden="true"></i>
								Ajouter
							</button></a>
					</div>
				</div>
		</section>
	</div>
</div>





<?php include"include/footer.php";?>