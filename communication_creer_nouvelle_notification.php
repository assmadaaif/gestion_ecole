<?php include"include/header.php";?>
<?php include"include/menu.php";?>
<div class="content-wrapper">
    <div class="container-full">
    <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Admin</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="">Communication</a> </li>
                                <li class="breadcrumb-item active" aria-current="page">Créer nouvelle Notifiation</li>
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
                        <div class="box-body">
                        <div class="px-4">
                            <div class="mt-30">
                                <h5 class="fs-18">Nouvelle notification</h5>

                                <hr />
                                <div>
                                    <form action="" class="form">
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
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h6 for="sujet" class="form-label ">Sujet de notification</h6>
                                            <textarea rows="5" id="sujet" class="form-control"></textarea>
                                        </div>
                                    </div>
                                   
                                    <div class=" row  mt-4">
                                        
                                        <h6 class="fs-14 px-3"> Traduire en</h6>
                                        <div class="col-lg-4 d-flex">
                                      
                                            <select class="selectpicker">
                                            <option>Français</option>
                                                <option>Anglais</option>
                                                <option>Arabe</option>
                                                <option>Italie</option>
                                            </select>

                                                 
                                            <button type="submit" class="btn btn-info ms-5">Traduire</button>
                                              
                                        </div>
                                        
                                        
                                        
                                    </div>
                                    <div class="mt-5">
                                    
                                    <div class="mt-30 mb-30">

                                        <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>
                                            Annuler</button>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>
                                            Créer</button>
                                    </div>
                                    </form>
                                </div>
                                <!-- end .mt-4 -->

                            </div>
                        </div>
                    </div>

                </div>
                
            </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
</div
<?php include"include/footer.php";?>
