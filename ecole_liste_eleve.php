<?php include"include/header.php";?>
<?php include"include/menu.php";?>


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">École</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="ecole_liste_eleve.php">Élèves</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="ecole_liste_eleve.php">Liste des élèves</a></li>
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
                                <div class="form-group ">
                                    <div class="btn btn-info btn-file  ">
                                        <i class="fa fa-paperclip"></i> Importer
                                        <input type="file" name="importer">
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="row">
                            <div class="table-responsive">
                                <table id="example" class="text-fade table table-bordered display" style="width: 100%;">
                                    <div id="example_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                                        <thead class="bg-primary">
                                            <tr>

                                                <th>Nom & Prenom</th>
                                                <th>Email</th>
                                                <th>Télephone</th>
                                                <th>Ville</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td class="d-flex align-items-center flex-wrap">
                                                    <img src="images/avatar/avatar-2.png" width="48" height=""
                                                        class="bg-light rounded-circle me-2" alt="Avatar"> Hassna
                                                    ELAOUAI
                                                </td>
                                                <td>hassna_elaoui@gmail.com</td>
                                                <td>(+212) 0677665544</td>
                                                <td>Safi</td>


                                                <td class="table-action ">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <form action="">
                                                            <a href="#" class="text-fade text-success me-2"><i
                                                                    class="align-middle" data-feather="check"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="ecole_modifier_eleve.php"
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

                                                <td class="d-flex align-items-center flex-wrap">
                                                    <img src="images/avatar/avatar-10.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar"> Salma
                                                    RACHDI
                                                </td>
                                                <td>salma_rachdi@gmail.com</td>
                                                <td> (+212) 0677668643</td>
                                                <td>Casablanca</td>


                                                <td class="table-action ">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <form action="">
                                                            <a href="#" class="text-fade text-success me-2"><i
                                                                    class="align-middle" data-feather="check"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="ecole_modifier_eleve.php"
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

                                                <td class="d-flex align-items-center flex-wrap">
                                                    <img src="images/avatar/avatar-1.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar">Mohamed
                                                    NASIRI
                                                </td>
                                                <td>mohamed_naciri@gmail.com</td>
                                                <td>(+212) 0698346612</td>
                                                <td>Marakech</td>
                                                <td class="table-action ">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <form action="">
                                                            <a href="#" class="text-fade text-success me-2"><i
                                                                    class="align-middle" data-feather="check"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="ecole_modifier_eleve.php"
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

                                                <td class="d-flex align-items-center flex-wrap">
                                                    <img src="images/avatar/avatar-7.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar">Ismail
                                                    HADRI
                                                </td>
                                                <td>ismail_hadri@gmail.com</td>
                                                <td>(+212) 0695646610</td>
                                                <td>Tanger</td>
                                                <td class="table-action ">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <form action="">
                                                            <a href="#" class="text-fade text-success me-2"><i
                                                                    class="align-middle" data-feather="check"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="ecole_modifier_eleve.php"
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

                                                <td class="d-flex align-items-center flex-wrap">
                                                    <img src="images/avatar/avatar-5.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar">Khadija
                                                    SAADI
                                                </td>
                                                <td>khadija_saadi@gmail.com</td>
                                                <td>(+212) 0654213305</td>
                                                <td>EL jadida</td>
                                                <td class="table-action ">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <form action="">
                                                            <a href="#" class="text-fade text-success me-2"><i
                                                                    class="align-middle" data-feather="check"></i></a>
                                                        </form>
                                                        <form action="">
                                                            <a href="ecole_modifier_eleve.php"
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
                        <a href="ecole_ajouter_eleve.php">
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