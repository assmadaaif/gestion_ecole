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
                                        href="parametrage_liste_matiere.php">Matières</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="parametrage_modifier_matiere.php">Modifier matière</a></li>
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
                            <div class="box-body row ">
                                <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <label class="form-label">Nom de Matière </label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Nom</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="form-label"> École</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                                            <select class="selectpicker form-select">
                                                <option> Ibn Zohr</option>
                                                <option> EL Idrissi</option>
                                                <option> El Motanabi</option>

                                            </select>
                                        </div>
                                    </div>



                                </div>





                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save"></i> Enregistrer
                                </button>
                            </div>

                        </form>
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
            </div>
    </div>
    </section>
    <!-- /.content -->
</div>
</div>


<?php include"include/footer.php";?>