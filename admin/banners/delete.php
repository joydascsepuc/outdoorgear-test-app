<?php

    include_once ($_SERVER["DOCUMENT_ROOT"]."/outdoorgeartest/vendor/autoload.php");
    use Outdoortest\Utility\Utility;
    use Outdoortest\banners\Banner;

    $banner = new Banner();
    $id = $_GET['id'];
    $data = $banner->deletebanner($id);
    header('location:index.php');

?>