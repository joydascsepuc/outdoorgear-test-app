<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/outdoorgeartest/vendor/autoload.php');
    use Outdoortest\utility\Utility;
?>

<?php include_once('templates/header.php'); ?>

    <div class="pt-4">
        <h4 class="text-center text-success">Admin Dash</h4>
        <p class="mt-3 text-center text-danger">
            This is admin dash board
            <br>
            <span class="fw-bold">
                Click the Banner from the admin nav on the right side to CRUD banners
                <br>
                Click the body to update the body text and nav image and more
            </span>
        </p>
    </div>

<?php include_once('templates/footer.php'); ?>