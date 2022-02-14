<?php include"include/header.php";?>
<?php include"include/menu.php";?>


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Parametre</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="ecole_parametrage_type_message.php">Types des messages</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="ecole_parametrage_type_message.php">Catégories</a></li>
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


                        <div class="col-lg-4 ms-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="chercher">
                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Catégorie</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>évènement</td>
                                    <td class="table-action ">
                                        <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                data-feather="trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>rappel</td>
                                    <td class="table-action ">

                                        <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                data-feather="trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>observation</td>

                                    <td class="table-action ">

                                        <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                data-feather="trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Réclamation</td>

                                    <td class="table-action ">

                                        <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                data-feather="trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Comportement élève</td>

                                    <td class="table-action ">

                                        <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                data-feather="trash"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="row  ">
                <div class=" d-flex flex-row justify-content-end ">
                    <a href="ecole_parametrage_ajouter_type_message.php">
                        <button type="submit" class="btn btn-primary me-3">
                            Ajouter
                        </button></a>


                </div>

            </div>
        </section>
    </div>
</div>


<?php include"include/footer.php";?>