<div class="main-content">
	<section class="section">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="section-header">
					<div>Laporan KBM</div>
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
												<th>Nama Murid</th>
												<th>Alamat</th>
												<th>Kota</th>
												<th>Status</th>
												<th>Detail</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Umar</td>
												<td>bendungan Depok</td>
												<td>Depok</td>
												<td><span class="badge badge-info">Aktif</span></td>
												<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKBM">Lihat</button></td>
											</tr>
											<tr>
												<td>2</td>
												<td>Umar</td>
												<td>bendungan Depok</td>
												<td>Depok</td>
												<td><span class="badge badge-info">Aktif</span></td>
												<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKBM">Lihat</button></td>
											</tr>
											<tr>
												<td>3</td>
												<td>Umar</td>
												<td>bendungan Depok</td>
												<td>Depok</td>
												<td><span class="badge badge-info">Aktif</span></td>
												<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKBM">Lihat</button></td>
											</tr>
											<tr>
												<td>4</td>
												<td>Umar</td>
												<td>bendungan Depok</td>
												<td>Depok</td>
												<td><span class="badge badge-info">Aktif</span></td>
												<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKBM">Lihat</button></td>
											</tr>
											<tr>
												<td>5</td>
												<td>Umar</td>
												<td>bendungan Depok</td>
												<td>Depok</td>
												<td><span class="badge badge-info">Aktif</span></td>
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
					 <div class="form-group">
                  <label class="text-left">Tanggal</label>
                  <input type="date" class="form-control mb-2" required>
                </div>
					 <div class="form-group">
                  <label class="text-left">Kunjugan</label>
                  <input type="text" class="form-control mb-2" placeholder="Kunjungan Kemana" required>
                </div>
                <div class="form-group">
                  <label class="text-left">Kunjugan</label>
                  <textarea class="form-control"></textarea>
                </div>
				</div>
				<div class="modal-footer float-right">
					<button class="btn btn-success">Kirim</button>
				</div>
			</div>
		</div>
	</div>