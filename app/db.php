<?php

class Model{

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "api_resource";
    protected $conn;

    function __construct()
    {
    }

    protected function db_open()
    {
        try {
            $this->conn = new PDO("mysql: host=$this->db_host;dbname=$this->db_name;charset=utf8",$this->db_user,$this->db_pass);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    protected function db_close()
    {
        $this->conn=null;
    }

    public function send_data($params = array()){
        try {
            $this->db_open();
            $query = "INSERT INTO contries (nombre, area, region) VALUES (:nombre,:area,:region)";
            $stm = $this->conn->prepare($query);
            $stm->bindParam(':nombre',$params['nombre'],PDO::PARAM_STR);
            $stm->bindParam(':area',$params['area'],PDO::PARAM_STR);
            $stm->bindParam(':region',$params['region'],PDO::PARAM_STR);
            $stm->execute($params);
            $rowsAffected = $stm->rowCount();
            $this->db_close();
            return $rowsAffected;
        } catch (Exception  $e) {
            echo $e->getMessage();
        }
    }

    public function getChartDataForPieChart() {
        try {
            $this->db_open();
            $query = "CALL ObtenerDatosParaGraficoPastel()";
            $stm = $this->conn->prepare($query);
            $stm->execute();
            $data = $stm->fetchAll(PDO::FETCH_ASSOC);
            $this->db_close();
            return $data;
        } catch (Exception $e) {
            echo $e->getMessage();
            return array();
        }
    }

}


?>