<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/outdoorgeartest/vendor/autoload.php');
use Outdoortest\utility\Utility;
use Outdoortest\banners\Banner;
?>

<?php include_once('../templates/header.php'); ?>

    <div style="padding: 30px !important;">
        <form enctype="multipart/form-data" action="addbanner.php" method="post" >
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="header">Header*</label>
                        <input type="text" name="header" class="form-control" id="header" placeholder="Header of Banner" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="banner_text">Banner text*</label>
                        <input type="text" name="banner_text" class="form-control" id="banner_text" placeholder="Banner Text" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="banner_img">Picture*</label>
                    <input type="file" class="form-control-file" id="banner_img" placeholder="" name="banner_img" value="" required>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4"></div>
                <div class="col-4 d-grid">
                    <button type="submit" class="btn btn-outline-primary">Add Banner</button>
                </div>
                <div class="col-4"></div>
            </div>
        </form>
    </div>

<?php include_once('../templates/footer.php'); ?>
