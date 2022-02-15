<?php
$menu=2;
switch ($menu) {
    case 1:
         include"include/menu_admin.php"; 
        break;
    case 2:
         include"include/menu_ecole.php"; 
        break;
    case 3:
         include"include/menu_formateur.php"; 
        break;
    case 4:
          include"include/menu_parent.php"; 
        break;
	case 5:
           include"include/menu_eleve.php"; 
        break;
}
?>
