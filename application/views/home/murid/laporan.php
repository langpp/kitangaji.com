<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="section-header">
          <div>Laporan</div>
        </h1>
        <div class="card">
          <div class="card-header">
            <h4>Data KBM Yang Anda Ikuti</h4>
          </div>
          <div class="card-body">
            <div class="row d-md-flex align-items-center justify-content-end">
              <div class="col-lg-12">
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="dataTable">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>Tanggal</th>
                        <th>Progress</th>
                        <th>Status</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>30 Juni 2019</td>
                        <td>
                         <div class="progress" style="height: 4px;" data-toggle="tooltip" title="" data-original-title="100%">
                          <div class="progress-bar bg-success" style="width: 100%;"></div>
                        </div>
                      </td>
                      <td><span class="badge badge-success">Meningkat</span></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKBM">Lihat</button></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>30 Juni 2019</td>
                      <td>
                       <div class="progress" style="height: 4px;" data-toggle="tooltip" title="" data-original-title="100%">
                        <div class="progress-bar bg-danger" style="width: 50%;"></div>
                      </div>
                    </td>
                    <td><span class="badge badge-danger">Turun</span></td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKBM">Lihat</button></td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>30 Juni 2019</td>
                    <td>
                     <div class="progress" style="height: 4px;" data-toggle="tooltip" title="" data-original-title="100%">
                      <div class="progress-bar bg-danger" style="width: 20%;"></div>
                    </div>
                  </td>
                  <td><span class="badge badge-danger">Turun</span></td>
                  <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKBM">Lihat</button></td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>30 Juni 2019</td>
                  <td>
                   <div class="progress" style="height: 4px;" data-toggle="tooltip" title="" data-original-title="100%">
                    <div class="progress-bar bg-success" style="width: 96%;"></div>
                  </div>
                </td>
                <td><span class="badge badge-success">Meningkat</span></td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKBM">Lihat</button></td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
</div>

<!-- Modal -->
<div class="modal fade" id="modalKBM" tabindex="-1" role="dialog" aria-labelledby="modalKBMLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKBMLabel">Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url(); ?>assets/home/images/image_1.jpg" class="img-fluid">
        <p class="mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</div>