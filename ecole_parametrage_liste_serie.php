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
                                <li class="breadcrumb-item" aria-current="page"><a href="ecole_parametrage_liste_serie.php">Séries</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="ecole_parametrage_liste_serie.php">Liste des Séries</a></li>
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
                                    <thead class="bg-success">
                                        <tr>
                                            <th>#</th>
                                            <th>Nom de Série</th>
                                             <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Science</td>
                                        
                                            <td class="table-action  text-center">
                                                <a href="#" class="text-fade text-success "><i class="align-middle"
                                                        data-feather="check"></i></a>
                                                <a href="ecole_parametrage_modifier_serie.php" class="text-fade text-primary "><i
                                                        class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                        data-feather="trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Lettre</td>
                                            <td class="table-action  text-center">
                                                <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                        data-feather="x"></i></a>
                                                <a href="ecole_parametrage_modifier_serie.php" class="text-fade text-primary "><i
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
            </div>
            <div class="row  ">
                <div class=" d-flex flex-row justify-content-end ">
                    <a href="ecole_parametrage_ajouter_serie.php">
                        <button type="submit" class="btn btn-primary mt-3 mx-3">
                           <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                        </button></a>

                       
                </div>

            </div>
        </section>
    </div>
</div>


<?php include"include/footer.php";?>

