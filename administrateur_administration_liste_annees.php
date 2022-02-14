<?php include"include/header.php";?>
<?php include"include/menu.php";?>

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
								<li class="breadcrumb-item" aria-current="page"><a href="administrateur_administration_liste_annees.php">Année scolaire</a></li>
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
                    <div class="col-md-8 mx-auto">
						<div class="table-responsive">
							<table class="text-fade table">
								<thead class="bg-success">
									<tr>
										<th>#</th>
										<th>Année scolaire</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									
                                        <td>1</td>
										<td>2019-2020</td>
                                        <td class="table-action ">
                                            <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                    data-feather="x"></i></a>
											<a href="administrateur_administration_modifier_annee.php" class="text-fade text-primary me-2"><i class="align-middle"
													data-feather="edit-2"></i></a>
											<a href="#" class="text-fade text-danger me-2"><i class="align-middle"
													data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
									
                                        <td>2</td>
										<td>2020-2021</td>
										<td class="table-action ">
                                            <a href="#" class="text-fade text-success me-2"><i class="align-middle"
                                                    data-feather="check"></i></a>
											<a href="administrateur_administration_modifier_annee.php" class="text-fade text-primary me-2"><i class="align-middle"
													data-feather="edit-2"></i></a>
											<a href="#" class="text-fade text-danger me-2"><i class="align-middle"
													data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										
										<td>3</td>
										<td>2021-2022</td>
										
                                        
										

                                        <td class="table-action ">
                                            <a href="#" class="text-fade text-success me-2"><i class="align-middle"
                                                    data-feather="check"></i></a>
											<a href="administrateur_administration_modifier_annee.php" class="text-fade text-primary me-2"><i class="align-middle"
													data-feather="edit-2"></i></a>
											<a href="#" class="text-fade text-danger me-2"><i class="align-middle"
													data-feather="trash"></i></a>
										</td>
									</tr>
                                    <tr>
									
                                        <td>4</td>
										<td>2015-2016</td>
									
                                        <td class="table-action ">
                                            <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                    data-feather="x"></i></a>
											<a href="administrateur_administration_modifier_annee.php" class="text-fade text-primary me-2"><i class="align-middle"
													data-feather="edit-2"></i></a>
											<a href="#" class="text-fade text-danger me-2"><i class="align-middle"
													data-feather="trash"></i></a>
										</td>
									</tr>
                                    <tr>
                                        <td>5</td>
										<td>2022-2023</td>
										
                                        <td class="table-action ">
                                            <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                    data-feather="x"></i></a>
											<a href="administrateur_administration_modifier_annee.php" class="text-fade text-primary me-2"><i class="align-middle"
													data-feather="edit-2"></i></a>
											<a href="#" class="text-fade text-danger me-2"><i class="align-middle"
													data-feather="trash"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-lg-2 ms-auto">
					<a href="administrateur_administration_ajouter_annee.php">
						<button type="submit" class="btn btn-primary">
							ajouter
						</button></a>
				</div>
			</div>
		</section>
	</div>
</div>





<?php include"include/footer.php";?>

