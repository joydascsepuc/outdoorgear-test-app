<?php

    namespace Outdoortest\body;
    include_once ($_SERVER['DOCUMENT_ROOT'].'/outdoorgeartest/vendor/autoload.php');
    use Outdoortest\DataBase\Db;
    use Outdoortest\utility\Utility;

    class Body{

        public $conn = null;
        public function __construct(){
            $this->conn = Db::connect();
        }

        public function fetchabody(){
            $sql = "SELECT * FROM `body` WHERE id = :id";
            $statement = $this->conn->prepare($sql);
            $statement->bindValue(':id', 1);
            $result = $statement->execute();
            $body = $statement->fetch();
            return $body;
        }

        public function updatebody($data){

            $filename = $_FILES['nav_img']['name'];
            if($filename === ""){
                $_picture = $data['oldpic'];
            }else{
                $file_name = "IMG_".time()."_".$_FILES['nav_img']['name'];
                $target = $_FILES["nav_img"]["tmp_name"];
                $destination = $_SERVER['DOCUMENT_ROOT'].'/outdoorgeartest/img/'.$file_name;
                $isFileMoved  = move_uploaded_file($target, $destination);

                if($isFileMoved){
                     $_picture = $file_name;
                }
                else{
                    $_picture = 'noimage.png';
                }
            }

            $sql = "UPDATE body SET nav_img = :nav_img, about_us = :about_us, customer_support = :customer_support, hot_line = :hot_line, e_mail = :e_mail, whatsapp = :whatsapp, facebook_link = :facebook_link, insta_link = :insta_link, linked_link = :linked_link, footer_copyright = :footer_copyright, body_text = :body_text WHERE id = :id";
            $statement = $this->conn->prepare($sql);
            $statement->bindValue(':nav_img', $_picture);
            $statement->bindValue(':about_us', $data['about_us']);
            $statement->bindValue(':customer_support', $data['customer_support']);
            $statement->bindValue(':hot_line', $data['hot_line']);
            $statement->bindValue(':e_mail', $data['e_mail']);
            $statement->bindValue(':whatsapp', $data['whatsapp']);
            $statement->bindValue(':facebook_link', $data['facebook_link']);
            $statement->bindValue(':insta_link', $data['insta_link']);
            $statement->bindValue(':linked_link', $data['linked_link']);
            $statement->bindValue(':footer_copyright', $data['footer_copyright']);
            $statement->bindValue(':body_text', $data['body_text']);
            $statement->bindValue(':id', 1);
            $result = $statement->execute();
            return $result;

            // $sql = "UPDATE body SET nav_img = '".$_picture."', about_us = '".$data['about_us']."', customer_support = '". $data['customer_support']."', hot_line = '".$data['hot_line']."', e_mail = '".$data['e_mail']."', whatsapp = '".$data['whatsapp']."', facebook_link = '".$data['facebook_link']."', insta_link = '".$data['insta_link']."', linked_link = '".$data['linked_link']."', footer_copyright = '".$data['footer_copyright']."', body_text = '".$data['body_text']."' WHERE id = :id";
            // $statement = $this->conn->prepare($sql);
            // $statement->bindValue(':id', 1);
            // $result = $statement->execute();
        }


    }