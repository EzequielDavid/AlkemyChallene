<?php

class Conection
{
    private $conection;

    public function __construct($file)
    {
      $database=$this->getConfigurationFile($file);
      $server=$database["db"]["serverName"];
      $connectionInfo= array("Database"=>$database["db"]["database"],"UID"=>$database["db"]["UID"],"PWD"=>$database["db"]["PWD"]);
      $conect = sqlsrv_connect($server,$connectionInfo);
      $this->conection=$conect;
    }

    public function getConfigurationFile($file)
    {
        return parse_ini_file($file,true);
    }

    public function getConection()
    {
        return $this->conection;
    }

    public function insertApp($name,$price,$owner,$description,$image)
    {

        $query="INSERT INTO apps(name,price,owner,description,image) values('$name','$price','$owner','$description','$image')";
        sqlsrv_query($this->getConection(),$query);
    }
    public function deleteApp($name)
    {
        $stmt="DELETE FROM apps WHERE name like'$name'";
        sqlsrv_query($this->getConection(),$stmt);
    }


    public function getApp($searchParam=false)
    {
         $apps=array();

        if($searchParam!=false)
       {
           $query="select * from apps 
               where name like '%$searchParam%' or owner like '%$searchParam%'";
       }
       else
       {
           $query="select * from apps";
       }
        $stmt = sqlsrv_query($this->getConection(),$query);

         while($row=sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC))
         {
             array_push($apps,$row);
         }
         return $apps;
    }

    public function updateApp($name,$price,$owner,$description,$image=false)
    {
        $stmt="";

        if($image==false)
        {
            $stmt="UPDATE apps SET  name='$name', price='$price',
                     owner='$owner', description='$description'
                     WHERE name like '%$name%'";
        }
        else
        {
            $stmt="UPDATE apps SET name='$name', price='$price',
                     owner='$owner', description='$description', image='$image'
                     WHERE name like '%$name%'";
        }

        sqlsrv_query($this->getConection(),$stmt);
    }

    public function insertUser($user,$password)
    {
        $encrypt = md5($password);

        $query="INSERT INTO users(name,password) values('$user','$encrypt')";
        sqlsrv_query($this->getConection(),$query);
    }

    public function getUser($user)
    {
        $users=array();
        $query="select * from users where name like '%$user%'";

        $stmt = sqlsrv_query($this->getConection(),$query);

        while($user = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC))
        {
            array_push($users,$user);
        }
        return $users;
    }



}