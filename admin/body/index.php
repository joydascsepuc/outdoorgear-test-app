<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/outdoorgeartest/vendor/autoload.php');
use Outdoortest\utility\Utility;
use Outdoortest\body\Body;
?>
<?php
    $body = new Body();
    $data = $body->fetchabody();
?>
<?php include_once('../templates/header.php'); ?>

    <div style="padding: 30px !important;">
        <form enctype="multipart/form-data" action="updatebody.php" method="post" >
            <div class="row mt-3">
                <div class="col">
                    <label for="nav_img">Nav Image</label>
                    <input type="file" class="form-control-file" id="nav_img" placeholder="" name="nav_img" value="">
                    <img src="<?=Utility::ImageFolder.$data['nav_img']?>" alt="" style="height: 50px; width: 50px;">
                    <input type="hidden" name="oldpic" value="<?=$data['nav_img'];?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="about_us" class="label">About Us*</label>
                        <textarea name="about_us" id="about_us" class="form-control" required><?=$data['about_us']?></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="customer_support" class="label">Customer Support*</label>
                        <textarea name="customer_support" id="customer_support" class="form-control" required><?=$data['customer_support']?></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="hot_line" class="label">Hot Line*</label>
                        <input type="number" class="form-control" name="hot_line" id="hot_line" value="<?=$data['hot_line']?>">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="email" class="label">E-mail*</label>
                        <input type="email" name="e_mail" id="e_mail" class="form-control" value="<?=$data['e_mail']?>" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="whatsapp" class="label">Whatsapp*</label>
                        <input type="number" name="whatsapp" id="whatsapp" class="form-control" value="<?=$data['whatsapp']?>" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="facebook_link" class="label">Facebook Link*</label>
                        <input type="text" name="facebook_link" id="facebook_link" class="form-control" value="<?=$data['facebook_link']?>" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="insta_link" class="label">Instagram Link*</label>
                        <input type="text" name="insta_link" id="insta_link" class="form-control" value="<?=$data['insta_link']?>" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="linked_link" class="label">LinkedIn Link*</label>
                        <input type="text" name="linked_link" id="linked_link" value="<?=$data['linked_link']?>" class="form-control" required></input>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="footer_copyright" class="label">Footer Copyright*</label>
                        <input type="text" name="footer_copyright" id="footer_copyright" value="<?=$data['footer_copyright']?>" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="body_text" class="label">Body text*</label>
                        <textarea name="body_text" id="body_text" class="form-control"><?=$data['body_text']?></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4"></div>
                <div class="col-4 d-grid">
                    <button type="submit" class="btn btn-outline-primary">Update Body</button>
                </div>
                <div class="col-4"></div>
            </div>
        </form>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.12.1/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('body_text');
</script>

<?php include_once('../templates/footer.php'); ?>