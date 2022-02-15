<?php include"include/header.php";?>
<?php include"include/menu.php";?>
 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Admin</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="administrateur_administration_liste_parent.php">Types parents</a></li>
								<li class="breadcrumb-item active" aria-current="page">Liste des parents</li>
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
						<div class="table-responsive">
							<table id="complex_header" class="text-fade table table-bordered display" style="width:100%">
                            <thead class="bg-success">
									<tr>
										<th>#</th>
										<th>Nom & prenom</th>
										<th>Email</th>
										<th>Télephone</th>
										<th>Ville</th>
										<th>Actions</th>

										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td class="d-flex flex-wrap align-items-center ">
											<img src="images/avatar/avatar-10.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Carl Jenkins
										</td>
										<td>CarlJenkins@gmail.com</td>
										<td>(+212) 677665544</td>
										<td>Safi</td>
										<td class="table-action ">
                                            <a href="#" class="text-fade text-success "><i class="align-middle"
                                                    data-feather="check"></i></a>
											<a href="administrateur_administration_modifier_parent.php" class="text-fade text-primary "><i class="align-middle"
													data-feather="edit-2"></i></a>
											<a href="#" class="text-fade text-danger "><i class="align-middle"
													data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td  class="d-flex flex-wrap align-items-center "><img src="images/avatar/avatar-12.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Bertha Martin</td>
										<td>BerthaMartin@gmail.com</td>
										<td>(+212) 688985544</td>
                                        <td>El Jadida</td>
									    <td class="table-action ">
                                            <a href="#" class="text-fade text-danger"><i class="align-middle"
                                                    data-feather="x"></i></a>
											<a href="administrateur_administration_modifier_parent.php" class="text-fade text-primary "><i class="align-middle"
													data-feather="edit-2"></i></a>
											<a href="#" class="text-fade text-danger "><i class="align-middle"
													data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td class="d-flex flex-wrap align-items-center ">
											<img src="images/avatar/avatar-15.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Stacie Hall</td>
										<td>StacieHall@gmail.com</td>
										<td>(+212) 798097687</td>
                                        <td>Casablanca</td>
										 <td class="table-action ">
                                            <a href="#" class="text-fade text-success "><i class="align-middle"
                                                    data-feather="check"></i></a>
											<a href="administrateur_administration_modifier_parent.php" class="text-fade text-primary "><i class="align-middle"
													data-feather="edit-2"></i></a>
											<a href="#" class="text-fade text-danger "><i class="align-middle"
													data-feather="trash"></i></a>
										</td>
									</tr>
									
																		<tr>
										<td>4</td>
										<td class="d-flex flex-wrap align-items-center ">
											<img src="images/avatar/avatar-15.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Stacie Hall</td>
										<td>StacieHall@gmail.com</td>
										<td>(+212) 798097687</td>
                                        <td>Agadir</td>
										<td class="table-action ">
                                            <a href="#" class="text-fade text-success "><i class="align-middle"
                                                    data-feather="check"></i></a>
											<a href="administrateur_administration_modifier_parent.php" class="text-fade text-primary "><i class="align-middle"
													data-feather="edit-2"></i></a>
											<a href="#" class="text-fade text-danger "><i class="align-middle"
													data-feather="trash"></i></a>
										</td>
									</tr>
																		<tr>
										<td>5</td>
										<td class="d-flex flex-wrap align-items-center ">
											<img src="images/avatar/avatar-15.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Stacie Hall</td>
										<td>StacieHall@gmail.com</td>
										<td>(+212) 798097687</td>
                                        <td>Essaouira</td>
										 <td class="table-action ">
                                            <a href="#" class="text-fade text-success "><i class="align-middle"
                                                    data-feather="check"></i></a>
											<a href="administrateur_administration_modifier_parent.php" class="text-fade text-primary "><i class="align-middle"
													data-feather="edit-2"></i></a>
											<a href="#" class="text-fade text-danger "><i class="align-middle"
													data-feather="trash"></i></a>
										</td>
									</tr>
                                    </tr>
									<tr>
										<td>6</td>
										<td class="d-flex flex-wrap align-items-center ">
											<img src="images/avatar/avatar-16.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Soufia Melk</td>
										<td>SoufiaMelk@gmail.com</td>
										<td>(+212) 795697687</td>
                                        <td>Essaouira</td>
										 <td class="table-action ">
                                            <a href="#" class="text-fade text-success "><i class="align-middle"
                                                    data-feather="check"></i></a>
											<a href="administrateur_administration_modifier_parent.php" class="text-fade text-primary "><i class="align-middle"
													data-feather="edit-2"></i></a>
											<a href="#" class="text-fade text-danger"><i class="align-middle"
													data-feather="trash"></i></a>
										</td>
									</tr>
                                    </tr>
									
                                    
								</tbody>
							</table>
						</div>
					</div>
			</div>
			<div class="row">
				<div class="col-lg-2 ms-auto">
					<a href="administrateur_administration_ajouter_parent.php">
						<button type="submit" class="btn btn-primary ms-3 mb-3"><i class="fa fa-plus" aria-hidden="true"></i>
							Ajouter
						</button></a>
				</div>
			</div>
			</div>
		</section>
	</div>
</div>
<!-- /.content-wrapper -->
<?php include"include/footer.php";?>