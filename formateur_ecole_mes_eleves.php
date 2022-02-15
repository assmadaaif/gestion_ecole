<?php include"include/header.php";?>
<?php include"include/menu.php";?>


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Formateur</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="formateur_ecole_mes_eleves.php">Elèves</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="formateur_ecole_mes_eleves.php">Liste de mes elèves</a></li>
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
                         <form action="" method="">
                         <div class=" d-flex flex-row  ">
                                <div class="col-lg-2 me-3">
                                    <div class="form-group">
                                        <select class="selectpicker">
                                            <option>Classe</option>
                                            <option>Classe 1</option>
                                            <option>Classe 2</option>
                                            <option>Classe 3</option>
                                            <option>Classe 4</option>
                                            <option>Classe 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <button type="button" class="btn btn-primary-light me-1">
                                        <i class="fa fa-filter" aria-hidden="true"></i> filter
                                    </button>
                                </div>
                                

                            </div>
                         </form>
                        </div>

                        <div class="row">
                            <div class="table-responsive">
                            <table id ="complex_header" class="text-fade table table-bordered display" style="width: 100%;">
                                    <div id="example_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                                        <thead class="bg-success">
                                            <tr>
                                                <th>#</th>
                                                <th >Nom & Prenom </th>
                                                <th>Email</th>
                                                <th>Télephone</th>
                                                <th>Ville</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                      Hassna   
                                                        ELAOUAI  
                                                </td>
                                                <td>hassna_elaoui@gmail.com</td>
                                                <td>(+212) 0677665544</td>
                                                <td>Safi</td>



                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td  class="d-flex flex-wrap align-items-center ">
                                                    <img src="images/avatar/avatar-10.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar"> Salma
                                                    RACHDI
                                                </td>
                                                <td>salma_rachdi@gmail.com</td>
                                                <td> (+212) 0677668643</td>
                                                <td>Casablanca</td>



                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td  class="d-flex flex-wrap align-items-center ">
                                                    <img src="images/avatar/avatar-1.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar">Mohamed
                                                    NASIRI
                                                </td>
                                                <td>mohamed_naciri@gmail.com</td>
                                                <td>(+212) 0698346612</td>
                                                <td>Marakech</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td  class="d-flex flex-wrap align-items-center ">
                                                    <img src="images/avatar/avatar-7.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar">Ismail
                                                    HADRI
                                                </td>
                                                <td>ismail_hadri@gmail.com</td>
                                                <td>(+212) 0695646610</td>
                                                <td>Tanger</td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td  class="d-flex flex-wrap align-items-center ">
                                                    <img src="images/avatar/avatar-5.png" width="48" height="48"
                                                        class="bg-light rounded-circle me-2" alt="Avatar">Khadija
                                                    SAADI
                                                </td>
                                                <td>khadija_saadi@gmail.com</td>
                                                <td>(+212) 0654213305</td>
                                                <td>EL jadida</td>

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