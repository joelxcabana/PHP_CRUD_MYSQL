<?php 
include('db.php');

//validar si envia el id
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    $result =  mysqli_query($conn,$query);

    if(!$result){
        die("query dailed");
    }

    $_SESSION['message'] = "tasl removed successfully";
    $_SESSION['message_type'] = 'danger';
    header("Location: index.php");
}


?>