<!DOCTYPE html>
<html lang="en">
<head>
	<title>SEWAPARKIR - Daftar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="css-daftar/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-daftar/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-daftar/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-daftar/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-daftar/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-daftar/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-daftar/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-daftar/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-daftar/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-daftar/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-daftar/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-daftar/css/main.css">
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('<?= base_url('media/parker/') ?>css-daftar/images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="<?= base_url('user_submit') ?>" method="post">
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
					<span class="login100-form-title p-b-59">
						Daftar
					</span>

                    <?php if(!empty($this->session->flashdata('error'))) { ?>
                    <div class="alert alert-danger">
                        <b><?= $this->session->flashdata('error') ?></b>
                    </div>
                    <?php } ?>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Nama Lengkap</span>
						<input class="input100" type="text" name="nama" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="uname" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Ulangi Password</span>
						<input class="input100" type="password" name="repeat-pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" required>
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Saya setuju dengan
									<a href="#" class="txt2 hov1">
										Kebijakan User
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Daftar
							</button>
						</div>

						<a href="masuk" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Masuk
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
						<a href="index" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							SEWAPARKIR
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-daftar/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-daftar/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-daftar/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('media/parker/') ?>css-daftar/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-daftar/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-daftar/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('media/parker/') ?>css-daftar/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-daftar/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-daftar/js/main.js"></script>

</body>
</html>
