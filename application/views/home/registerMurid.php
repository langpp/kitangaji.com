<section class="ftco-section bg-light mt-5 mt-5-nomedia padding-ftco">
  <div class="container">
   <div class="row justify-content-sm-center">
    <div class="col-sm-10 col-md-8">

      <div class="card border-success">
        <div class="card-body">
          <form class="form-signin">
            <h5 class="mb-3 text-center">Daftar Menjadi Murid</h5>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="text-left">Nama Lengkap</label>
                  <input type="text" class="form-control mb-2" placeholder="Nama Lengkap Anda" required autofocus>
                </div>
                <div class="form-group">
                  <label class="text-left">Nomor Telphon</label>
                  <input type="number" class="form-control mb-2" placeholder="No Telphon" required>
                </div>
                <div class="form-group">
                  <label class="text-left">Email</label>
                  <input type="email" class="form-control mb-2" placeholder="example@mail.com" required>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                  <label class="text-left">Password</label>
                  <input type="password" class="form-control mb-2" placeholder="*******" required>
                </div>
                <div class="form-group">
                  <label class="text-left">Paket</label>
                  <select class="form-control">
                    <option hidden="">Silahkan Pilih</option>
                    <option>Paket I</option>
                    <option>Paket II</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="text-left">Metode Pembayaran</label>
                  <select class="form-control">
                    <option hidden="">Silahkan Pilih</option>
                    <option>Tunai</option>
                    <option>Atm</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group text-center">
              <label class="text-left">Jenis Pembayaran</label>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio">Mandiri
                </label>
                <label class="form-check-label ml-5">
                  <input type="radio" class="form-check-input" name="optradio">Bersama
                </label>
              </div>
            </div>
            
            <a class="btn btn-md btn-primary btn-block" href="<?php echo base_url();?>dashboardMurid">Daftar Sekarang</a>
            <p class="mt-2 text-center">Sudah punya akun? <a href="<?php echo base_url();?>login">Login</a></p>
          </form>
        </div>
      </div><br>

      <div class="card text-center">
        <div class="card-body">
          <button class="btn btn-md btn-info btn-block mb-2" type="button"><i class="fab fa-facebook"></i> Daftar Dengan Facebook</button>
          <button class="btn btn-md btn-danger btn-block" type="button"><i class="fab fa-google"></i> Daftar Dengan Google</button>
        </div>
      </div>

    </div>
  </div>
</div>
</section>