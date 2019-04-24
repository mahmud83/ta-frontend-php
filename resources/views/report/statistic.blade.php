@extends('layouts.app')
@section('head-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script type="text/javascript" src="{{ asset('/js') }}/chartjs-plugin-colorschemes.min.js"></script>
@endsection
@section('content')
<div class="section-header">
  <h1>Report Statistic</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">statistic</a></div>
    <div class="breadcrumb-item">DNS Report statistic</div>
  </div>
</div>
<!-- start row1 -->
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-stats">
        <div class="card-stats-title">Traffic Statistics</div>
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
  <div class="col-lg-8 col-md-8 col-sm-12">
    <!-- start date  -->
    <!-- card wrapper -->
    <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Periode</h4>
      </div>
      <!-- card body -->
      <div class="card-body">
        <div class="row">
          <form action="{{ action('ReportController@test') }}" method="get">
            <div class="row">
              <div class="col-md">
                <?php echo "<input type='date' class='form-control' name='startday' value='".date("Y-m-d")."'>"; ?>
              </div>
              <div class="col-md">
                <?php echo "<input type='date' class='form-control' name='endday' value='".date("Y-m-d")."'>"; ?>
              </div>
              <div class="col-md2"></div>
              <div class="col-md2">
                <input class="btn btn-success" type="submit">
              </div>
            </div>
            <!-- <button ><i class="fas fa-submit"></i></button> -->
          </form>
        </div>
        <!-- card footer -->
        <div class="card-footer">
        </div>
      </div>
    </div>
  </div>
  <!-- end row1 -->

</div>
<!-- row 2 -->
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
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top Query</h4>
      </div>
      <div class="card-body-0">
        <canvas id="topprotokol" width="100" height="100"></canvas>
      </div>
      <div class="card-body p-0">
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
    var hostname = "http://abdullahainun.me:9090/api"
    var Urls = [
      "http://abdullahainun.me:9090/api/dnslogrcodes/2019-04-11/2019-04-11/",
      "http://abdullahainun.me:9090/api/dnslogqueries/2019-04-11/2019-04-11"
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
    var topprotokolConfig = {
      url: hostname + "/connlogprotokol/2019-04-11/2019-04-11/",
      id: "topprotokol",
      type: "pie",
      xAxisName: "name", //X-Axis Label Names from List
      yAxisName: "value", //Y-Axis Values from List
      label: "Top Protokol",
      text: "",
    }
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
      url: hostname + "/connlogtoporigin/2019-04-11/2019-04-11",
      id: "toporigin",
      type: "line",
      xAxisName: "name", //X-Axis Label Names from List
      yAxisName: "value", //Y-Axis Values from List
      label: "Source Address",
      text: "",
    };
    var topresponConfig = {
      url: hostname + "/connlogtopresp/2019-04-11/2019-04-11",
      id: "toprespon",
      type: "line",
      xAxisName: "name", //X-Axis Label Names from List
      yAxisName: "value", //Y-Axis Values from List
      label: "Destination Address",
      text: "",
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