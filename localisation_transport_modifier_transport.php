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
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="ecole_localisation_transport_list_transport.php">Transport</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="">Ajouter un
                                        transport</a></li>
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
                                        <label class="form-label">Code de Véhicule</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-bus"
                                                    aria-hidden="true"></i></span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Frais</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-money"
                                                    aria-hidden="true"></i></span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <h6 class="text-primary my-5">Ajouter un chauffeur</h6>
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
                                        <label for="" class="form-label ">Sexe</label>


                                        <div class="input-group mb-3">
                                            <input name="group1" type="radio" id="Option_1">
                                            <label for="Option_1"> Homme</label>


                                            <input name="group1" type="radio" id="Option_2">
                                            <label for="Option_2">Femme</label>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Adresse</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label mt-3">Date de naissance</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>

                                </div>

                           

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" name="" id="" cols="30" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="form-label">Date d'inscription</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                                            <input type="date" class="form-control">
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
                                        <label class="form-label mt-3">Teléphone</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-mobile"></i></span>
                                            <input type="tel" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label mt-3"> Photo</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-image"></i></span>
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                            </div>
                       </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                       
                        <button type="submit" class="btn btn-primary">
                            <i class="ti-save-alt"></i> Enregistrer
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

<?php include"include/footer.php";?>