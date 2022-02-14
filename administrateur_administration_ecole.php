<?php include"include/header.php";?>
<?php include"include/menu.php";?>

<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Admin</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="administrateur_administration_ecole.php">Ecole</a> </li>

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
                        <form action="" class="form">
                            <div class="form-group my-10 ">
                                <label class="form-label">Langue utilisée par l'école:</label>
                                <div class="c-inputs-stacked">
                                    <input type="checkbox" id="checkbox_123">
                                    <label for="checkbox_123" class="me-30">Farnçais</label>
                                    <input type="checkbox" id="checkbox_234">
                                    <label for="checkbox_234" class="me-30">Anglais</label>
                                    <input type="checkbox" id="checkbox_345">
                                    <label for="checkbox_345" class="me-30">Arabe</label>
                                    <input type="checkbox" id="checkbox_456">
                                    <label for="checkbox_456" class="me-30">Espagne</label>
                                    <input type="checkbox" id="checkbox_567">
                                    <label for="checkbox_567" class="me-30">Italique</label>
                                    <input type="checkbox" id="checkbox_678">
                                    <label for="checkbox_678" class="me-30">Japonaise</label>
                                </div>
                            </div>
                            <div class="form-group my-30">
                                <label class="form-label"> Langue par defaut :</label>
                                <div class="c-inputs-stacked">
                                    <input type="checkbox" id="checkbox_789" checked>
                                    <label for="checkbox_789" class="me-30">Farnçais(par defaut)</label>
                                    <input type="checkbox" id="checkbox_8910">
                                    <label for="checkbox_8910" class="me-30">Anglais</label>
                                    <input type="checkbox" id="checkbox_9101">
                                    <label for="checkbox_9101" class="me-30">Arabe</label>
                                    <input type="checkbox" id="checkbox_1012">
                                    <label for="checkbox_1012" class="me-30">Espagne</label>
                                    <input type="checkbox" id="checkbox_1123">
                                    <label for="checkbox_1123" class="me-30">Italique</label>
                                    <input type="checkbox" id="checkbox_1234">
                                    <label for="checkbox_1234" class="me-30">Japonaise</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 ">
                                    <button type="submit" class="btn btn-primary">
                                        valider
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mb-30 ">
                <div class="col-lg-8 ms-5">
                    <div class="row">
                    <div class="col-lg-4">
                        <a href="administrateur_administration_ajouter_gerant.php" class="btn btn-success"> Ajouter un gérant</a>
                    </div>
                    <div class="col-lg-4">
                        <a href="administrateur_administration_liste_ecole.php" class="btn btn-warning"> liste des ecoles</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
           
        </section>
    </div>
</div>
<?php include"include/footer.php";?>