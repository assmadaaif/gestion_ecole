<?php 
include('../../config.php');
include $_SERVER["DOCUMENT_ROOT"] . "/include/header.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/menu_admin.php"; ?>



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
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Ecole</li>
                                <li class="breadcrumb-item active" aria-current="page"> ajouter l'inscription de gerant</li>
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
                                        <label class="form-label"> école</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-book"></i></span>
                                            <select class="form-select">
                                            <option>Nom ecole</option>

                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"> Anneé scolaire</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                                            <select class="form-select">
                                            <option>2020-2021</option>

                                        </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                  
                                <div class="form-group">
                                        <label class="form-label">date d'inscription</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Etat</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                
                                <button type="reset" class="btn btn-primary-light me-1">
                                    <i class="ti-trash"></i> Anuuler
                                </button>
                                <a href="liste_gerant.php" class="btn btn-primary">
                               
                                    <i class="ti-save-alt"></i> ajouter
                                
                            </a>
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
