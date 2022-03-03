<?php include"include/header.php";?>
<?php include"include/menu.php";?>

<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Parent</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="eleve_ecole_liste_parent.php">Localisation</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="eleve_ecole_liste_parent.php">Transport de mes élèves</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <section class="content">
            <div class="box">

                <div class="card-body">
                    <table class="table  table-bordered">
                        <thead>
                            <tr>
                                <th class="bg-success">Id</th>
                                <th class="bg-success">Élève</th>
                                <th class="bg-success">Code de véhicule</th>
                                <th class="bg-success">Description</th>
                                <th class="bg-success">Chauffeur</th>
                                <th class="bg-success">frais</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Salma NACIRI</td>
                                <td >BC 335 AC</td>
                                <td class="table-action min-w-100">itinéraire du centre-ville à l'emplacement de l'école
                                </td>
                                <td >Salah MOHAMED</td>
                                <td >3500 DH</td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mohamed NACIRI</td>
                                <td >BC 335 HH</td>
                                <td class="table-action min-w-100">itinéraire du centre-ville à l'emplacement de l'école
                                </td>
                                <td >Salah MOHAMED</td>
                                <td >3500 DH</td>

                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </section>
    </div>
</div>
<?php include"include/footer.php";?>