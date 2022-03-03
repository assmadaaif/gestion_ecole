<?php include"include/header.php";?>
<?php include"include/menu.php";?>


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">École</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="ecole_communication_mes_notification.php">Communication</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="ecole_communication_notificationEnvoyee_list.php">Liste des notifcations</a></li>
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
                  
                    <div class="row">
                        <div class="table-responsive">
                            <table id="" class="mx-auto text-fade table table-bordered display" style="width: 70%;">
                                <thead class="bg-success">
                                    <tr>
                                       
                                        <th>École</th>
                                        <th>Envoyée à</th>
                                        <th>Type</th>
                                        <th>Status de Notification</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                       
                                        
                                        <td>Ibn Zohr</td>
                                        <td   class="d-flex flex-row align-items-center flex-wrap"> <img src="images/avatar/avatar-10.png" width="48" height="48"
                                                class="bg-light rounded-circle me-2 " alt="Avatar"> Yssine RACHDI</td>


                                                <td>Formateur</td>
                                        <td >
                                            <span class="badge badge-info-light">Vue</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        
                                        <td>El Idrissi</td>
                                        <td  class="d-flex flex-row align-items-center flex-wrap"> <img src="images/avatar/avatar-1.png" width="48" height="48"
                                                class="bg-light rounded-circle me-2 " alt="Avatar"> Rania NASIRI</td>


                                                <td>Parent</td>
                                        <td >
                                            
                                            <span class="badge badge-primary-light">Reçue</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                       
                                     
                                        <td>El Motanabi</td>
                                        <td  class="d-flex flex-row align-items-center flex-wrap"> <img src="images/avatar/avatar-10.png" width="48" height="48"
                                                class="bg-light rounded-circle me-2 " alt="Avatar"> Mohammed Souiri</td>


                                                <td>Élève</td>
                                        <td >
                                            
                                            <span class="badge badge-primary-light">Reçue</span>
                                        </td>
                                    </tr>
                                    <tr>
                                      
                                        
                                        <td>Ibn Sinaa</td>
                                        <td  class="d-flex flex-row align-items-center flex-wrap"> <img src="images/avatar/avatar-1.png" width="48" height="48"
                                                class="bg-light rounded-circle me-2 " alt="Avatar"> Rania NASIRI</td>


                                                <td>Formateur</td>
                                        <td >
                                        <span class="badge badge-primary-light">Reçue</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                     
                                        <td>Ibn Sinaa</td>
                                        <td  class="d-flex flex-row align-items-center flex-wrap"> <img src="images/avatar/avatar-1.png" width="48" height="48"
                                                class="bg-light rounded-circle me-2 " alt="Avatar"> Sofia Essedique</td>


                                                <td>Gérant</td>
                                        <td >
                                        <span class="badge badge-primary-light">Reçue</span>
                                        </td>
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
        </section>
    </div>
</div>


<?php include"include/footer.php";?>