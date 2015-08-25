<?php
/**
 * Created by PhpStorm.
 * User: xhendor
 * Date: 8/19/15
 * Time: 17:19
 */
//Se utliza el require
require("Connection.php");

//Crear la instancia del objeto
$conn=DbConn::getInstance();
//Manipularla Ejemplo: Query
$resultset=$conn->query("select * from user");

//Mostrar contenido del query
do {

 $resultadoManipulable = mysqli_fetch_array($resultset);

if($resultadoManipulable!=null){
 echo $resultadoManipulable['User'];
 echo "<br/>";
 echo $resultadoManipulable['Password'];
 echo "<br/>";

 echo $resultadoManipulable['Host'];
 echo "<br/>";

 echo $resultadoManipulable['max_updates'];
 echo "<br/>";

}

}while($resultadoManipulable!=null);
/*
 $user_var=new Usuario();

echo $user_var->getUSER_NAME();
echo "<br/>";
echo $user_var->getPASSWORD();


$user_var->setPASSWORD("Panchito");
$user_var->setUSER_NAME("SAEL_VA_A_LIBERAR_PRESION");

echo "<br/>";


echo $user_var->getPASSWORD();
echo "<br/>";

echo $user_var->getUSER_NAME();
*/