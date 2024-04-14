<?php
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $ntarjeta = $_POST['ntarjeta'];
    $vtarjeta = $_POST['vtarjeta'];
    $ccv = $_POST['ccv'];

    //database
    $conn = new mysqli('localhost','root','compras');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error);
    } else{
        $stmt = $conn->prepare("insert into clientes(nombre, telefono, email, ntarjeta, vtarjeta, ccv) 
        vaules(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiss",$nombre,$telefono,$email,$ntarjeta,$vtarjeta,$ccv);
        $stmt->execute();
        echo "Compra exitosa";
        $stmt->close();
        $conn->close();
    }
?>