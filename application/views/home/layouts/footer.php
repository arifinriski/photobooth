 <footer class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-text">
                        <div class="reserved" style="color: white">
Copyright &copy;
<script>document.write(new Date().getFullYear());</script> All rights reserved | Nino Razissa Putra | Universitas Darma Persada<p>
    <?php 
    $userdata= $this->session->userdata('username');
    if ($userdata != null) {
        
    }else{ ?><a href="<?= base_url('index/login') ?>">LOGIN SEBAGAI ADMIN</a></p> <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
    <!-- Search model end -->
    
    <!-- Js Plugins -->
    <script src="<?= base_url('assets/template/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.slicknav.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/circle-progress.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/main.js"></script>
    <script src="<?=base_url();?>assets/datepicker/jquery-ui.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $(".datepicker").datepicker({
              minDate: 0 
            });
        });
    </script>
</body>

</html>