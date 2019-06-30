      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Selamat Datang di Dashboard Kitabisangaji.com</div>
          </h1>
          <div class="row">
            <div class="col-20per col-md-6 col-sm-12">
              <div class="card card-sm card-primary">
                <div class="card-icon text-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-body">
                    48 
                  </div>
                  <div class="card-header">
                    <h4>Total Guru</h4>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-20per col-md-6 col-sm-12">
              <div class="card card-sm card-info">
                <div class="card-icon text-info">
                  <i class="fas fa-paste"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-body">
                    18
                  </div>
                  <div class="card-header">
                    <h4>Total Murid</h4>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-20per col-md-6 col-sm-12">
              <div class="card card-sm card-warning">
                <div class="card-icon text-warning">
                  <i class="fas fa-motorcycle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-body">
                    41
                  </div>
                  <div class="card-header">
                    <h4> Total Donatur</h4>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-20per col-md-6 col-sm-12">
              <div class="card card-sm card-danger">
                <div class="card-icon text-danger">
                  <i class="fas fa-battery-three-quarters"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-body">
                    2
                  </div>
                  <div class="card-header">
                    <h4>Total KBM</h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-20per col-md-12 col-sm-12">
              <div class="card card-sm card-dark">
                <div class="card-icon text-dark">
                  <i class="fas fa-cogs"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-body">
                    3
                  </div>
                  <div class="card-header">
                    <h4>Total Proyek</h4>
                  </div>
                </div>
              </div>
            </div>                  
          </div>

          <div class="row">
            <div class="col-lg-7 col-md-7 col-12 col-sm-12">
              <div class="card" id="mycard-dimiss">
                <div class="card-header">
                  <div class="float-right">
                    <a data-collapse="#mycard-collapse" class="btn btn-icon"><i class="ion ion-minus"></i></a>
                  </div>
                  <h4>Statistics</h4>
                </div>
                <div class="card-body" id="mycard-collapse">
                  <div class="text-center">
                    <h6 class="text-center text-muted"><?php echo date("d F Y");?></h6>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <canvas id="myChart" height="213"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12 col-sm-12">
              <div class="card" id="mycard-dimiss-alfa">
                <div class="card-header">
                  <div class="float-right">
                    <a data-collapse="#mycard-collapse-alfa" class="btn btn-icon"><i class="ion ion-minus"></i></a>
                  </div>
                  <h4>KBM & PROYEK</h4>
                </div>
                <div class="card-body" id="mycard-collapse-alfa">         
                  <div class="float-right">
                    <div class="btn-group">
                      <button class="btn btn-outline-success btn-sm" id="btn-up">KBM</button>
                      <button class="btn btn-outline-info btn-sm" id="btn-down">Proyek</button>
                    </div>
                  </div><br><br>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Kegiatan</th>
                          <th>Terkumpul</th>
                          <th>Progress</th>
                        </tr>
                      </thead>
                      <tbody id="table-up">                         
                        <tr>
                          <td>
                            Bekasi
                          </td>
                          <td>
                            248
                          </td>
                          <td>
                            <span class="badge badge-success">46%</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Tanggerang
                          </td>
                          <td>
                            248
                          </td>
                          <td>
                            <span class="badge badge-success">46%</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Depok
                          </td>
                          <td>
                            185
                          </td>
                          <td>
                            <span class="badge badge-success">46%</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Bogor
                          </td>
                          <td>
                            345
                          </td>
                          <td>
                            <span class="badge badge-success">46%</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Jakarta
                          </td>
                          <td>
                           123
                         </td>
                         <td>
                          <span class="badge badge-success">46%</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Tasik
                        </td>
                        <td>
                         123
                       </td>
                       <td>
                        <span class="badge badge-success">46%</span>
                      </td>
                    </tr>
                  </tbody>

                  <tbody id="table-down" style="border-top: 0px;">                         
                    <tr>
                      <td>
                        Bekasi
                      </td>
                      <td>
                        248
                      </td>
                      <td>
                        <span class="badge badge-info">46%</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Tanggerang
                      </td>
                      <td>
                        248
                      </td>
                      <td>
                        <span class="badge badge-info">46%</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Depok
                      </td>
                      <td>
                        185
                      </td>
                      <td>
                        <span class="badge badge-info">46%</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Bogor
                      </td>
                      <td>
                        345
                      </td>
                      <td>
                        <span class="badge badge-info">46%</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Jakarta
                      </td>
                      <td>
                       123
                     </td>
                     <td>
                      <span class="badge badge-info">46%</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Tasik
                    </td>
                    <td>
                     123
                   </td>
                   <td>
                    <span class="badge badge-success">46%</span>
                  </td>
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
<script type="text/javascript">
  $(document).ready(function(){
    $("#table-down").hide();
    $("#btn-up").click(function(){
      $("#table-up").fadeIn();
      $("#table-down").hide();
    });
    $("#btn-down").click(function(){
      $("#table-down").fadeIn();
      $("#table-up").hide();
    });
  }); 
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: '#dc3545',
        borderColor: '#f00000',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
</script>