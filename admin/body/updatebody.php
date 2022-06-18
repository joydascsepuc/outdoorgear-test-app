<?php
    include_once ($_SERVER["DOCUMENT_ROOT"]."/outdoorgeartest/vendor/autoload.php");
    use Outdoortest\Utility\Utility;
    use Outdoortest\body\Body;

    $body = new Body();
    $data = $_POST;

    // var_dump($data);
    $result = $body->updatebody($data);

    if($result){
        echo "<script type='text/javascript'>alert('Body Updated.');</script>";
        header('location:index.php');
    }else{
        echo "<script type='text/javascript'>alert('Body Not Updated');</script>";
        header('location:index.php');
    }

?>