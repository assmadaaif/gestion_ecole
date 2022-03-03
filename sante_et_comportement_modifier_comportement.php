<?php include"include/header.php";?>
<?php include"include/menu.php";?>
<div class="content-wrapper">
    <div class="container-full">
    <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="sante_et_comportement_list_comportement.php">Liste des comportements</a> </li>
                                <li class="breadcrumb-item active" aria-current="page">Modifier comportement </li>
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
                                <h5 class="fs-18">Modifier le  Comportement</h5>

                                <hr />
                                <div>
                                    <form action="" class="form">
                                    <div class="row d-flex justify-content-start mb-4">
                                        <div class="col-lg-6 ">
                                            <h6 class="my-10  fs-14 ">Classe </h6>
                                            <select class="selectpicker">
                                                <option>Classe1</option>
                                                <option>Classe2</option>
                                                <option>Classe3</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <h6 class="my-10 fs-14">Élève </h6>
                                            <select class="selectpicker">
                                                <option>Ahmed Shaquiri</option>
                                                <option>Yassine Monfil</option>
                                                <option>Ziyad Lachhab</option>
                                            </select>

                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 for="sujet" class="form-label ">Comportement</h6>
                                            <textarea rows="5" id="sujet" class="form-control"></textarea>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="mt-5">
                                    
                                    <div class="mt-30 mb-30">

                                      
                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>
                                            Enregistrer</button>
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
