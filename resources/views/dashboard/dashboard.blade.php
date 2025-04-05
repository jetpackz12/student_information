<x-layout>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>00</h3>
    
                    <p>COURSE(S)</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>00</h3>
    
                    <p>SUBJECT(S)</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>00</h3>
    
                    <p>STUDENT(S)</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>00</h3>
    
                    <p>TEACHER(S)</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              <section class="col-lg-12 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-body">
                      <div class="d-flex">
                        <p class="d-flex flex-column">
                          <span class="text-bold text-lg">18,230</span>
                          <span>Total Student(s)</span>
                        </p>
                      </div>
                      <!-- /.d-flex -->
      
                      <div class="position-relative mb-4">
                        <canvas id="sales-chart" height="200"></canvas>
                      </div>
                    </div>
                  </div>
                <!-- /.card -->
              </section>
              <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>

      <script>
        $("#dashboard_link").addClass("active");

        let ticksStyle = {
            fontColor: '#495057',
            fontStyle: 'bold'
        }

        let mode = 'index'
        let intersect = true

        let $salesChart = $('#sales-chart')
        let salesChart = new Chart($salesChart, {
            type: 'bar',
            data: {
            labels: ['Year 2024', 'Year 2025'],
            datasets: [
                {
                backgroundColor: '#007bff',
                borderColor: '#007bff',
                data: [1000, 1500]
                }
            ]
            },
            options: {
            maintainAspectRatio: false,
            tooltips: {
                mode: mode,
                intersect: intersect
            },
            hover: {
                mode: mode,
                intersect: intersect
            },
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                // display: false,
                gridLines: {
                    display: true,
                    lineWidth: '4px',
                    color: 'rgba(0, 0, 0, .2)',
                    zeroLineColor: 'transparent'
                },
                ticks: $.extend({
                    beginAtZero: true,
                    callback: function (value) {
                        return value
                    }
                }, ticksStyle)
                }],
                xAxes: [{
                display: true,
                gridLines: {
                    display: true
                },
                ticks: ticksStyle
                }]
            }
            }
        })
    </script>
</x-layout>