<?php 
$serverName = "localhost\sqlexpress"; //serverName\instanceName
$connectionInfo = array( "Database"=>"miBaseDeDatos", "UID"=>"miUsuario", "PWD"=>"miContraseña");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>