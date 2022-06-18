<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/outdoorgeartest/vendor/autoload.php');
    use Outdoortest\utility\Utility;
    use Outdoortest\body\Body;

    $body = new Body;
    $g_data = $body->fetchabody();
?>
    </div>
    <!-- Footer start -->
    <footer class="footer px-5 mt-5">
        <div class="row text-center">
            <div class="col-md-4">
                <h5 style="text-align: left !important;">About Us...</h5>
                <p class="mt-2" style="text-align: justify;"><?=$g_data['about_us']?></p>
            </div>
            <div class="col-md-4">
                <h5 style="text-align: left !important;">24/7 Customer Support</h5>
                <p class="mt-2" style="text-align: justify;"><?=$g_data['customer_support']?></p>
            </div>
            <div class="col-md-4">
                <h5 style="text-align: left !important;">Let us Help You</h5>
                <ul style="margin-left: 10px !important; text-align: left !important;">
                    <li><a href="#">About OutdoorGears</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Our Blog</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Return Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-4">
                <p class="fw-bold">Hotline: <?=$g_data['hot_line']?></p>
            </div>
            <div class="col-sm-4">
                <p class="fw-bold">E-mail: <?=$g_data['e_mail']?></p>
            </div>
            <div class="col-sm-4">
                <p class="fw-bold">WhatsApp: <?=$g_data['whatsapp']?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 text-center">
                <span class="text-center fw-bold text-success">Connect with Us</span><br>
                <div class="mt-2">
                    <a href="<?=$g_data['facebook_link']?>"><i class="fab fa-facebook" style="font-size: 1.5rem; color: blue;"></i></a>&nbsp;&nbsp;
                    <a href="<?=$g_data['insta_link']?>"><i class="fab fa-instagram" style="font-size: 1.5rem; color: red;"></i></a>&nbsp;&nbsp;
                    <a href="<?=$g_data['linked_link']?>"><i class="fab fa-linkedin" style="font-size: 1.5rem; color: black;"></i></a>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <p class="text-center fw-bold mt-2"><?=$g_data['footer_copyright'];?></p>
    </footer>
    <!-- Footer end -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).ready( function () {
        $('#datatable').DataTable();
    });
    </script>
  </body>
</html>