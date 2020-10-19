<?php
include_once($_SERVER['DOCUMENT_ROOT']."/RyftenStore/Clases/Conection.php");

if(isset($_POST["user"]) && isset($_POST["password"]))
{
    $user = $_POST["user"];
    $password = $_POST["password"];

    $conection = new Conection($_SERVER['DOCUMENT_ROOT']."/RyftenStore/conection.ini");

    $users = $conection->getUser($user);

   if($user == $users[0]["name"] && md5($password) == $users[0]["password"])
   {
       session_start();
       $_SESSION["user"]=$users[0]["name"];
   }
    header("Location: ../../index.php");
}

if(isset($_POST["logout"]))
{
    session_start();
    session_destroy();
    header("Location: ../../index.php");
}

