<?php include"include/header.php";?>
<?php include"include/menu.php";?>
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Elève</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                        <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="eleve_ecole_liste_matiere.php">École</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="eleve_ecole_liste_matiere.php">Liste de mes matières</a></li>
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
                        <table class="mx-auto my-4 text-fade table " style="width: 70%;">
                                    <thead class="bg-success">
                                        <tr>
                                            <th>#</th>
                                            <th>Nom de matière</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mathématique</td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Arabe</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Physique</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Géographie</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SVT</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                </div>
            </div>
        </section>
    </div>
</div>
<?php include"include/footer.php";?>