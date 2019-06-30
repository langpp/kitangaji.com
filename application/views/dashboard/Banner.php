<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="section-header">
          <div>Banner</div>
        </h1>

        <div class="card">
          <div class="card-header">
            <div class="float-right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalAdd"><i class="fas fa-plus"></i></button>
            </div>
            <h4>CMS Banner</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="dataTable">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>File</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Tanggal Upload</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td><img alt="image" src="<?php echo base_url();?>assets/dashboard/img/avatar/avatar-1.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Wildan Ahdian"> Irwansyah Saputra.jpg</td>
                    <td class="text-center"><div class="badge badge-success">Aktif</div></td>
                    <td class="text-center"><div class="badge badge-info">26/06/2019</div></td>
                    <td class="text-center"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-action btn-primary">Detail</button> <button type="button" data-toggle="modal" data-target="#myModalEdit" class="btn btn-action btn-warning">Edit</button> <button type="button" class="btn btn-action btn-danger">Delete</button></td>
                  </tr>
                  <tr>
                    <td class="text-center">2</td>
                    <td><img alt="image" src="<?php echo base_url();?>assets/dashboard/img/avatar/avatar-2.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Wildan Ahdian"> Hasan Basri.jpg</td>
                    <td class="text-center"><div class="badge badge-success">Aktif</div></td>
                    <td class="text-center"><div class="badge badge-info">26/06/2019</div></td>
                    <td class="text-center"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-action btn-primary">Detail</button> <button type="button" data-toggle="modal" data-target="#myModalEdit" class="btn btn-action btn-warning">Edit</button> <button type="button" class="btn btn-action btn-danger">Delete</button></td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td><img alt="image" src="<?php echo base_url();?>assets/dashboard/img/avatar/avatar-3.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Wildan Ahdian"> Kusnadi.jpg</td>
                    <td class="text-center"><div class="badge badge-danger">Tidak Aktif</div></td>
                    <td class="text-center"><div class="badge badge-info">26/06/2019</div></td>
                    <td class="text-center"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-action btn-primary">Detail</button> <button type="button" data-toggle="modal" data-target="#myModalEdit" class="btn btn-action btn-warning">Edit</button> <button type="button" class="btn btn-action btn-danger">Delete</button></td>
                  </tr>
                  <tr>
                    <td class="text-center">4</td>
                    <td><img alt="image" src="<?php echo base_url();?>assets/dashboard/img/avatar/avatar-4.jpeg" class="rounded-circle" width="35" data-toggle="title" title="Wildan Ahdian"> Rizal Fakhri.jpg</td>
                    <td class="text-center"><div class="badge badge-success">Aktif</div></td>
                    <td class="text-center"><div class="badge badge-info">26/06/2019</div></td>
                    <td class="text-center"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-action btn-primary">Detail</button> <button type="button" data-toggle="modal" data-target="#myModalEdit" class="btn btn-action btn-warning">Edit</button> <button type="button" class="btn btn-action btn-danger">Delete</button></td>
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
        <h4 class="modal-title">Detail Banner</h4>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="text-center">
          <img alt="image" src="<?php echo base_url();?>assets/dashboard/img/avatar/avatar-1.jpeg" class="img-fluid">
        </div><br>
        <table class="table table-hover table-striped">
          <tr>
            <td><b>Tanggal Upload</b></td>
            <td>2019/06/26</td>
          </tr>
          <tr>
            <td><b>Status</b></td>
            <td>Aktif</td>
          </tr>
        </table>
      </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModalEdit">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Banner</h4>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="text-center">
          <img alt="image" src="<?php echo base_url();?>assets/dashboard/img/avatar/avatar-1.jpeg" class="img-fluid">
        </div><br>
        <div class="form-group">
          <label>Status</label>
          <select class="form-control">
            <option>Aktif</option>
            <option>Tidak Aktif</option>
          </select>
        </div>
        <div class="form-group">
          <label>File</label>
          <input type="file" name="file" class="form-control">
        </div>
      </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success">Simpan</button>
      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModalAdd">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Banner</h4>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <label>Status</label>
          <select class="form-control">
            <option>Aktif</option>
            <option>Tidak Aktif</option>
          </select>
        </div>
        <div class="form-group">
          <label>File</label>
          <input type="file" name="file" class="form-control">
        </div>
      </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success">Simpan</button>
      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>