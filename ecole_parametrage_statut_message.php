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
                                <li class="breadcrumb-item" aria-current="page"><a href="ecole_parametrage_statut_message.php">Status des messages</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="ecole_parametrage_statut_message.php">Status</a></li>
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
                  
                    <div class="card-body">
							<table class="table table-bordered">
								<thead>
                                <tr>
                                            <th>#</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
								</thead>
                                <tbody>
                                        <tr>
                                            <td>1</td>
                                        <td>Crée</td>
                                        <td class="table-action ">
                                            <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                        data-feather="trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                        <td>Envoyée</td>
                                        <td class="table-action ">
                                                
                                                  <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                        data-feather="trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                        <td>Reçue</td>

                                            <td class="table-action ">
                                              
                                                       <a href="#" class="text-fade text-danger me-2"><i class="align-middle"
                                                        data-feather="trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                        <td>Vue</td>

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
            <div class="row">
                <div class=" d-flex flex-row justify-content-end ">
                    <a href="ecole_parametrage_ajouter_status_message.php">
                        <button type="submit" class="btn btn-primary mt-3 mx-3">
                           <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                        </button></a>
              </div>

            </div>
        </section>
    </div>
</div>


<?php include"include/footer.php";?>

