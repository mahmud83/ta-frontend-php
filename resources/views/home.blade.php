@extends('layouts.app')

@section('content')
  <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Traffic Statistics -
                    <div class="dropdown d-inline">
                      <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Select Month</li>
                        <li><a href="#" class="dropdown-item">January</a></li>
                        <li><a href="#" class="dropdown-item">February</a></li>
                        <li><a href="#" class="dropdown-item">March</a></li>
                        <li><a href="#" class="dropdown-item">April</a></li>
                        <li><a href="#" class="dropdown-item">May</a></li>
                        <li><a href="#" class="dropdown-item">June</a></li>
                        <li><a href="#" class="dropdown-item">July</a></li>
                        <li><a href="#" class="dropdown-item active">August</a></li>
                        <li><a href="#" class="dropdown-item">September</a></li>
                        <li><a href="#" class="dropdown-item">October</a></li>
                        <li><a href="#" class="dropdown-item">November</a></li>
                        <li><a href="#" class="dropdown-item">December</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">24</div>
                      <div class="card-stats-item-label">Conn</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">12</div>
                      <div class="card-stats-item-label">Malicious</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">23</div>
                      <div class="card-stats-item-label">Normal</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Connections</h4>
                  </div>
                  <div class="card-body">
                    59
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Domain</h4>
                  </div>
                  <div class="card-body">
                    $187,13
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Sales</h4>
                  </div>
                  <div class="card-body">
                    4,732
                  </div>
                </div>
              </div>
            </div>
  </div>
  <div class="row">
    <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4>Top Queried DNS Record</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Count</th>
                      </tr>
                      <tr>
                        <td><a href="#">www.google.com</a></td>
                        <td class="font-weight-600">A</td>
                        <td><div class="badge badge-warning">1,736</div></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
    </div>
    <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4>Top Queried Returning NXDOMAIN</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Invoice ID</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Due Date</th>
                      </tr>
                      <tr>
                        <td><a href="#">INV-87239</a></td>
                        <td class="font-weight-600">Kusnadi</td>
                        <td><div class="badge badge-warning">Unpaid</div></td>
                        <td>July 19, 2018</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
    </div>
  </div>
@endsection