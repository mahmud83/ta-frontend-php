@extends('layouts.app')
@section('head-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script type="text/javascript" src="{{ asset('/js') }}/chartjs-plugin-colorschemes.min.js"></script>
@endsection
@section('content')
<!-- row 1 -->
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top Rcode</h4>
      </div>
      <div class="card-body p-0">
        <canvas id="toprcode" width="100" height="100"></canvas>
      </div>
      <div class="card-body p-0">
        <div class="float-right">
          <nav>
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top Query</h4>
      </div>
      <div class="card-body-0">
        <canvas id="" width="100" height="100"></canvas>
      </div>
      <div class="card-body p-0">
        <div class="float-right">
          <nav>
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- row 2 -->
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top Query</h4>
      </div>
      <div class="card-body-0">
        <canvas id="topquery" width="100" height="100"></canvas>
      </div>
      <div class="card-body p-0">
        <div class="float-right">
          <nav>
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- row 3 -->
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top Origin</h4>
      </div>
      <div class="card-body p-0">
        <canvas id="toporigin" width="100" height="100"></canvas>
      </div>
      <div class="card-body p-0">
        <div class="float-right">
          <nav>
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top Responder</h4>
      </div>
      <div class="card-body-0">
        <canvas id="toprespon" width="100" height="100"></canvas>
      </div>
      <div class="card-body p-0">
        <div class="float-right">
          <nav>
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('foot-script')
<script type="text/javascript">
  var charts = ["line", "bar", "radar", "polarArea", "pie", "doughnut"];
  var colors = ["#009EA0", "#A7A9AC", "#D15F27", "#BAD80A", "#E0AA0F", "#754760", "#373535"]

  //Set chart number to render different charts
  // 0 = Line Chart
  // 1 = Bar Chart
  // 2 = Radar Chart 
  // 3 = Polar Area Chart
  // 4 = Pie Chart
  // 5 = Doughnut Chart    


  $(document).ready(function () {
    // console.log(_spPageContextInfo.webAbsoluteUrl);
    var hostname = "http://localhost:9090/api"
    var Urls = [
      "http://localhost:9090/api/dnslogrcodes/2019-04-11/2019-04-11/",
      "http://localhost:9090/api/dnslogqueries/2019-04-11/2019-04-11"
    ];
    var toprcodeConfig = {
      url: hostname + "/dnslogrcodes/2019-04-11/2019-04-11/",
      id: "toprcode",
      type: "pie",
      xAxisName: "name", //X-Axis Label Names from List
      yAxisName: "value", //Y-Axis Values from List
      label: "simple chart pie",
      text: "hello apa kabar",
    };
    var topqueryConfig = {
      url: hostname + "/dnslogqueries/2019-04-11/2019-04-11",
      id: "topquery",
      type: "line",
      xAxisName: "name", //X-Axis Label Names from List
      yAxisName: "value", //Y-Axis Values from List
      label: "Domain name",
      text: "Domain yang paling banyak di akses",
    };
    var toporiginConfig = {
      url: hostname + "/dnslogorigh/2019-04-11/2019-04-11",
      id: "toporigin",
      type: "line",
      xAxisName: "name", //X-Axis Label Names from List
      yAxisName: "value", //Y-Axis Values from List
      label: "Source Address",
      text: "Domain yang paling banyak di akses",
    };
    var topresponConfig = {
      url: hostname + "/dnslogresph/2019-04-11/2019-04-11",
      id: "toprespon",
      type: "line",
      xAxisName: "name", //X-Axis Label Names from List
      yAxisName: "value", //Y-Axis Values from List
      label: "Destination Address",
      text: "Domain yang paling banyak di akses",
    };

    // rcode
    generateChart(toprcodeConfig);
    // topquery
    generateChart(topqueryConfig);
    // top origin
    generateChart(toporiginConfig);
    // top respoon
    generateChart(topresponConfig);

  });
</script>
@endsection