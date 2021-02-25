<?php 
//incluye el archivo db.php que contiene la conexion ($conn)
include("db.php");

//verifica si hay un nombre (save_task)
if(isset($_POST['save_task'])){
    //obtiene del metodo post los name(title, description) de los campos
    $title = $_POST['title'];
    $description = $_POST['description'];
   
    $query = "INSERT INTO task(title,description) VALUES ('$title','$description')";
    $result = mysqli_query($conn,$query);

    //si no hay resultado algo salio mal
    if(!$result){
        die("Query failed");
    }

    //almacenar mensaje y color
    $_SESSION['message'] = 'Task Saved Seuccesfully';
    $_SESSION['message_type'] = "success";

    //redireccionar
    header("location: index.php");
}
?>