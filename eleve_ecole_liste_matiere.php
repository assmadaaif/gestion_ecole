<?php include"include/header.php";?>
<?php include"include/menu.php";?>
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Élève</h4>
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
                <div class="box-body pe-30 row">
                <div class="col-md-12 mx-auto">
                    
                    <div class="table-responsive ">
                    <table id ="example" class="text-fade table table-bordered display" style="width: 100%;">
                                <thead class="bg-primary">
                                    <tr>
                                            <th>Nom de matière</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                    
                                            <td>Mathématique</td>

                                        </tr>
                                        <tr>
                                    
                                            <td>Arabe</td>
                                        </tr>
                                        <tr>
                                    
                                            <td>Physique</td>
                                        </tr>
                                        <tr>
                                    
                                            <td>Géographie</td>
                                        </tr>
                                        <tr>
                                    
                                            <td>SVT</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include"include/footer.php";?>