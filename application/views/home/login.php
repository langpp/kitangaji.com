<section class="ftco-section bg-light mt-5 mt-5-nomedia padding-ftco">
  <div class="container">
   <div class="row justify-content-sm-center">
    <div class="col-sm-6 col-md-4">
<?php echo $this->session->flashdata('notif_login');?>
      <div class="card text-center">
        <div class="card-body">
          <form class="form-signin" action="<?php echo base_url();?>actionLogin" method="POST">
            <h5 class="mb-3">Masuk ke akun Anda</h5>
            <input type="email" class="form-control mb-2" name="email" placeholder="Email" required autofocus>
            <input type="password" class="form-control mb-2" name="password" placeholder="Password" required>
            <label class="checkbox float-left">
              <input type="checkbox" value="remember-me">
              Remember me
            </label>
            <a href="#" class="float-right">Need help?</a>
            <button type="submit" class="btn btn-md btn-primary btn-block mt-5">Sign In</a>
            <!-- <p class="mt-2">Belum punya akun? <a href="<?php echo base_url();?>daftarGuru">Create an account </a></p> -->
            <!-- <p class="text-center mt-3">Atau</p>
            <button class="btn btn-md btn-info btn-block mb-2" type="button"><i class="fab fa-facebook"></i> Masuk Dengan Facebook</button>
            <button class="btn btn-md btn-danger btn-block mb-2" type="button"><i class="fab fa-google"></i> Masuk Dengan Google</button> -->

          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>
</section>