<?php $this->load->view('admin/header'); ?>

<?= form_open('login/verifikasi');?>

<body>
	<div class="container">
	    <div class="row">
	        <div class="col-md-4 col-md-offset-4">
	            <div class="login-panel panel panel-default">
	                <div class="panel-heading">
	                    <h3 class="panel-title">SIGN IN | SPK REKOMENDASI DESAIN PT FIRUZ IMANI OETAMA</h3>
	                </div>
	                <div class="panel-body">
	                    <form role="form">
	                        <fieldset>
	                            <div class="form-group">
	                                <input class="form-control" placeholder="username" name="user" type="text" autofocus required>
	                            </div>
	                            <div class="form-group">
	                                <input class="form-control" placeholder="Password" name="pass" type="password" required>
	                            </div>
	                            <div class="checkbox">
	                                <label>
	                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
	                                </label>
	                            </div>
	                            <!-- Change this to a button or input when using this as a form -->
	                            <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
	                        </fieldset>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

  <?= form_close();?>

<?php $this->load->view('admin/footer'); ?>