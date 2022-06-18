<?php
    include_once ($_SERVER["DOCUMENT_ROOT"]."/outdoorgeartest/vendor/autoload.php");
    use Outdoortest\Utility\Utility;
    use Outdoortest\banners\Banner;

    $banner = new Banner();

    $data = $_POST;

    $result = $banner->addbanner($data);
    $url = Utility::AdminWebView;

    if($result){
        echo "<script type='text/javascript'>alert('Banner Added');</script>";
        header('location:index.php');
    }else{
        echo "<script type='text/javascript'>alert('Banner Not Added');</script>";
        header('location:index.php');
    }
?>