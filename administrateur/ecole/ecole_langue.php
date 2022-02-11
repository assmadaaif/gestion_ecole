<?php 

include $_SERVER["DOCUMENT_ROOT"] . "/include/header.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/menu_admin.php"; ?>



<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Admin</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Ecole</li>
								<li class="breadcrumb-item active" aria-current="page"> Langue</li>
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
						
<form>
    <div class="box-body">

        <div class="form-group">
            <label class="form-label">Langue utilisée :</label>
            <div class="c-inputs-stacked">
                <input type="checkbox" id="checkbox_123" checked>
                <label for="checkbox_123" class="me-30" >Farnçais(par defaut)</label>
                <input type="checkbox" id="checkbox_234" >
                <label for="checkbox_234" class="me-30">Anglais</label>
                <input type="checkbox" id="checkbox_345">
                <label for="checkbox_345" class="me-30">Arabe</label>
            </div>
        </div>
        
        <div class="col-lg-2  ">
					<a href="ajouter-parent.php ">
						<button type="submit" class="btn btn-primary  ">
							Enregitrer
						</button></a>
				</div>
    </div>
    <!-- /.box-body -->

</form>

					</div>
				</div>
			</div>
			<div class="row">
				
			</div>
		</section>
	</div>
</div>


<?php include $_SERVER["DOCUMENT_ROOT"] . "/include/footer.php"; ?>
