<div class="login-box pt-5">
	<!-- /.login-logo -->
	<div class="login-box-body">
	<center>
	<a href="https://www.instagram.com/baihaqyraffi/" target="_blank" rel="noopener noreferrer">
	<img src="<?= base_url('assets/dist/img/smkn10.png') ?>" width="30%" alt="" srcset="">
	</center>
	<h3 class="text-center mt-0 mb-4">
		<b>SMKN 10 JAKARTA</b>
	</h3> </a>
	<p class="login-box-msg">Masukan akun anda</p>

	<div id="infoMessage" class="text-center"><?php echo $message;?></div>

	<?= form_open("auth/cek_login", array('id'=>'login'));?>
		<div class="form-group has-feedback">
			<?= form_input($identity);?>
			<span class="fa fa-envelope form-control-feedback"></span>
			<span class="help-block"></span>
		</div>
		<div class="form-group has-feedback">
			<?= form_input($password);?>
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<span class="help-block"></span>
		</div>
		<div class="row">
			<div class="col-xs-8">
			<div class="checkbox icheck">
				<label>
				<?= form_checkbox('remember', '', FALSE, 'id="remember"');?> Ingat saya
				</label>
			</div>
			</div>
			<!-- /.col -->
			<div class="col-xs-4">
			<?= form_submit('submit', lang('login_submit_btn'), array('id'=>'submit','class'=>'btn btn-primary btn-block btn-flat'));?>
			</div>
			<!-- /.col -->
		</div>
		<?= form_close(); ?>

		<a href="<?=base_url()?>auth/forgot_password" class="text-center"><?= lang('login_forgot_password');?></a>

	</div>
</div>

<script type="text/javascript">
	let base_url = '<?=base_url();?>';
</script>
<script src="<?=base_url()?>assets/dist/js/app/auth/login.js"></script>