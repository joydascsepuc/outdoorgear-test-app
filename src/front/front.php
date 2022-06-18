<?php
    namespace Outdoortest\front;
    include_once ($_SERVER['DOCUMENT_ROOT'].'/outdoorgeartest/vendor/autoload.php');
    use Outdoortest\DataBase\Db;

    class Front{

        public $conn = null;
        public function __construct(){
            $this->conn = Db::connect();
        }

        public function getallbanners(){
            $sql = "SELECT * FROM `banners`";
            $statement = $this->conn->prepare($sql);
            $result = $statement->execute();
            $banners = $statement->fetchAll();
            return $banners;
        }
    }
