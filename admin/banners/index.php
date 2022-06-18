<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/outdoorgeartest/vendor/autoload.php');
use Outdoortest\utility\Utility;
use Outdoortest\banners\Banner;
?>
<?php
    $banner = new Banner();
    $banners = $banner->fetchallbanners();
    // var_dump($banners);
?>
<?php include_once('../templates/header.php'); ?>

    <div style="padding: 30px !important;">
        <a class="btn btn-primary btn-sm mb-3" href="<?=Utility::AdminWebView?>banners/create.php">Add Banner</a>
        <table class="table" id="datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Header</th>
                    <th>text</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach ($banners as $banner): ?>
                <tr>
                    <td><?=$i; ?></td>
                    <td><?=$banner['header']; ?></td>
                    <td><?=$banner['banner_text']; ?></td>
                    <?php
                        $folder = Utility::SeeBanners;
                        $path = $folder.$banner['banner_img'];
                    ?>
                    <td><img src="<?=$path;?>" class="img-fluid" style = "height: 50px; width: 50px;" alt = "image"></td>
                    <td>
                        <a href="edit.php?id=<?=$banner['id']; ?>">
                            <i class="fas fa-edit" style="color: green;"></i>
                        </a>
                        &nbsp;&nbsp;
                        <a href="delete.php?id=<?=$banner['id']; ?>">
                            <i class="fas fa-trash-alt"  style="color: red;"></i>
                        </a>
                    </td>
                    <?php $i++; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php include_once('../templates/footer.php'); ?>