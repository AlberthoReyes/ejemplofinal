<?php

include "conexion.php";

$ID_N=$_POST["ID_N"];
$Nom=$_POST["Nom"];
$Ap_pat=$_POST["Ap_pat"];
$Ap_mat=$_POST["Ap_mat"];
$Fec_Nac=$_POST["Fec_Nac"];
$Edad=$_POST["Edad"];
$Dir=$_POST["Dir"];
$Loc=$_POST["Loc"];
$peso=$_POST["peso"];
$talla=$_POST["talla"];
$dx=$_POST["dx"];
$Nom_T=$_POST["Nom_T"];
$Appat_T=$_POST["Appat_T"];
$Apmat_T=$_POST["Apmat_T"];


$sql="INSERT INTO rnutricio VALUES 
('$ID_N','$Nom','$Ap_pat','$Ap_mat','$Fec_Nac','$Edad','$Dir','$Loc','$peso','$talla','$dx','$Nom_T','$Appat_T','$Apmat_T')";
$result=mysql_query($sql,$conexion);
if($result){
  echo "datos guardados exitosamente";

}else{
  echo "Error al guardar la información: ".mysql_error();
}
mysql_close($conexion);
?>
