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
										href="administration_liste_annees.php">Année scolaire</a></li>
								<li class="breadcrumb-item active" aria-current="page">Liste des années scolaire</li>
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
								<table id="example" class="text-fade table table-bordered">
									<thead class="bg-primary">
										<tr>

											<th class="text-center">Année scolaire</th>
											<th class="text-center">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>


											<td class="text-center">2019-2020</td>
											<td class="table-action  d-flex  justify-content-center align-items-center">
												<form action="">
													<a href="#" class="text-fade text-danger me-2"><i
															class="align-middle" data-feather="x"></i></a>
												</form>
												<form action="">
													<a href="administration_modifier_annee.php"
														class="text-fade text-primary me-2"><i class="align-middle"
															data-feather="edit-2"></i></a>
												</form>
												<form action="">
													<a class="text-danger" class="me-3 " data-bs-toggle="modal"
														data-bs-target="#bs-example-modal-sm"><i class="align-middle"
															data-feather="trash"></i></button>
														<div class="modal fade" id="bs-example-modal-sm" tabindex="-1"
															role="dialog" aria-labelledby="mySmallModalLabel"
															aria-hidden="true">
															<div class="modal-dialog modal-sm">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title" id="mySmallModalLabel">
																			Avertissement</h4>
																		<button type="button" class="btn-close"
																			data-bs-dismiss="modal"
																			aria-hidden="true"></button>
																	</div>
																	<div class="modal-body text-danger">
																		Voulez-vous vraiment supprimer ?
																	</div>
																	<div class="modal-footer">
																		<button type="button"
																			class="btn btn-primary-light"
																			data-bs-dismiss="modal">Non</button>
																		<button type="button"
																			class="btn btn-primary">Oui
																		</button>
																	</div>
																</div>
															</div>
														</div>
												</form>

											</td>
										</tr>
										<tr>

											<td class="text-center">2020-2021</td>
											<td class="table-action  d-flex  justify-content-center align-items-center">
												<form action="">
													<a href="#" class="text-fade text-danger me-2"><i
															class="align-middle" data-feather="x"></i></a>
												</form>
												<form action="">
													<a href="administration_modifier_annee.php"
														class="text-fade text-primary me-2"><i class="align-middle"
															data-feather="edit-2"></i></a>
												</form>
												<form action="">
													<a class="text-danger" class="me-3 " data-bs-toggle="modal"
														data-bs-target="#bs-example-modal-sm"><i class="align-middle"
															data-feather="trash"></i></button>
														<div class="modal fade" id="bs-example-modal-sm" tabindex="-1"
															role="dialog" aria-labelledby="mySmallModalLabel"
															aria-hidden="true">
															<div class="modal-dialog modal-sm">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title" id="mySmallModalLabel">
																			Avertissement</h4>
																		<button type="button" class="btn-close"
																			data-bs-dismiss="modal"
																			aria-hidden="true"></button>
																	</div>
																	<div class="modal-body text-danger">
																		Voulez-vous vraiment supprimer ?
																	</div>
																	<div class="modal-footer">
																		<button type="button"
																			class="btn btn-primary-light"
																			data-bs-dismiss="modal">Non</button>
																		<button type="button"
																			class="btn btn-primary">Oui
																		</button>
																	</div>
																</div>
															</div>
														</div>
												</form>
											</td>
										</tr>
										<tr>


											<td class="text-center">2021-2022</td>




											<td class="table-action  d-flex  justify-content-center align-items-center">
												<form action="">
													<a href="#" class="text-fade text-success me-2"><i
															class="align-middle" data-feather="check"></i></a>
												</form>
												<form action="">
													<a href="administration_modifier_annee.php"
														class="text-fade text-primary me-2"><i class="align-middle"
															data-feather="edit-2"></i></a>
												</form>
												<form action="">
													<a class="text-danger" class="me-3 " data-bs-toggle="modal"
														data-bs-target="#bs-example-modal-sm"><i class="align-middle"
															data-feather="trash"></i></button>
														<div class="modal fade" id="bs-example-modal-sm" tabindex="-1"
															role="dialog" aria-labelledby="mySmallModalLabel"
															aria-hidden="true">
															<div class="modal-dialog modal-sm">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title" id="mySmallModalLabel">
																			Avertissement</h4>
																		<button type="button" class="btn-close"
																			data-bs-dismiss="modal"
																			aria-hidden="true"></button>
																	</div>
																	<div class="modal-body text-danger">
																		Voulez-vous vraiment supprimer ?
																	</div>
																	<div class="modal-footer">
																		<button type="button"
																			class="btn btn-primary-light"
																			data-bs-dismiss="modal">Non</button>
																		<button type="button"
																			class="btn btn-primary">Oui
																		</button>
																	</div>
																</div>
															</div>
														</div>
												</form>
											</td>
										</tr>
										<tr>


											<td class="text-center">2015-2016</td>

											<td class="table-action  d-flex  justify-content-center align-items-center">
												<form action="">
													<a href="#" class="text-fade text-success me-2"><i
															class="align-middle" data-feather="check"></i></a>
												</form>
												<form action="">
													<a href="administration_modifier_annee.php"
														class="text-fade text-primary me-2"><i class="align-middle"
															data-feather="edit-2"></i></a>
												</form>
												<form action="">
													<a class="text-danger" class="me-3 " data-bs-toggle="modal"
														data-bs-target="#bs-example-modal-sm"><i class="align-middle"
															data-feather="trash"></i></button>
														<div class="modal fade" id="bs-example-modal-sm" tabindex="-1"
															role="dialog" aria-labelledby="mySmallModalLabel"
															aria-hidden="true">
															<div class="modal-dialog modal-sm">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title" id="mySmallModalLabel">
																			Avertissement</h4>
																		<button type="button" class="btn-close"
																			data-bs-dismiss="modal"
																			aria-hidden="true"></button>
																	</div>
																	<div class="modal-body text-danger">
																		Voulez-vous vraiment supprimer ?
																	</div>
																	<div class="modal-footer">
																		<button type="button"
																			class="btn btn-primary-light"
																			data-bs-dismiss="modal">Non</button>
																		<button type="button"
																			class="btn btn-primary">Oui
																		</button>
																	</div>
																</div>
															</div>
														</div>
												</form>
											</td>
										</tr>
										<tr>

											<td class="text-center">2022-2023</td>

											<td class="table-action  d-flex  justify-content-center align-items-center">
												<form action="">
													<a href="#" class="text-fade text-danger me-2"><i
															class="align-middle" data-feather="x"></i></a>
												</form>
												<form action="">
													<a href="administration_modifier_annee.php"
														class="text-fade text-primary me-2"><i class="align-middle"
															data-feather="edit-2"></i></a>
												</form>
												<form action="">
													<a class="text-danger" class="me-3 " data-bs-toggle="modal"
														data-bs-target="#bs-example-modal-sm"><i class="align-middle"
															data-feather="trash"></i></button>
														<div class="modal fade" id="bs-example-modal-sm" tabindex="-1"
															role="dialog" aria-labelledby="mySmallModalLabel"
															aria-hidden="true">
															<div class="modal-dialog modal-sm">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title" id="mySmallModalLabel">
																			Avertissement</h4>
																		<button type="button" class="btn-close"
																			data-bs-dismiss="modal"
																			aria-hidden="true"></button>
																	</div>
																	<div class="modal-body text-danger">
																		Voulez-vous vraiment supprimer ?
																	</div>
																	<div class="modal-footer">
																		<button type="button"
																			class="btn btn-primary-light"
																			data-bs-dismiss="modal">Non</button>
																		<button type="button"
																			class="btn btn-primary">Oui
																		</button>
																	</div>
																</div>
															</div>
														</div>
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
						<a href="administration_ajouter_annee.php ">
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