<?php 
    //Get DataBase connection
    include("../config/connectionDB.php"); 
    $email = $_POST['email'];
    $passwd = md5($_POST['passwd']);
    //creamos la consulta Query
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$passwd'"; 
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        header("Location:http://127.0.0.1/pets_s/front/src/home.html");
    }else{
        //echo"El usuario no existe o sus datos son incorrectos";
        echo"<script>alert('El usuario no existe o sus datos son incorrectos')</script>";
        header("refresh:0;url=http://127.0.0.1/pets_s/front/src/login.html");
    }
?>