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
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a href="">Communication</a> </li>
                                <li class="breadcrumb-item active" aria-current="page">Mes notifiations</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="box">
                        <div class="box-header no-border p-0">
                            <ul class="nav nav-tabs nav-bordered" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#contacts"
                                        role="tab">Notifications crées</a> </li>
                                <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab" href="#messages"
                                        role="tab">Notifications envoyées</a> </li>
                            </ul>
                        </div>
                        <div class="box-body">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="contacts" role="tabpanel">
                                    <div class="chat-box-one-side3">
                                        <div class="media-list media-list-hover">
                                            <div class=" card media p-0">
                                                <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                    <div class="w-p100  overflow-hidden">

                                                        <span class="text-muted   ">12h
                                                            30min 17s</span>
                                                        <p class="mt-1 mb-0 text-muted fs-14">
                                                            <span class="w-75 text-muted mt-5">Lorem ipsum dolor sit
                                                                amet
                                                                consectetur adipisicing elit. Beatae tempora nisi,
                                                                laudantium, quidem magnam ipsum ad ab iste est
                                                                doloremque adipisci impedit ipsam deleniti labore hic
                                                                cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                        </p>
                                                        <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                            <span
                                                                class=" d-flex flex-wrap-nowrap float-start text-start mt-3">

                                                                <span
                                                                    class="badge badge-success-light me-3  min-w-100">Prèvu</span>
                                                                <span class="badge badge-primary-light  min-w-100">Urgent</span>


                                                            </span>

                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="mt-20 d-flex flex-row justify-content-center mb-10">
                                                    <form action="communication_type_utilisateur.php">

                                                        <button type="submit" class="me-3 btn btn-sm btn-success">
                                                            <i class="fa fa-send"></i> Envoyer</button>


                                                    </form>
                                                    <form action="communication_modifier_notification.php">

                                                        <button type="submit" class="me-3 btn btn-sm btn-primary">
                                                            <i class="fa fa-edit"></i> Modifier</button>




                                                    </form>
                                              <form action="">
                                                        <button type="button" class="me-3 btn btn-sm btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#bs-example-modal-sm"><i class="fa fa-trash" aria-hidden="true"></i>  Supprimer</button>
                                                        <div class="modal fade" id="bs-example-modal-sm" tabindex="-1"
                                                            role="dialog" aria-labelledby="mySmallModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="mySmallModalLabel">
                                                                        Avertissement</h4>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-hidden="true"></button>
                                                                    </div>
                                                                    <div class="modal-body text-danger">
                                                                    Voulez-vous vraiment supprimer ?
                                                                    </div>
                                                                    <div class="modal-footer">
																	<button type="button" class="btn btn-primary-light"
																		data-bs-dismiss="modal">Non</button>
																	<button type="button" class="btn btn-primary">Oui
																	</button>
																</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <form action="communication_traduire_notification.php">

                                                        <button type="submit" class="me-3 btn btn-sm btn-info">
                                                            <i class="fa fa-edit"></i> Traduire</button>


                                                    </form>
                                                </div>
                                            </div>
                                            <div class=" card media p-0">
                                                <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                    <div class="w-p100  overflow-hidden">

                                                        <span class="text-muted   ">Le Lundi 14 janvier à 18h 38min
                                                            15s</span>
                                                        <p class="mt-1 mb-0 text-muted fs-14">
                                                            <span class="w-75 text-muted mt-5">Lorem ipsum dolor sit
                                                                amet
                                                                consectetur adipisicing elit. Beatae tempora nisi,
                                                                laudantium, quidem magnam ipsum ad ab iste est
                                                                doloremque adipisci impedit ipsam deleniti labore hic
                                                                cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                        </p>
                                                        <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                            <span
                                                                class=" d-flex flex-wrap-nowrap float-start text-start mt-3">

                                                                <span
                                                                    class="badge badge-success-light me-3  min-w-100">Prèvu</span>
                                                                <span
                                                                    class="badge badge-primary-light  min-w-100">Observation</span>


                                                            </span>

                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="mt-20 d-flex flex-row justify-content-center mb-10">
                                                    <form action="communication_type_utilisateur.php">

                                                        <button type="submit" class="me-3 btn btn-sm btn-success">
                                                            <i class="fa fa-send"></i> Envoyer</button>


                                                    </form>
                                                    <form action="communication_modifier_notification.php">

                                                        <button type="submit" class="me-3 btn btn-sm btn-primary">
                                                            <i class="fa fa-edit"></i> Modifier</button>




                                                    </form>
                                              <form action="">
                                                        <button type="button" class="me-3 btn btn-sm btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#bs-example-modal-sm"><i class="fa fa-trash" aria-hidden="true"></i>  Supprimer</button>
                                                        <div class="modal fade" id="bs-example-modal-sm" tabindex="-1"
                                                            role="dialog" aria-labelledby="mySmallModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="mySmallModalLabel">
                                                                        Avertissement</h4>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-hidden="true"></button>
                                                                    </div>
                                                                    <div class="modal-body text-danger">
                                                                    Voulez-vous vraiment supprimer ?
                                                                    </div>
                                                                    <div class="modal-footer">
																	<button type="button" class="btn btn-primary-light"
																		data-bs-dismiss="modal">Non</button>
																	<button type="button" class="btn btn-primary">Oui
																	</button>
																</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <form action="communication_traduire_notification.php">

                                                        <button type="submit" class="me-3 btn btn-sm btn-info">
                                                            <i class="fa fa-edit"></i> Traduire</button>


                                                    </form>
                                                </div>
                                            </div>
                                            <div class=" card media p-0">
                                                <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                    <div class="w-p100  overflow-hidden">

                                                        <span class="text-muted   "> Le Samedi 7 janvier à12h
                                                            30min 17s</span>
                                                        <p class="mt-1 mb-0 text-muted fs-14">
                                                            <span class="w-75 text-muted mt-5">Lorem ipsum dolor sit
                                                                amet
                                                                consectetur adipisicing elit. Beatae tempora nisi,
                                                                laudantium, quidem magnam ipsum ad ab iste est
                                                                doloremque adipisci impedit ipsam deleniti labore hic
                                                                cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                        </p>
                                                        <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                            <span
                                                                class=" d-flex flex-wrap-nowrap float-start text-start mt-3">

                                                                <span class="badge badge-success-light me-3  min-w-100">Dés que
                                                                    possible</span>
                                                                <span
                                                                    class="badge badge-primary-light  min-w-100">Observation</span>


                                                            </span>

                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="mt-20 d-flex flex-row justify-content-center mb-10">
                                                    <form action="communication_type_utilisateur.php">

                                                        <button type="submit" class="me-3 btn btn-sm btn-success">
                                                            <i class="fa fa-send"></i> Envoyer</button>


                                                    </form>
                                                    <form action="communication_modifier_notification.php">

                                                        <button type="submit" class="me-3 btn btn-sm btn-primary">
                                                            <i class="fa fa-edit"></i> Modifier</button>




                                                    </form>
                                                    <form action="">
                                                        <button type="button" class="me-3 btn btn-sm btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#bs-example-modal-sm"><i class="fa fa-trash" aria-hidden="true"></i>  Supprimer</button>
                                                        <div class="modal fade" id="bs-example-modal-sm" tabindex="-1"
                                                            role="dialog" aria-labelledby="mySmallModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="mySmallModalLabel">
                                                                        Avertissement</h4>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-hidden="true"></button>
                                                                    </div>
                                                                    <div class="modal-body text-danger">
                                                                    Voulez-vous vraiment supprimer ?
                                                                    </div>
                                                                    <div class="modal-footer">
																	<button type="button" class="btn btn-primary-light"
																		data-bs-dismiss="modal">Non</button>
																	<button type="button" class="btn btn-primary">Oui
																	</button>
																</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <form action="communication_traduire_notification.php">

                                                        <button type="submit" class="me-3 btn btn-sm btn-info">
                                                            <i class="fa fa-edit"></i> Traduire</button>


                                                    </form>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="messages" role="tabpanel">

                                    <div class="chat-box-one-side3">
                                        <a href="communication_notificationEnvoyee_list.php" class=" card media p-0">
                                            <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                <div class="w-p100  overflow-hidden">

                                                    <span class="text-muted   ">11h 38min 15s</span>
                                                    <p class="mt-1 mb-0 text-muted fs-14">
                                                        <span class="w-75 text-muted mt-5">Lorem ipsum dolor sit
                                                            amet
                                                            consectetur adipisicing elit. Beatae tempora nisi,
                                                            laudantium, quidem magnam ipsum ad ab iste est
                                                            doloremque adipisci impedit ipsam deleniti labore hic
                                                            cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                    </p>
                                                    <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                        <span
                                                            class=" d-flex flex-wrap-nowrap float-start text-start mt-3">

                                                            <span class="badge badge-success-light me-3 min-w-100">Prèvu</span>
                                                            <span class="badge badge-primary-light min-w-100">Urgent</span>


                                                        </span>

                                                    </h5>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="communication_notificationEnvoyee_list.php" class=" card media p-0">
                                            <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                <div class="w-p100  overflow-hidden">

                                                    <span class="text-muted   "> 18h 38min 15s</span>
                                                    <p class="mt-1 mb-0 text-muted fs-14">
                                                        <span class="w-75 text-muted mt-5">Lorem ipsum dolor sit
                                                            amet
                                                            consectetur adipisicing elit. Beatae tempora nisi,
                                                            laudantium, quidem magnam ipsum ad ab iste est
                                                            doloremque adipisci impedit ipsam deleniti labore hic
                                                            cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                    </p>
                                                    <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                        <span
                                                            class=" d-flex flex-wrap-nowrap float-start text-start mt-3">

                                                            <span class="badge badge-success-light me-3 min-w-100">Urgent</span>
                                                            <span class="badge badge-primary-light min-w-100">Observation</span>


                                                        </span>

                                                    </h5>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="communication_notificationEnvoyee_list.php" class=" card media p-0">
                                            <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                <div class="w-p100  overflow-hidden">

                                                    <span class="text-muted   ">Le Lundi 14 janvier à 18h 38min
                                                        15s</span>
                                                    <p class="mt-1 mb-0 text-muted fs-14">
                                                        <span class="w-75 text-muted mt-5">Lorem ipsum dolor sit
                                                            amet
                                                            consectetur adipisicing elit. Beatae tempora nisi,
                                                            laudantium, quidem magnam ipsum ad ab iste est
                                                            doloremque adipisci impedit ipsam deleniti labore hic
                                                            cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                    </p>
                                                    <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                        <span
                                                            class=" d-flex flex-wrap-nowrap float-start text-start mt-3">

                                                            <span class="badge badge-success-light me-3 min-w-100">Prèvu</span>
                                                            <span class="badge badge-primary-light min-w-100">Observation</span>


                                                        </span>

                                                    </h5>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="communication_notificationEnvoyee_list.php" class=" card media p-0">
                                            <div class="w-p100  d-flex align-items-center m-1 p-2">
                                                <div class="w-p100  overflow-hidden">

                                                    <span class="text-muted   ">Le Jeudi 04 janvier à 08h 08min
                                                        15s</span>
                                                    <p class="mt-1 mb-0 text-muted fs-14">
                                                        <span class="w-75 text-muted mt-5">Lorem ipsum dolor sit
                                                            amet
                                                            consectetur adipisicing elit. Beatae tempora nisi,
                                                            laudantium, quidem magnam ipsum ad ab iste est
                                                            doloremque adipisci impedit ipsam deleniti labore hic
                                                            cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                    </p>
                                                    <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                        <span
                                                            class=" d-flex flex-wrap-nowrap float-start text-start mt-3">

                                                            <span class="badge badge-success-light me-3 min-w-100">Prèvu</span>
                                                            <span class="badge badge-primary-light min-w-100">Observation</span>


                                                        </span>

                                                    </h5>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>

<?php include"include/footer.php";?>