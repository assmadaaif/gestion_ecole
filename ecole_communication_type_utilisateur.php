<?php include"include/header.php";?>
<?php include"include/menu.php";?>



<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="box">
                        <form action="">
                            <div href="javascript:void(0);" class="media p-0 card px-5">
                                <div class="w-p100 d-flex align-items-center m-1 p-2">

                                    <div class="w-p100 overflow-hidden">
                                        <h5 class="mt-0 mb-0 fs-15 fw-600">
                                            <span class="float-end text-muted fs-12 fw-400">17h 10min 6s</span>
                                            De : Ahmed Sefrioui <br>

                                        </h5>
                                        <h6 class="text-primary mt-5"> École : Ibn Zohr</h6>
                                        <p class="mt-1 mb-0 text-muted fs-15">
                                            <span class="w-75">Par la présente, nous vous informons que nous avons décidé de
                                                prendre à votre encontre une mesure disciplinaire eu égard à votre
                                                comportement fautif que vous avez eu, à savoir (Préciser les faits). La
                                                sanction retenue à cet effet est un avertissement</span>
                                            <span class=" d-flex flex-wrap-nowrap float-end text-end mt-3">
                                                <span class="badge badge-warning-light mx-3">Prévu</span>
                                                <span class="badge badge-success-light ">Rappel</span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 m-10">
                                <h6 class="m-10 fs-15 text-primary">Envoyer au formateur :</h6>
                                <select class="selectpicker mb-3">
                                    <option value=""></option>
                                    <option>Tout les formateur</option>
                                    <option>Formateur </option>
                                    
                                </select>
        
                            </div>
                            <div class="col-lg-4 m-10">
                                <h6 class="m-10 fs-15 text-primary">Envoyer au parent :</h6>
                                <select class="selectpicker mb-3">
                                    <option value=""></option>
                                    <option>Tout les parent</option>
                                    <option>Parent</option>
                                    
                                </select>
        
                            </div>
                            <div class="col-lg-4 m-10">
                                <h6 class="m-10 fs-15 text-primary">Envoyer au élève :</h6>
                                <select class="selectpicker mb-3">
                                    <option value=""></option>
                                    <option>Tout les élève</option>
                                    <option>Elève</option>
                                    
                                </select>
        
                            </div>
                            
                           
                            <a href="communication_mes_notification.php">
                                <button type="submit" class="m-3 btn btn btn-success">
                                    <i class="fa fa-send"></i> Envoyer</button>

                            </a>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
</div>
<?php include"include/footer.php";?>