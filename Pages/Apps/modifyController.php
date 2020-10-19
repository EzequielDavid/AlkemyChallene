<?php
include_once($_SERVER['DOCUMENT_ROOT']."/RyftenStore/Clases/Conection.php");
$conection = new Conection($_SERVER['DOCUMENT_ROOT']."/RyftenStore/conection.ini");

if(isset($_POST["modify"]))
{
    if (isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["owner"]) && isset($_POST["description"]))
    {

        $name = $_POST["name"];
        $price = $_POST["price"];
        $owner = $_POST["owner"];
        $description = utf8_decode($_POST["description"]);
        $image = "";

        if (isset($_FILES["image"]))
        {
            $image = $_FILES["image"]["name"];
        }

        $tipoSoportados = array("image/jpg", "image/jpeg", "image/png");

        if (in_array($_FILES["image"]["type"], $tipoSoportados))
        {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/RyftenStore/img/" . $_FILES["image"]["name"])) {
                echo "imagen existente ";
            }
            else
                {
                move_uploaded_file($_FILES["image"]["tmp_name"],
                    $_SERVER['DOCUMENT_ROOT'] . "/RyftenStore/img/" . $_FILES["image"]["name"]);
               }

        }

        $conection->updateApp($name,$price,$owner,$description,$image);
        header("location:modify.php?status=Cambios Realizados");

    }
}
    if (isset($_POST["upload"]))
    {
        if (isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["owner"])
            && isset($_POST["description"]) && isset($_FILES["image"]))
        {

            $name = $_POST["name"];
            $price = $_POST["price"];
            $owner = $_POST["owner"];
            $description = utf8_decode($_POST["description"]);
            $image = $_FILES["image"]["name"];

            $tipoSoportados = array("image/jpg", "image/jpeg", "image/png");

            if (in_array($_FILES["image"]["type"], $tipoSoportados))
            {
                    move_uploaded_file($_FILES["image"]["tmp_name"],
                        $_SERVER['DOCUMENT_ROOT'] . "/RyftenStore/img/" . $_FILES["image"]["name"]);

                        $conection->insertApp($name, $price,$owner,$description,$image);
                        header("location:modify.php?status=Aplicacion Subida");
            }

        }
    }

    if(isset($_POST["delete"]))
    {
        if(isset($_POST["name"]))
        {
            $name = $_POST["name"];

            $conection->deleteApp($name);
            header("location:modify.php?status=Aplicacion Borrada");
        }
    }
