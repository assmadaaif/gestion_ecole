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
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="parametrage_chat.php">Chat</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="parametrage_chat.php">Gestion des droits de chat.</a></li>
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
                                
                                    <div class="col-lg-12 form-group d-flex flex-row ">
                                        <label class="form-label col-lg-3">Le professeur à le droit de chater aux : </label>
                                       
                                            <div class="demo-checkbox d-flex flex-row justify-content-center ">
                                                <input type="checkbox" id="md_checkbox_32"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_32">École</label>
                                                <input type="checkbox" id="md_checkbox_31"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_31">Autres Professeurs</label>
                                                <input type="checkbox" id="md_checkbox_33"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_33">Élèves</label>
                                                <input type="checkbox" id="md_checkbox_35"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_35">Parents</label>
                                            </div>


                                       
                                    </div>
                             
                                    <div class="col-lg-12 form-group d-flex flex-row ">
                                        <label class="form-label col-lg-3">Le parent à le droit de chater aux : </label>
                                       
                                            <div class="demo-checkbox d-flex flex-row justify-content-center ">
                                                <input type="checkbox" id="md_checkbox_32"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_32">École</label>
                                                <input type="checkbox" id="md_checkbox_31"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_31">Professeurs</label>
                                          
                                            </div>


                                       
                                    </div>
                             
                                    <div class="col-lg-12 form-group d-flex flex-row ">
                                        <label class="form-label col-lg-3">L'élève à le droit de chater aux : </label>
                                       
                                            <div class="demo-checkbox d-flex flex-row justify-content-center ">
                                                <input type="checkbox" id="md_checkbox_32"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_32">École</label>
                                                <input type="checkbox" id="md_checkbox_31"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_31"> Professeurs</label>
                                               
                                                <input type="checkbox" id="md_checkbox_35"
                                                    class="filled-in chk-col-primary" checked="">
                                                <label for="md_checkbox_35">Parents</label>
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
    </div>
</div>


<?php include"include/footer.php";?>

