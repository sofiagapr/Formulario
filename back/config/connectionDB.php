<?php
//Developer: Sofia Peña 
$host ="127.0.0.1";
$username = "root";
$password = "";
$dbname = "pets";
$port = "3306";
//create connection -->SQL
$conn = new mysqli($host,$username,$password,$dbname,$port);

//check connetion
if($conn->connect_error){
 echo "Conexion Fallida ".$conn->connect_error;

}else{
    echo"Se conectó correctamente";
}


?>