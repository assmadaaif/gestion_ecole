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
                                        href="parametrage_notifications.php">Notifications</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="parametrage_notifications.php">Gestion des droits de création et
                                        d’envoie.</a></li>
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
                        <div class="box-body">
                            <div class="row my-5">
                                <form action="" class="form">
                                    <div class="form-group my-10 ">
                                        <label class="form-label fs-15">Le professeur a le droit de créer et d'envoyer aux :</label>
                                        <div class="demo-checkbox mt-3">
                                            <input type="checkbox" id="md_checkbox_32" class="filled-in chk-col-primary"
                                                checked="">
                                            <label  for="md_checkbox_32">École</label>
                                            <input type="checkbox" id="md_checkbox_31" class="filled-in chk-col-primary"
                                                checked="">
                                            <label  for="md_checkbox_31">Autres Professeurs</label>
                                            <input type="checkbox" id="md_checkbox_33" class="filled-in chk-col-primary"
                                                checked="">
                                            <label  for="md_checkbox_33">Élèves</label>
                                            <input type="checkbox" id="md_checkbox_35" class="filled-in chk-col-primary"
                                                checked="">
                                            <label  for="md_checkbox_35">Parents</label>
                                        </div>
                                    </div>
                                    <div class="form-group my-10 ">
                                    <label class="form-label fs-15 ">Le parent a le droit de créer et d'envoyer aux : </label>
                                       
                                       <div class="demo-checkbox mt-3 ">
                                           <input type="checkbox" id="md_checkbox_39"
                                               class="filled-in chk-col-primary" checked="">
                                           <label for="md_checkbox_39">École</label>
                                           <input type="checkbox" id="md_checkbox_37"
                                               class="filled-in chk-col-primary" checked="">
                                           <label for="md_checkbox_37">Professeurs</label>
                                        </div>
                                    </div>
                                    <label class="form-label fs-15 ">L'élève a le droit de créer et d'envoyer aux : </label>
                                       
                                       <div class="demo-checkbox mt-3 ">
                                       <input type="checkbox" id="md_checkbox_12"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_12">École</label>
                                                <input type="checkbox" id="md_checkbox_44"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_44"> Professeurs</label>
                                               
                                                <input type="checkbox" id="md_checkbox_30"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_30">Parents</label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-2 ">
                                            <button type="submit" class="btn btn-primary"> <i class="fa fa-save"
                                                    aria-hidden="true"></i>
                                                Enregistrer
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
    </div>
</div>


<?php include"include/footer.php";?>