<?php
    include_once ($_SERVER["DOCUMENT_ROOT"]."/outdoorgeartest/vendor/autoload.php");
    use Outdoortest\Utility\Utility;
    use Outdoortest\banners\Banner;

    $banner = new Banner();
    $data = $_POST;
    $result = $banner->updatebanner($data);

    if($result){
        echo "<script type='text/javascript'>alert('Banner Updated.');</script>";
        header('location:index.php');
    }else{
        echo "<script type='text/javascript'>alert('Banner Not Updated');</script>";
        header('location:index.php');
    }

?>