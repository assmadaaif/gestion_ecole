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
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="parametrage_type_message.php">Types des messages</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="parametrage_type_message.php">Catégories</a></li>
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
                    <div class="card-body">
                        <table id="exmaple" class="text-fade table table-bordered display">
                            <thead class="bg-primary">
                                <tr>
                                   
                                    <th>Catégorie</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>Évènement</td>
                                    <td class="table-action  text-center">
                                                <a href="#" class="text-fade text-success "><i class="align-middle"
                                                        data-feather="check"></i></a>
                                                <a href="parametrage_modifier_type_message.php" class="text-fade text-primary "><i
                                                        class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                        data-feather="trash"></i></a>
                                            </td>
                                </tr>
                                <tr>
                                    
                                    <td>Rappel</td>
                                    <td class="table-action  text-center">
                                                <a href="#" class="text-fade text-success "><i class="align-middle"
                                                        data-feather="check"></i></a>
                                                <a href="parametrage_modifier_type_message.php" class="text-fade text-primary "><i
                                                        class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                        data-feather="trash"></i></a>
                                            </td>
                                </tr>
                                <tr>
                                    
                                    <td>Observation</td>

                                  <td class="table-action  text-center">
                                                <a href="#" class="text-fade text-success "><i class="align-middle"
                                                        data-feather="check"></i></a>
                                                <a href="parametrage_modifier_type_message.php" class="text-fade text-primary "><i
                                                        class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                        data-feather="trash"></i></a>
                                            </td>
                                </tr>
                                <tr>
                                    
                                    <td>Réclamation</td>

                                  <td class="table-action  text-center">
                                                <a href="#" class="text-fade text-success "><i class="align-middle"
                                                        data-feather="check"></i></a>
                                                <a href="parametrage_modifier_type_message.php" class="text-fade text-primary "><i
                                                        class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                        data-feather="trash"></i></a>
                                            </td>
                                </tr>
                                <tr>
                                    
                                    <td>Comportement élève</td>

                                  <td class="table-action  text-center">
                                                <a href="#" class="text-fade text-success "><i class="align-middle"
                                                        data-feather="check"></i></a>
                                                <a href="parametrage_modifier_type_message.php" class="text-fade text-primary "><i
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
            <div class="row  ">
                <div class=" d-flex flex-row justify-content-end ">
                    <a href="parametrage_ajouter_type_message.php">
                        <button type="submit" class="btn btn-primary mb-3 mx-3">
                           <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                        </button></a>
                </div>

            </div>
        </section>
    </div>
</div>


<?php include"include/footer.php";?>