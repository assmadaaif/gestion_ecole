<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/header.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/menu_ecole.php"; ?>


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Ecole</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">parent</li>
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
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Télephone</th>
                                        <th>Eleve</th>


                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
											<img src="<?php dirname(__FILE__) ?> /images/avatar/avatar-10.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar">parent1
										</td>
                                        <td>parent@gmail.com</td>
                                        <td>0677665544</td>
                                        <td>Eleve1</td>

                                        

                                        <td class="table-action ">
                                            
                                            <a href="modifier_parent.php" class="text-fade text-primary me-2"><i
                                                    class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                    data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
											<img src="<?php dirname(__FILE__) ?> /images/avatar/avatar-10.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar">parent2
										</td>
                                        <td>parent@gmail.com</td>
                                        <td>0677665544</td>
                                        <td>Eleve2</td>


                                        <td class="table-action ">
                                          
                                            <a href="modifier_parent.php" class="text-fade text-primary me-2"><i
                                                    class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                    data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
											<img src="<?php dirname(__FILE__) ?> /images/avatar/avatar-10.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar">parent3
										</td>
                                        <td>parent@gmail.com</td>
                                        <td>0677665544</td>
                                        <td>Eleve3</td>

                                        


                                        <td class="table-action ">
                                            
                                            <a href="modifier_parent.php" class="text-fade text-primary me-2"><i
                                                    class="align-middle" data-feather="edit-2"></i></a>
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
            <div class="row  ">
                <div class=" d-flex flex-row justify-content-end ">
                    <a href="ajouter_parent.php">
                        <button type="submit" class="btn btn-primary me-3">
                            ajouter
                        </button></a>

                        <div class="form-group">
											<div class="btn btn-info btn-file">
											  <i class="fa fa-paperclip"></i> importer
											  <input type="file" name="importer">
											</div>
											
						</div>
                </div>

            </div>
        </section>
    </div>
</div>


<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/footer.php"; ?>
