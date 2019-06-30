<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="section-header">
          <div>Kritik Dan Saran</div>
        </h1>

        <div class="card">
          <div class="card-header">
            <h4>Kritik Dan Saran</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="dataTable">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Email</th>
                    <th class="text-center">Tanggal Upload</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>EXAMPLE@email.com</td>
                    <td class="text-center"><div class="badge badge-info">26/06/2019</div></td>
                    <td class="text-center"><a href="mailto:#" class="btn btn-action btn-primary">Balas</a></td>
                  </tr>
                  <tr>
                    <td class="text-center">2</td>
                    <td>EXAMPLE@email.com</td>
                    <td class="text-center"><div class="badge badge-info">26/06/2019</div></td>
                    <td class="text-center"><a href="mailto:#" class="btn btn-action btn-primary">Balas</a></td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td>EXAMPLE@email.com</td>
                    <td class="text-center"><div class="badge badge-info">26/06/2019</div></td>
                    <td class="text-center"><a href="mailto:#" class="btn btn-action btn-primary">Balas</a></td>
                  </tr>
                  <tr>
                    <td class="text-center">4</td>
                    <td>EXAMPLE@email.com</td>
                    <td class="text-center"><div class="badge badge-info">26/06/2019</div></td>
                    <td class="text-center"><a href="mailto:#" class="btn btn-action btn-primary">Balas</a></td>
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