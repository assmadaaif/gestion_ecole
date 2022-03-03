<?php include"include/header.php";?>
<?php include"include/menu.php";?>
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="sante_et_comportement_list_comportement.php">liste des comportements</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="sante_et_comportement_comportement_list_eleve.php">Liste des élèves</a></li>
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

                        <div class="row">
                            <div class="table-responsive">
                            <table id ="" class="text-fade table table-bordered display" style="width: 100%;">
                                    <div id="example_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

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
                                                <td class="d-flex flex-row flex-wrap align-items-center">
                                                    <img src="images/avatar/avatar-2.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar"> Hassna
                                                    ELAOUAI
                                                </td>
                                                <td>hassna_elaoui@gmail.com</td>
                                                <td>(+212) 0677665544</td>
                                                <td>Safi</td>
                                                <td><button type="reset" class=" btn btn-danger"><i class="fa fa-times"></i>
                                            Annuler Le comportement</button></td>



                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="d-flex flex-row flex-wrap align-items-center">
                                                    <img src="images/avatar/avatar-10.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar"> Salma
                                                    RACHDI
                                                </td>
                                                <td>salma_rachdi@gmail.com</td>
                                                <td> (+212) 0677668643</td>
                                                <td>Casablanca</td>
                                                <td><button type="reset" class=" btn btn-danger"><i class="fa fa-times"></i>
                                            Annuler Le comportement</button></td>


                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td class="d-flex flex-row flex-wrap align-items-center">
                                                    <img src="images/avatar/avatar-1.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar">Mohamed
                                                    NASIRI
                                                </td>
                                                <td>mohamed_naciri@gmail.com</td>
                                                <td>(+212) 0698346612</td>
                                                <td>Marakech</td>
                                                <td><button type="reset" class=" btn btn-danger"><i class="fa fa-times"></i>
                                            Annuler Le comportement</button></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td class="d-flex flex-row flex-wrap align-items-center">
                                                    <img src="images/avatar/avatar-7.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar">Ismail
                                                    HADRI
                                                </td>
                                                <td>ismail_hadri@gmail.com</td>
                                                <td>(+212) 0695646610</td>
                                                <td>Tanger</td>
                                                <td><button type="reset" class=" btn btn-danger"><i class="fa fa-times"></i>
                                            Annuler Le comportement</button></td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td class="d-flex flex-row flex-wrap align-items-center">
                                                    <img src="images/avatar/avatar-5.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar">Khadija
                                                    SAADI
                                                </td>
                                                <td>khadija_saadi@gmail.com</td>
                                                <td>(+212) 0654213305</td>
                                                <td>EL jadida</td>
                                                <td><button type="reset" class=" btn btn-danger"><i class="fa fa-times"></i>
                                            Annuler Le comportement</button></td>

                                            </tr>
                                        </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</div>
<?php include"include/footer.php";?>
