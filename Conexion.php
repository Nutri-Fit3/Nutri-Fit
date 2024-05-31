<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "NutriFit"; 
$nombre = $_POST['Nombre']; 
$membresia = $_POST['Telefono']; 
$telefono = $_POST['Edad']; 
$telefono = $_POST['Tipo De Plan']; 

$conexion = mysqli_connect($servername,$username,$password,$database); $sql = "INSERT INTO Consultas (Nombre,Telefono,Edad,Tipo De Plan) values ('$Nombre','$Telefono','$Edad','$TipoDePlan')"; if (mysqli_query($conexion, $sql)) 
{ ?> 

    <h3 class="bien">Registro completado</h3>

     <?php }
      ?>