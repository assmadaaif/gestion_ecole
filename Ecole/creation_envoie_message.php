<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/header.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/menu_ecole.php"; ?>




<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Parametre</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Messagerie</li>
                                <li class="breadcrumb-item active" aria-current="page"> Gestion des droits de création et d’envoie.</li>
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


                                <div class="col-md-3">
                                    <div class="form-group ">
                                        <label class="form-label">Le gérant <span class="text-danger">*</span></label>
                                        <div class="controls">
                                            <div class="demo-checkbox ">
                                                <input type="checkbox" id="md_checkbox_21"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_21">Touts</label>
                                                <input type="checkbox" id="md_checkbox_23"
                                                    class="filled-in chk-col-success">
                                                <label for="md_checkbox_23">Ecole</label>
                                                <input type="checkbox" id="md_checkbox_24"
                                                    class="filled-in chk-col-info">
                                                <label for="md_checkbox_24">Professeur</label>
                                                <input type="checkbox" id="md_checkbox_27"
                                                    class="filled-in chk-col-warning">
                                                <label for="md_checkbox_27">Eleve</label>
                                                <input type="checkbox" id="md_checkbox_29"
                                                    class="filled-in chk-col-danger">
                                                <label for="md_checkbox_29">Parent</label>
                                            </div>


                                        </div>
                                    </div>
                              </div>
                                <div class="col-md-3">
                                    <div class="form-group ">
                                        <label class="form-label">Le Professeur <span class="text-danger">*</span></label>
                                        <div class="controls">
                                            <div class="demo-checkbox ">
                                                <input type="checkbox" id="md_checkbox_30"
                                                    class="filled-in chk-col-primary" >
                                                <label for="md_checkbox_30">Touts</label>
                                                <input type="checkbox" id="md_checkbox_32"
                                                    class="filled-in chk-col-success" checked="">
                                                <label for="md_checkbox_32">Ecole</label>
                                                <input type="checkbox" id="md_checkbox_31"
                                                    class="filled-in chk-col-info" checked="">
                                                <label for="md_checkbox_31">Autres Professeur</label>
                                                <input type="checkbox" id="md_checkbox_33"
                                                    class="filled-in chk-col-warning" checked="">
                                                <label for="md_checkbox_33">Eleve</label>
                                                <input type="checkbox" id="md_checkbox_35"
                                                    class="filled-in chk-col-danger" checked="">
                                                <label for="md_checkbox_35">Parent</label>
                                            </div>


                                        </div>
                                    </div>
                              </div>
                                <div class="col-md-3">
                                    <div class="form-group ">
                                        <label class="form-label">Le Parent <span class="text-danger">*</span></label>
                                        <div class="controls">
                                            <div class="demo-checkbox ">
                                                <input type="checkbox" id="md_checkbox_37"
                                                    class="filled-in chk-col-primary" >
                                                <label for="md_checkbox_37">Touts</label>
                                                <input type="checkbox" id="md_checkbox_39"
                                                    class="filled-in chk-col-success" checked="">
                                                <label for="md_checkbox_39">Ecole</label>
                                                <input type="checkbox" id="md_checkbox_44"
                                                    class="filled-in chk-col-info" checked="">
                                                <label for="md_checkbox_44">Professeur</label>
                                                <input type="checkbox" id="md_checkbox_43"
                                                    class="filled-in chk-col-warning">
                                                <label for="md_checkbox_43">Eleve</label>
                                                <input type="checkbox" id="md_checkbox_41"
                                                    class="filled-in chk-col-danger">
                                                <label for="md_checkbox_41">Parent</label>
                                            </div>


                                        </div>
                                    </div>
                              </div>
                                <div class="col-md-3">
                                    <div class="form-group ">
                                        <label class="form-label">Elèves<span class="text-danger">*</span></label>
                                        <div class="controls">
                                            <div class="demo-checkbox ">
                                                <input type="checkbox" id="md_checkbox_36"
                                                    class="filled-in chk-col-primary" >
                                                <label for="md_checkbox_36">Touts</label>
                                                <input type="checkbox" id="md_checkbox_46"
                                                    class="filled-in chk-col-success" checked="">
                                                <label for="md_checkbox_46">Ecole</label>
                                                <input type="checkbox" id="md_checkbox_40"
                                                    class="filled-in chk-col-info"checked="">
                                                <label for="md_checkbox_40">Professeur</label>
                                                <input type="checkbox" id="md_checkbox_51"
                                                    class="filled-in chk-col-warning">
                                                <label for="md_checkbox_51">Eleve</label>
                                                <input type="checkbox" id="md_checkbox_29"
                                                    class="filled-in chk-col-danger"checked="">
                                                <label for="md_checkbox_29">Parent</label>
                                            </div>


                                        </div>
                                    </div>
                              </div>
                                








                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti-save-alt"></i> sauvgarder
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
