<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="section-header">
          <div>Profile Murid</div>
        </h1>

        <div class="card">
          <div class="card-header">
            <h4>Data Profile Murid Terbaru</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="dataTable">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Name</th>
                    <th class="text-center">Kegiatan Terakhir</th>
                    <th class="text-center">Aktivitas Terakhir</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td><img alt="image" src="<?php echo base_url();?>assets/dashboard/img/avatar/avatar-1.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Wildan Ahdian"> Irwansyah Saputra</td>
                    <td class="text-center">KBM Depok</td>
                    <td class="text-center"><div class="badge badge-info">26/06/2019</div></td>
                    <td class="text-center"><button data-toggle="modal" data-target="#myModal" class="btn btn-action btn-primary">Detail</button></td>
                  </tr>
                  <tr>
                    <td class="text-center">2</td>
                    <td><img alt="image" src="<?php echo base_url();?>assets/dashboard/img/avatar/avatar-2.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Wildan Ahdian"> Hasan Basri</td>
                    <td class="text-center">Proyek Depok</td>
                    <td class="text-center"><div class="badge badge-info">26/06/2019</div></td>
                    <td class="text-center"><button data-toggle="modal" data-target="#myModal" class="btn btn-action btn-primary">Detail</button></td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td><img alt="image" src="<?php echo base_url();?>assets/dashboard/img/avatar/avatar-3.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Wildan Ahdian"> Kusnadi</td>
                    <td class="text-center">Proyek Depok</td>
                    <td class="text-center"><div class="badge badge-info">26/06/2019</div></td>
                    <td class="text-center"><button data-toggle="modal" data-target="#myModal" class="btn btn-action btn-primary">Detail</button></td>
                  </tr>
                  <tr>
                    <td class="text-center">4</td>
                    <td><img alt="image" src="<?php echo base_url();?>assets/dashboard/img/avatar/avatar-4.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Wildan Ahdian"> Rizal Fakhri</td>
                    <td class="text-center">Proyek Depok</td>
                    <td class="text-center"><div class="badge badge-info">26/06/2019</div></td>
                    <td class="text-center"><button data-toggle="modal" data-target="#myModal" class="btn btn-action btn-primary">Detail</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Detail Murid</h4>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="text-center">
          <img alt="image" src="<?php echo base_url();?>assets/dashboard/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
        </div><br>
        <table class="table table-hover table-striped">
          <tr>
            <td><b>Nama</b></td>
            <td>Muhammad Umar Aziz</td>
          </tr>
          <tr>
            <td><b>Umur</b></td>
            <td>19 Tahun</td>
          </tr>
          <tr>
            <td><b>Tempat Tinggal</b></td>
            <td>Didunia</td>
          </tr>
          <tr>
            <td><b>Profesi</b></td>
            <td>Programmer</td>
          </tr>
          <tr>
            <td><b>Cita cita</b></td>
            <td>-</td>
          </tr>
          <tr>
            <td><b>Email</b></td>
            <td>example@mail.com</td>
          </tr>
          <tr>
            <td><b>Tentang</b></td>
            <td>
              -Bisa ngoding<br> 
              -Bisa Naik Motor</td>
          </tr>

        </table>
      </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Blokir</button>
      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>