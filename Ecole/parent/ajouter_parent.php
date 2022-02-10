<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/header.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/menu_ecole.php"; ?>




<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Ecole</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">parent</li>
                                <li class="breadcrumb-item active" aria-current="page">Ajouter parent</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <form class="form">
                            <div class="box-body row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Nom</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Prenom</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group  ">
                                        <label for="" class="form-label ">sexe</label>


                                        <div class="input-group mb-3">
                                            <input name="group1" type="radio" id="Option_1">
                                            <label for="Option_1"> homme</label>


                                            <input name="group1" type="radio" id="Option_2">
                                            <label for="Option_2">femme</label>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label ">date de naissance</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"> Photo</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-image"></i></span>
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label ">Date d'inscription</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Année scolaire</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                            <select class="selectpicker form-select">
                                            <option>2021-2022</option>

                                        </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">adresse</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-email"></i></span>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">teléphone</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-mobile"></i></span>
                                            <input type="tel" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"> Mot de pass</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-lock"></i></span>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label"> type utilisateur</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                            <select class="selectpicker form-select">
                                                <option>parent</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"> type parent</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>



                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="button" class="btn btn-primary-light me-1">
                                    <i class="ti-trash"></i> Anuuler
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti-save-alt"></i> Sauvgarder
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>


<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/footer.php"; ?>
