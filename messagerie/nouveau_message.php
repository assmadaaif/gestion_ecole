<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/header.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/menu_eleve.php"; ?>


<!-- Left side column. contains the logo and sidebar -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="box">
                        <div class="px-4">
                            <div class="mt-30">
                                <h5 class="fs-18">Nouveau Message</h5>

                                <hr />
                                <div>
                                    <div class="row d-flex justify-content-start mb-4">
                                        <div class="col-lg-2 ">
                                            <h6 class="my-10  fs-14 ">Categorie </h6>
                                            <select class="selectpicker">
                                                <option>Evenement</option>
                                                <option>Rapel</option>
                                                <option>Observation</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 ">
                                            <h6 class="my-10 fs-14">Niveau </h6>
                                            <select class="selectpicker">
                                                <option>Urgent</option>
                                                <option>dés que possible</option>
                                                <option>Prévu</option>
                                            </select>

                                        </div>
                                        
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-8">
                                            <h6 for="sujet" class="form-label ">sujet de message</h6>
                                            <textarea rows="5" id="sujet" class="form-control"></textarea>
                                        </div>
                                    </div>
                                   
                                    <div class=" row d-flex align-items-center mt-4">
                                        
                                        <div class="col-lg-3">
                                            <ul class="nav navbar-nav">
                                                <li class="btn-group d-xl-inline-flex d-none">
                                            <h6 class="fs-14 px-3">langue de message</h6>

                                                    <a href="#" class="w-20 rounded me-10" data-bs-toggle="dropdown">
                                                        <img class="rounded-circle"
                                                            src="../images/svg-icon/usa.svg" alt="">
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item my-5" href="#"><img
                                                                class="w-20 rounded me-10"
                                                                src="../images/svg-icon/usa.svg" alt="">
                                                            English</a>
                                                        <a class="dropdown-item my-5" href="#"><img
                                                                class="w-20 rounded me-10"
                                                                src="../images/svg-icon/spain.svg" alt="">
                                                            Spanish</a>
                                                        <a class="dropdown-item my-5" href="#"><img
                                                                class="w-20 rounded me-10"
                                                                src="../images/svg-icon/ger.svg" alt="">
                                                            German</a>
                                                        <a class="dropdown-item my-5" href="#"><img
                                                                class="w-20 rounded me-10"
                                                                src="../images/svg-icon/jap.svg" alt="">
                                                            Japanese</a>
                                                        <a class="dropdown-item my-5" href="#"><img
                                                                class="w-20 rounded me-10"
                                                                src="../images/svg-icon/fra.svg" alt="">
                                                            French</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                    
                                    <div class="mt-30 mb-30">

                                        <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>
                                            Annuler</button>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>
                                            Créer</button>
                                    </div>
                                </div>
                                <!-- end .mt-4 -->

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->
<!-- Side panel -->
<!-- quick_user_toggle -->


<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/footer.php"; ?>
