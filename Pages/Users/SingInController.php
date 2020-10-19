<?php
include_once($_SERVER['DOCUMENT_ROOT']."/RyftenStore/Clases/Conection.php");

if(isset($_POST["user"]) && $_POST["user"]!="" && isset($_POST["password"]) && $_POST["password"]!="" )
{
    $name = $_POST["user"];
    $password = $_POST["password"];

    $conection = new Conection($_SERVER['DOCUMENT_ROOT']."/RyftenStore/conection.ini");

    $user =$conection->getUser($name);

    if($user[0]["name"]== $name)
    {
        $response ="Este nombre de usuario ya se enuentra registrado";
    }
    else
    {
        $conection->insertUser($name,$password);
        $response ="Usuario registrado correctamente";
    }

     header("Location: SingIn.php?response=$response");
}
else{
    header("Location: SingIn.php?response=Complete los datos correctamente");
}

