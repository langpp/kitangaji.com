<!DOCTYPE html>
<!--[if IE 8]>         
<html class="no-js lt-ie9" lang="en">
<![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en">
<!--<![endif]-->
<?php echo $page["head"]; ?>
<style type="text/css">
<?php if(isset($css)){ echo $css; } ?> 
</style>
<?php echo $page['main_js'];?>
<script type="text/javascript">
	<?php if(isset($javascript)){ echo $javascript; } ?>
</script>
<?php if ($this->uri->segment(1) != '' && $this->uri->segment(1) != 'zakat') { ?>
<style type="text/css">
.ftco-navbar-light{
	background-color: #343a40 !important;
}
</style>
<?php } ?>
<style type="text/css">

</style>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url();?>">KitaNgaji.com</a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto menusBar">
					<li class="nav-item"><a href="<?php echo base_url();?>donasi" <?php if ($this->uri->segment(1) == 'donasi' ||$this->uri->segment(1) == 'detail') { ?> class="nav-link active" <?php }else{ ?> class="nav-link"<?php } ?>><span>Donasi</span></a></li>
					<!-- <li class="nav-item"><a href="<?php //echo base_url();?>zakat" <?php //if ($this->uri->segment(1) == 'zakat') { ?>
						class="nav-link active" <?php }//else{ ?> class="nav-link" <?php } ?>><span>Zakat</span></a></li> -->
						<li class="nav-item dropdown">
							<a <?php if ($this->uri->segment(1) == 'daftarGuru' || $this->uri->segment(1) == 'daftarMurid' || $this->uri->segment(1) == 'daftarDonatur') { ?> class="nav-link active dropdown-toggle" <?php }else{ ?> class="nav-link dropdown-toggle" <?php } ?> href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Daftar
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url();?>daftarGuru">Guru</a>
								<a class="dropdown-item" href="<?php echo base_url();?>daftarMurid">Murid</a>
								<a class="dropdown-item" href="<?php echo base_url();?>daftarDonatur">Donatur</a>
							</div>
						</li>
						<li class="nav-item"><a href="<?php echo base_url();?>login" <?php if ($this->uri->segment(1) == 'login') { ?>
							class="nav-link active" <?php }else{ ?> class="nav-link" <?php } ?>><span>Login</span></a></li>
							<li class="nav-item cta text-center openSearchbox"><button type="button" class="btn btn-success mt-2 w-100">Cari</button></li>
						</ul>
						<form action="" class="search-box">
							<button type="button" class="btn btn-sm float-right close-search-box"><i class="fas fa-times"></i></button> 
							<input type="text" class="text search-input" placeholder="Type here to search..." />
						</form>
					</div>
				</div>
			</nav>
			<?php echo $content;?>

			<?php if ($this->uri->segment(1) != 'login' && $this->uri->segment(1) != 'daftarGuru' && $this->uri->segment(1) != 'daftarMurid' && $this->uri->segment(1) != 'daftarDonatur') { ?>
			<footer class="ftco-footer ftco-section">
				<div class="container">
					<div class="row mb-5">
						<div class="col-md">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2">Kita<span>Ngaji</span></h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
						<div class="col-md">
							<div class="ftco-footer-widget mb-4 ml-md-4">
								<h2 class="ftco-heading-2">Links</h2>
								<ul class="list-unstyled">
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Beranda</a></li>
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Tentang</a></li>
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Donasi</a></li>
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Zakat</a></li>
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Daftar</a></li>
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Login</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2">Practice Areas</h2>
								<ul class="list-unstyled">
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Family Law</a></li>
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Business Law</a></li>
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Insurance Law</a></li>
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Criminal Law</a></li>
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Drug Offenses</a></li>
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Property Law</a></li>
									<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Employment Law</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2">Have a Questions?</h2>
								<form>
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" placeholder="example@mail.com" class="form-control">
									</div>
									<div class="form-group">
										<label>Email</label>
										<textarea class="form-control"></textarea>
									</div>
									<button type="button" class="btn btn-success btn-md float-right">Kirim <i class="fab fa-telegram"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fas fa-heart color-danger" aria-hidden="true"></i> by <a href="#" target="_blank">Kitangaji.com</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
			<?php } ?>

			<!-- loader -->
			<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
		</body>
		<script src="<?php echo base_url();?>assets/home/js/aos.js"></script>
		<script src="<?php echo base_url();?>assets/home/js/main.js"></script>

		</html>