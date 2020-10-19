<?php
use PHPUnit\Framework\TestCase;
include_once("../Clases/Conection.php");

class TestLogicaDeNegocio extends TestCase
{

    function testFindApp()
    {
        $conection = new Conection("../conection.ini");

        $row = $conection->getApp("Instagram");
        print_r($row);

        $this->assertEquals("Instagram", $row[0]["name"]);
    }

    function testGetConectionFile()
    {
        $conection = new Conection("../conection.ini");
        $file = $conection->getConfigurationFile("../conection.ini");

        $this->assertEquals("RyftenStore", $file["db"]["database"]);
    }

    function testSussefulConection()
    {
        $conection = new Conection("../conection.ini");
        $result = "";
        if ($conection->getConection()) {
            $result = "Susseful Conection";
        } else {
            $result = "Error Conection";
        }

        $this->assertEquals("Susseful Conection", $result);
    }

    function testInsertUser()
    {
        $conection = new Conection("../conection.ini");
        $conection->insertUser("Ryften", 12345);
        $query = "select * from Users
                WHERE name like '%Ryften%'";
        $result = sqlsrv_query($conection->getConection(), $query);
        $row = sqlsrv_fetch_array($result);
        $this->assertEquals("Ryften", $row["name"]);
    }

    function testGetUser()
    {
        $conection = new Conection("../conection.ini");
        $row = $conection->getUser("ryften");
        print_r($row);
        $this->assertEquals("Ryften", $row[0]["name"]);

    }

}

