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
                                <li class="breadcrumb-item" aria-current="page">Transport</li>
                                <li class="breadcrumb-item active" aria-current="page">Liste des véhicules</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-body pe-30">
                    <div class="table-responsive">
                        <table class="mx-auto my-4 text-fade table " style="width: 100%;">
                            <thead class="bg-success">
                                <tr>
                                    <th>#</th>
                                    <th>Code de véhicule</th>
                                    <th>Description</th>
                                    <th>Chauffeur</th>
                                    <th>Frais</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>BC 335 AC</td>

                                    <td>itinéraire du centre-ville à l'emplacement de l'école</td>
                                    <th>Mohammed sSlimani</th>
                                    <th>3500DH</th>
                                    <td class="d-flex flex-row table-action text-center ">
                                        <a href="#" class="text-fade text-success "><i class="align-middle"
                                                data-feather="check"></i></a>
                                        <a href="ecole_localisation_transport_modifier_transport.php"
                                            class="text-fade text-primary "><i class="align-middle"
                                                data-feather="edit-2"></i></a>
                                        <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                data-feather="trash"></i></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>BC 335 AC</td>

                                    <td>itinéraire du centre-ville à l'emplacement de l'école</td>
                                    <th>Samir Dhmani</th>
                                    <td>5446DH</td>
                                    <td class=" d-flex flex-row table-action text-center ">
                                        <a href="#" class="text-fade text-success "><i class="align-middle"
                                                data-feather="check"></i></a>
                                        <a href="ecole_localisation_transport_modifier_transport.php"
                                            class="text-fade text-primary "><i class="align-middle"
                                                data-feather="edit-2"></i></a>
                                        <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                data-feather="trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>3 </th>
                                    <td>BA 776 DC</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <th>Oussama Quafil</th>
                                    <td>5446DH</td>

                                    <td class="d-flex flex-row table-action text-center ">
                                        <a href="#" class="text-fade text-success "><i class="align-middle"
                                                data-feather="check"></i></a>
                                        <a href="ecole_localisation_transport_modifier_transport.php"
                                            class="text-fade text-primary "><i class="align-middle"
                                                data-feather="edit-2"></i></a>
                                        <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                data-feather="trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>4 </th>
                                    <td>BA 7624 HG</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <th>Yassine Zaid</th>
                                    <td>5446DH</td>

                                    <td class="d-flex flex-row table-action text-center ">
                                        <a href="#" class="text-fade text-success "><i class="align-middle"
                                                data-feather="check"></i></a>
                                        <a href="ecole_localisation_transport_modifier_transport.php"
                                            class="text-fade text-primary "><i class="align-middle"
                                                data-feather="edit-2"></i></a>
                                        <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                data-feather="trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>5 </th>
                                    <td>BA 776 DC</td>

                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <th>Mostafa Yahya</th>
                                    <td>5446DH</td>

                                    <td class="d-flex flex-row table-action text-center ">
                                        <a href="#" class="text-fade text-success "><i class="align-middle"
                                                data-feather="check"></i></a>
                                        <a href="ecole_localisation_transport_modifier_transport.php"
                                            class="text-fade text-primary "><i class="align-middle"
                                                data-feather="edit-2"></i></a>
                                        <a href="#" class="text-fade text-danger "><i class="align-middle"
                                                data-feather="trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="row  pb-5">
                    <div class=" d-flex flex-row justify-content-end ">
                        <a href="ecole_localisation_transport_ajouter_transport.php">
                            <button type="submit" class="btn btn-primary mx-3 my-3">
                                <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                            </button></a>


                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
<?php include"include/footer.php";?>