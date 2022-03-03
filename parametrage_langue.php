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
                                        href="parametrage_langue.php">Langues</a> </li>

                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-body">
                    <div class="row my-5">
                        <form action="" class="form">
                            <div class="form-group my-10 ">
                                <label class="form-label">Langues utilisées :</label>
                                <div class="c-inputs-stacked">
                                    <input type="checkbox" id="checkbox_123">
                                    <label for="checkbox_123" class="me-30">Farnçais</label>
                                    <input type="checkbox" id="checkbox_234">
                                    <label for="checkbox_234" class="me-30">Anglais</label>
                                    <input type="checkbox" id="checkbox_345">
                                    <label for="checkbox_345" class="me-30">Arabe</label>
                                    <input type="checkbox" id="checkbox_456">
                                    <label for="checkbox_456" class="me-30">Espagne</label>
                                    <input type="checkbox" id="checkbox_567">
                                    <label for="checkbox_567" class="me-30">Italique</label>
                                    <input type="checkbox" id="checkbox_678">
                                    <label for="checkbox_678" class="me-30">Japonaise</label>
                                </div>
                            </div>
                            <div class="form-group my-30">
                                <label class="form-label"> Langue par defaut :</label>
                                <div class="form-group">
                                      <input name="group1" type="radio" id="Option_1" checked >
									  <label class="me-3" for="Option_1"> Français(Langue par défaut)</label>                    
								  
								  
									  <input name="group1" type="radio" id="Option_2">
									  <label class="me-3" for="Option_2">Anglais</label>   
								  
									  <input name="group1" type="radio" id="Option_3">
									  <label class="me-3" for="Option_3">Arabe</label>   
								  
									  <input name="group1" type="radio" id="Option_4">
									  <label class="me-3" for="Option_4">Espagne</label>   
								  
									  <input name="group1" type="radio" id="Option_5">
									  <label class="me-3" for="Option_5">Japonaise</label>   
								  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 ">
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-save" aria-hidden="true"></i>
                                       Enregistrer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>
<?php include"include/footer.php";?>