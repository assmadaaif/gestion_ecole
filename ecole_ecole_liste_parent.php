<?php include"include/header.php";?>
<?php include"include/menu.php";?>


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
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="ecole_ecole_liste_parent.php">Parent</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="ecole_ecole_liste_parent.php">Liste des parents</a></li>
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
                    <div class="row  ">
                            <div class=" d-flex flex-row  ">
                            <div class="form-group">
                                    <div class="btn btn-info btn-file ">
                                        <i class="fa fa-paperclip"></i> Importer
                                        <input type="file" name="importer">
                                    </div>
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                        <table id ="example" class="text-fade table table-bordered display" style="width: 100%;">
                                <thead class="bg-success">
                                    <tr>
                                        <th>#</th>
                                        <th>Nom & Prenom</th>
                                        <th>Email</th>
                                        <th>Télephone</th>
                                        <th>Ville</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
											<img src="images/avatar/avatar-2.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Sara ELAOUAI
										</td>
                                        <td>sara_elaoui@gmail.com</td>
                                        <td>(+212) 0677664213</td>
                                        <td>Safi</td>


                                        <td class="table-action ">
                                            <a href="#" class="text-fade text-success "><i class="align-middle"
                                                    data-feather="check"></i></a>
                                            <a href="ecole_ecole_modifier_parent.php" class="text-fade text-primary "><i
                                                    class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                    data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
											<img src="images/avatar/avatar-10.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar"> Yssine RACHDI
										</td>
                                        <td>yssine_rachdi@gmail.com</td>
                                        <td> (+212) 0677668643</td>
                                        <td>Casablanca</td>


                                        <td class="table-action ">
                                            <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                    data-feather="x"></i></a>
                                            <a href="ecole_ecole_modifier_parent.php" class="text-fade text-primary "><i
                                                    class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                    data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
											<img src="images/avatar/avatar-1.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar">Rania NASIRI
										</td>
                                        <td>rania_naciri@gmail.com</td>
                                        <td>(+212) 0698346612</td>
                                        <td>Marakech</td>
                                        <td class="table-action ">
                                            <a href="#" class="text-fade text-success "><i class="align-middle"
                                                    data-feather="check"></i></a>
                                            <a href="ecole_ecole_modifier_parent.php" class="text-fade text-primary "><i
                                                    class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                    data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
											<img src="images/avatar/avatar-7.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar">Lamia HADRI
										</td>
                                        <td>lamia_hadri@gmail.com</td>
                                        <td>(+212) 0695646610</td>
                                        <td>Tanger</td>
                                        <td class="table-action ">
                                            <a href="#" class="text-fade text-success "><i class="align-middle"
                                                    data-feather="check"></i></a>
                                            <a href="ecole_ecole_modifier_parent.php" class="text-fade text-primary "><i
                                                    class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                    data-feather="trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
											<img src="images/avatar/avatar-5.png" width="48" height="48"
												class="bg-light rounded-circle me-2" alt="Avatar">Soufiane SAADI
										</td>
                                        <td>soufiane_saadi@gmail.com</td>
                                        <td>(+212) 0654213305</td>
                                        <td>EL jadida</td>
                                        <td class="table-action ">
                                            <a href="#" class="text-fade text-success "><i class="align-middle"
                                                    data-feather="check"></i></a>
                                            <a href="ecole_ecole_modifier_parent.php" class="text-fade text-primary "><i
                                                    class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#" class="text-fade text-danger "><i class="align-middle"
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
                    <a href="ecole_ecole_ajouter_parent.php">
                        <button type="submit" class="btn btn-primary me-3">
                            Ajouter
                        </button></a>

                   
                </div>

            </div>
        </section>
    </div>
</div>


<?php include"include/footer.php";?>

