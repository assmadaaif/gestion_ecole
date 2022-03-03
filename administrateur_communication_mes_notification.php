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
                                <li class="breadcrumb-item active" aria-current="page">Mes Notifiations</li>
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
                                            <a href="" class=" card media p-0">
                                                <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                    <div class="w-p100  overflow-hidden">

                                                        <p class="mt-1 mb-0 text-muted fs-14">
                                                            <span
                                                                class="text-danger  float-end text-end fs-12 fw-400  ">12h
                                                                30min 17s</span>
                                                            <span class="w-75 text-muted mt-5">Lorem ipsum dolor sit
                                                                amet
                                                                consectetur adipisicing elit. Beatae tempora nisi,
                                                                laudantium, quidem magnam ipsum ad ab iste est
                                                                doloremque adipisci impedit ipsam deleniti labore hic
                                                                cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                            <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                                <span
                                                                    class=" d-flex flex-wrap-nowrap float-end text-end mt-3">

                                                                    <span
                                                                        class="badge badge-success-light mx-3">Prèvu</span>
                                                                    <span
                                                                        class="badge badge-primary-light me-4">Observation</span>


                                                                </span>

                                                            </h5>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 d-flex flex-row justify-content-center mb-10">
                                                    <form action="administrateur_communication_type_utilisateur.php">

                                                        <button type="submit" class="ms-3 btn btn-sm btn-success">
                                                            <i class="fa fa-send"></i> Envoyer</button>


                                                    </form>
                                                    <form action="communication_modifier_notification.php">

                                                        <button type="submit" class="ms-3 btn btn-sm btn-primary">
                                                            <i class="fa fa-edit"></i> Modifier</button>




                                                    </form>
                                                    <form action="">
                                                        <button type="submit" class="ms-3 btn btn-sm btn-danger">
                                                            <i class="fa fa-trash"></i> Supprimer</button>

                                                    </form>
                                                    <form action="communication_traduire_notification.php">

                                                        <button type="submit" class="ms-3 btn btn-sm btn-info">
                                                            <i class="fa fa-edit"></i> Traduire</button>


                                                    </form>
                                                </div>
                                            </a>

                                            <a href="" class=" card media p-0">
                                                <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                    <div class="w-p100  overflow-hidden">

                                                        <p class="mt-1 mb-0 text-muted fs-14">
                                                            <span
                                                                class="text-danger float-end text-end fs-12 fw-400  ">8h
                                                                22min 7s</span>
                                                            <span class="w-75 text-muted mt-5">Lorem ipsum dolor sit
                                                                amet
                                                                consectetur adipisicing elit. Beatae tempora nisi,
                                                                laudantium, quidem magnam ipsum ad ab iste est
                                                                doloremque adipisci impedit ipsam deleniti labore hic
                                                                cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                            <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                                <span
                                                                    class=" d-flex flex-wrap-nowrap float-end text-end mt-3">

                                                                    <span
                                                                        class="badge badge-success-light mx-3">Urgent</span>
                                                                    <span
                                                                        class="badge badge-primary-light me-4">Rappel</span>

                                                                </span>

                                                            </h5>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 d-flex flex-row justify-content-center mb-10">
                                                    <form action="administrateur_communication_type_utilisateur.php">

                                                        <button type="submit" class="ms-3 btn btn-sm btn-success">
                                                            <i class="fa fa-send"></i> Envoyer</button>


                                                    </form>
                                                    <form action="communication_modifier_notification.php">

                                                        <button type="submit" class="ms-3 btn btn-sm btn-primary">
                                                            <i class="fa fa-edit"></i> Modifier</button>




                                                    </form>
                                                    <form action="">
                                                        <button type="submit" class="ms-3 btn btn-sm btn-danger">
                                                            <i class="fa fa-trash"></i> Supprimer</button>

                                                    </form>
                                                    <form action="communication_traduire_notification.php">

                                                        <button type="submit" class="ms-3 btn btn-sm btn-info">
                                                            <i class="fa fa-edit"></i> Traduire</button>


                                                    </form>
                                                </div>
                                            </a>


                                            <a href="" class=" card media p-0">
                                                <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                    <div class="w-p100  overflow-hidden">

                                                        <p class="mt-1 mb-0 text-muted fs-14">

                                                            <span
                                                                class="float-end text-end text-danger fs-12 fw-400  ">Le
                                                                Mardi 11 janvier 2022 à 12h 30min 17s</span>
                                                            <span class="w-75 text-muted mt-5">Lorem ipsum dolor sit
                                                                amet
                                                                consectetur adipisicing elit. Beatae tempora nisi,
                                                                laudantium, quidem magnam ipsum ad ab iste est
                                                                doloremque adipisci impedit ipsam deleniti labore hic
                                                                cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                            <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                                <span
                                                                    class=" d-flex flex-wrap-nowrap float-end text-end mt-3 ">
                                                                    <span
                                                                        class="badge badge-success-light mx-3">Prèvu</span>
                                                                    <span
                                                                        class="badge badge-primary-light me-4">Évènement
                                                                    </span>

                                                                </span>

                                                            </h5>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 d-flex flex-row justify-content-center mb-10">
                                                    <form action="administrateur_communication_type_utilisateur.php">

                                                        <button type="submit" class="ms-3 btn btn-sm btn-success">
                                                            <i class="fa fa-send"></i> Envoyer</button>


                                                    </form>
                                                    <form action="communication_modifier_notification.php">

                                                        <button type="submit" class="ms-3 btn btn-sm btn-primary">
                                                            <i class="fa fa-edit"></i> Modifier</button>




                                                    </form>
                                                    <form action="">
                                                        <button type="submit" class="ms-3 btn btn-sm btn-danger">
                                                            <i class="fa fa-trash"></i> Supprimer</button>

                                                    </form>
                                                    <form action="communication_traduire_notification.php">

                                                        <button type="submit" class="ms-3 btn btn-sm btn-info">
                                                            <i class="fa fa-edit"></i> Traduire</button>


                                                    </form>
                                                </div>
                                            </a>


                                            <a href="" class=" card media p-0">
                                                <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                    <div class="w-p100  overflow-hidden">

                                                        <p class="mt-1 mb-0 text-muted fs-14">

                                                            <span
                                                                class="float-end text-end text-danger fs-12 fw-400  ">Le
                                                                Mardi 11 janvier 2022 à 12h 30min 17s</span>
                                                            <span class="w-75 text-muted mt-5">Lorem ipsum dolor sit
                                                                amet
                                                                consectetur adipisicing elit. Beatae tempora nisi,
                                                                laudantium, quidem magnam ipsum ad ab iste est
                                                                doloremque adipisci impedit ipsam deleniti labore hic
                                                                cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                            <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                                <span
                                                                    class=" d-flex flex-wrap-nowrap float-end text-end mt-3 ">
                                                                    <span class="badge badge-success-light mx-3">Dés que
                                                                        possibe</span>
                                                                    <span
                                                                        class="badge badge-primary-light me-4">Évènement
                                                                    </span>

                                                                </span>

                                                            </h5>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 d-flex flex-row justify-content-center mb-10">
                                                    <form action="administrateur_communication_type_utilisateur.php">

                                                        <button type="submit" class="ms-3 btn btn-sm btn-success">
                                                            <i class="fa fa-send"></i> Envoyer</button>


                                                    </form>
                                                    <form action="communication_modifier_notification.php">

                                                        <button type="submit" class="ms-3 btn btn-sm btn-primary">
                                                            <i class="fa fa-edit"></i> Modifier</button>
                                                    </form>
                                                    <form action="">
                                                        <button type="submit" class="ms-3 btn btn-sm btn-danger">
                                                            <i class="fa fa-trash"></i> Supprimer</button>

                                                    </form>
                                                    <form action="communication_traduire_notification.php">

                                                        <button type="submit" class="ms-3 btn btn-sm btn-info">
                                                            <i class="fa fa-edit"></i> Traduire</button>


                                                    </form>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="messages" role="tabpanel">

                                    <div class="chat-box-one-side3">
                                        <a href="administrateur_communication_notificationEnvoyee_list.php"
                                            class=" card media p-0">
                                            <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                <div class="w-p100  overflow-hidden">

                                                    <p class="mt-1 mb-0 text-muted fs-14">
                                                        <span class="text-danger  float-end text-end fs-12 fw-400  ">12h
                                                            30min 17s</span>
                                                        <span class="w-75 text-muted">Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit. Beatae tempora nisi,
                                                            laudantium, quidem magnam ipsum ad ab iste est
                                                            doloremque adipisci impedit ipsam deleniti labore hic
                                                            cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                        <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                            <span class="w-25 float-end text-end">

                                                                <span class="badge badge-success-light">Prèvu</span>
                                                                <span
                                                                    class="badge badge-primary-light me-4">Observation</span>


                                                            </span>

                                                        </h5>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="communication_notificationEnvoyee_list.php" class=" card media p-0">
                                            <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                <div class="w-p100  overflow-hidden">

                                                    <p class="mt-1 mb-0 text-muted fs-14">
                                                        <span class="text-danger float-end text-end fs-12 fw-400  ">08h
                                                            30min 11s</span>
                                                        <span class="w-75 text-muted">Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit. Beatae tempora nisi,
                                                            laudantium, quidem magnam ipsum ad ab iste est
                                                            doloremque adipisci impedit ipsam deleniti labore hic
                                                            cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                        <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                            <span class="w-25 float-end text-end">

                                                                <span class="badge badge-success-light">Urgent</span>
                                                                <span
                                                                    class="badge badge-primary-light me-4">Rappel</span>

                                                            </span>

                                                        </h5>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="communication_notificationEnvoyee_list.php" class=" card media p-0">
                                            <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                <div class="w-p100  overflow-hidden">

                                                    <p class="mt-1 mb-0 text-muted fs-14">

                                                        <span class="float-end text-end text-danger fs-12 fw-400  ">Le
                                                            Lundi 11 janvier 2022 à 12h 30min 17s</span>
                                                        <span class="w-75 text-muted">Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit. Beatae tempora nisi,
                                                            laudantium, quidem magnam ipsum ad ab iste est
                                                            doloremque adipisci impedit ipsam deleniti labore hic
                                                            cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                        <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                            <span class="w-25 float-end text-end ">
                                                                <span class="badge badge-success-light">Prèvu</span>
                                                                <span
                                                                    class="badge badge-primary-light me-4">Evènement</span>

                                                            </span>

                                                        </h5>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="communication_notificationEnvoyee_list.php" class=" card media p-0">
                                            <div class="w-p100  d-flex align-items-center m-1 p-2">

                                                <div class="w-p100  overflow-hidden">

                                                    <p class="mt-1 mb-0 text-muted fs-14">

                                                        <span class="float-end text-end text-danger fs-12 fw-400  ">Le
                                                            Vendredi 6 janvier 2022 à 12h 30min 17s</span>
                                                        <span class="w-75 text-muted">Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit. Beatae tempora nisi,
                                                            laudantium, quidem magnam ipsum ad ab iste est
                                                            doloremque adipisci impedit ipsam deleniti labore hic
                                                            cupiditate reprehenderit perspiciatis obcaecati.</span>
                                                        <h5 class="mt-0 mb-0 fs-14 fw-600">

                                                            <span class="w-25 float-end text-end">

                                                                <span class="badge badge-success-light">Dès que
                                                                    possible</span>
                                                                <span
                                                                    class="badge badge-primary-light me-4">Observation</span>

                                                            </span>

                                                        </h5>
                                                    </p>
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