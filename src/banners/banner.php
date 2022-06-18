<?php

    namespace Outdoortest\banners;
    include_once ($_SERVER['DOCUMENT_ROOT'].'/outdoorgeartest/vendor/autoload.php');
    use Outdoortest\DataBase\Db;
    use Outdoortest\utility\Utility;

    class Banner{

        public $conn = null;
        public function __construct(){
            $this->conn = Db::connect();
        }

        public function addbanner($data){

            $file_name = "IMG_".time()."_".$_FILES['banner_img']['name'];
            $target = $_FILES["banner_img"]["tmp_name"];
            $destination = $_SERVER['DOCUMENT_ROOT'].'/outdoorgeartest/img/banners/'.$file_name;

            $isFileMoved  = move_uploaded_file($target, $destination);

            if($isFileMoved){
                 $_picture = $file_name;
            }
            else{
                $_picture = 'noimage.png';
            }

            $sql = "INSERT INTO `banners` (header, banner_text, banner_img) VALUES (:header, :banner_text, :banner_img)";
            $statement = $this->conn->prepare($sql);
            $statement->bindValue(':header', $data['header']);
            $statement->bindValue(':banner_text', $data['banner_text']);
            $statement->bindValue(':banner_img', $_picture);
            $result = $statement->execute();
            return $result;
        }

        public function fetchallbanners(){
            $sql = "SELECT * FROM `banners`";
            $statement = $this->conn->prepare($sql);
            $result = $statement->execute();
            $banners = $statement->fetchAll();
            return $banners;
        }

        public function deletebanner($id){
            $sql = "DELETE FROM `banners` WHERE id = :id";
            $statement = $this->conn->prepare($sql);
            $statement->bindValue(':id',$id);
            $result = $statement->execute();
            return $result;
        }

        public function fetchabanner($id){
            $sql = "SELECT * FROM `banners` WHERE id = :id";
            $statement = $this->conn->prepare($sql);
            $statement->bindValue(':id',$id);
            $result = $statement->execute();
            $singlebanner = $statement->fetch();
            return $singlebanner;
        }

        public function updatebanner($data){

            $filename = $_FILES['banner_img']['name'];
            if($filename === ""){
                $_picture = $data['oldpic'];
            }else{
                $file_name = "IMG_".time()."_".$_FILES['banner_img']['name'];
                $target = $_FILES["banner_img"]["tmp_name"];
                $destination = $_SERVER['DOCUMENT_ROOT'].'/outdoorgeartest/img/banners/'.$file_name;
                $isFileMoved  = move_uploaded_file($target, $destination);

                if($isFileMoved){
                     $_picture = $file_name;
                }
                else{
                    $_picture = 'noimage.png';
                }
            }

            $sql = "UPDATE banners SET header = :header, banner_text = :banner_text, banner_img = :banner_img WHERE id = :id";
            $statement = $this->conn->prepare($sql);
            $statement->bindValue(':header', $data['header']);
            $statement->bindValue(':banner_text', $data['banner_text']);
            $statement->bindValue(':banner_img', $_picture);
            $statement->bindValue(':id', $data['id']);
            $result = $statement->execute();
            return $result;
        }


    }