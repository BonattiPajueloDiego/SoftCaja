<?php
include_once '../config/config.php';
require_once 'db.php';

class Mysql
{
    private $conexion;
    private $strquery;
    private $arrValues;
    public function __construct()
    {
        $this->conexion = new DB();
        $this->conexion = $this->conexion->connect();
    }

    public function Insert(string $query, array $arrayvalues)
    {
        $this->strquery = $query;
        $this->arrValues = $arrayvalues;
        $insert = $this->conexion->prepare($this->strquery);
        $resInsert = $insert->execute($this->arrValues);
        if ($resInsert) {
            //inserto, retorna a pagina inicial
            $lastInsert = $this->conexion->lastInsert();
        } else {
            //mensaje de no inserto el registro
            $lastInsert = 0;
        }
        return $lastInsert;
    }

    public function SelecOne(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;

    }

    public function SelectAll(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetchall(PDO::FETCH_ASSOC);
        return $data;

    }

    public function Update(string $query, array $arrayvalues)
    {
        $this->strquery = $query;
        $this->arrValues = $arrayvalues;
        $update = $this->conexion->prepare($this->strquery);
        $resExecute = $update->execute($this->arrValues);

        return $resExecute;

    }

    public function Delete(string $query)
    {
        $this->strquery = $query;
        $delete = $this->conexion->prepare($this->strquery);
        $delete->execute();
        return $delete;

    }

}
