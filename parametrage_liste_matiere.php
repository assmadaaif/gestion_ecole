<?php include"include/header.php";?>
<?php include"include/menu.php";?>


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Paramétrage</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="parametrage_parametrage_liste_matiere.php">Matières</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="parametrage_parametrage_liste_matiere.php">Liste des matières</a></li>
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
                  
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12">
                            <div class="table-responsive">
                            <table id ="complex_header " class="text-fade table table-bordered display" style="width: 100%;">
                                    <thead class="bg-primary">
                                        <tr>
                                            
                                            <th  class="text-center">Nom de matière</th>
                                             <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td  class="text-center">Arabe</td>
                                        
                                          <td class="table-action ">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <form action="">
                                                            <a href="#" class="text-fade text-success me-2"><i
                                                                    class="align-middle" data-feather="check"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="parametrage_modifier_matiere.php"
                                                                class="text-fade text-primary me-2"><i
                                                                    class="align-middle" data-feather="edit-2"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="" class="text-danger" class="me-3 "
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#bs-example-modal-sm"><i
                                                                    class="align-middle"
                                                                    data-feather="trash"></i></button>
                                                                <div class="modal fade" id="bs-example-modal-sm"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="mySmallModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title"
                                                                                    id="mySmallModalLabel">
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
                                                    </div>
                                                </td>
                                        </tr>
                                        <tr>
                                            
                                            <td  class="text-center">Mathématique</td>
                                            <td class="table-action ">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <form action="">
                                                            <a href="#" class="text-fade text-danger me-2"><i
                                                                    class="align-middle" data-feather="x"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="parametrage_modifier_matiere.php"
                                                                class="text-fade text-primary me-2"><i
                                                                    class="align-middle" data-feather="edit-2"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="" class="text-danger" class="me-3 "
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#bs-example-modal-sm"><i
                                                                    class="align-middle"
                                                                    data-feather="trash"></i></button>
                                                                <div class="modal fade" id="bs-example-modal-sm"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="mySmallModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title"
                                                                                    id="mySmallModalLabel">
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
                                                    </div>
                                                </td>
                                        </tr>
                                        <tr>
                                            
                                            <td  class="text-center">Français</td>
                                          <td class="table-action ">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <form action="">
                                                            <a href="#" class="text-fade text-success me-2"><i
                                                                    class="align-middle" data-feather="check"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="parametrage_modifier_matiere.php"
                                                                class="text-fade text-primary me-2"><i
                                                                    class="align-middle" data-feather="edit-2"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="" class="text-danger" class="me-3 "
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#bs-example-modal-sm"><i
                                                                    class="align-middle"
                                                                    data-feather="trash"></i></button>
                                                                <div class="modal fade" id="bs-example-modal-sm"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="mySmallModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title"
                                                                                    id="mySmallModalLabel">
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
                                                    </div>
                                                </td>
                                        </tr>
                                        <tr>
                                            
                                            <td  class="text-center">Physique</td>
                                          <td class="table-action ">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <form action="">
                                                            <a href="#" class="text-fade text-success me-2"><i
                                                                    class="align-middle" data-feather="check"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="parametrage_modifier_matiere.php"
                                                                class="text-fade text-primary me-2"><i
                                                                    class="align-middle" data-feather="edit-2"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="" class="text-danger" class="me-3 "
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#bs-example-modal-sm"><i
                                                                    class="align-middle"
                                                                    data-feather="trash"></i></button>
                                                                <div class="modal fade" id="bs-example-modal-sm"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="mySmallModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title"
                                                                                    id="mySmallModalLabel">
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
                                                    </div>
                                                </td>
                                        </tr>
                                        <tr>
                                            
                                            <td  class="text-center">SVT</td>
                                          <td class="table-action ">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <form action="">
                                                            <a href="#" class="text-fade text-success me-2"><i
                                                                    class="align-middle" data-feather="check"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="parametrage_modifier_matiere.php"
                                                                class="text-fade text-primary me-2"><i
                                                                    class="align-middle" data-feather="edit-2"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="" class="text-danger" class="me-3 "
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#bs-example-modal-sm"><i
                                                                    class="align-middle"
                                                                    data-feather="trash"></i></button>
                                                                <div class="modal fade" id="bs-example-modal-sm"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="mySmallModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title"
                                                                                    id="mySmallModalLabel">
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
                                                    </div>
                                                </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                    </div>
                </div>
                <div class="row">
					<div class="col-lg-2 ms-auto">
						<a href="parametrage_ajouter_matiere.php">
							<button type="submit" class="btn btn-primary ms-3 mb-3"> <i class="fa fa-plus"
									aria-hidden="true"></i>
								Ajouter
							</button></a>
					</div>
				</div>
            </div>
   
        </section>
    </div>
</div>


<?php include"include/footer.php";?>

