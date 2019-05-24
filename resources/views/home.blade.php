@extends('layouts.app')
@section('content')
  <div class="jumbotron">
    <h1 class="display-4">Welcome, it's DNS Analyzer</h1>
    <p class="lead"></p>
    <hr class="my-4">
    <p>DNS Analyzer is an application to monitor and analyze DNS traffic to detect malicious or normal traffic</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="report/tables" role="button">start here</a>
    </p>
  </div>
  
<div class="row">
  <!-- <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-icon shadow-primary bg-primary">
        <i class="fas fa-archive"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Connections</h4>
        </div>
        <div class="card-body">
          <p id="total"></p>
        </div>
      </div>
    </div>
  </div> -->
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-icon shadow-primary bg-primary">
        <i class="fas fa-archive"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Normal</h4>
        </div>
        <div class="card-body">
          <p id="totalnormal"></p>                      
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-icon shadow-primary bg-primary">
        <i class="fas fa-archive"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Malicious</h4>
        </div>
        <div class="card-body">
          <p id="totalmalicious"></p>          
        </div>
      </div>
    </div>
  </div>
</div>

<!-- start row1 -->
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
    <!-- start date  -->
    <!-- card wrapper -->
    <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Filter DNS Record by periode</h4>
      </div>
      <!-- card body -->
      <div class="card-body">
        <div class="row">
          <form action="{{ action('ReportController@resTables') }}" method="get">
            <div class="row">
              <div class="col-md">
                <?php echo "<input type='date' class='form-control' name='startday' value='".date("Y-m-d")."'>"; ?>
              </div>
              <div class="col-md">
                <?php echo "<input type='date' class='form-control' name='endday' value='".date("Y-m-d")."'>"; ?>
              </div>
              <input type="hidden" name="jam" value="0001">
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


@endsection
@section('foot-script')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
  var malicious = 0;
  var normal = 0
  // get all dnslogs
  axios.get('http://202.46.4.53:9090/api/classification/totalmalicious')
    .then(function (response) {
      malicious = response.data.data
      // handle success
      $('#totalmalicious').append(malicious);
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .then(function () {
      // always executed
    });

    axios.get('http://202.46.4.53:9090/api/classification/totalnormal')
    .then(function (response) {
      normal = response.data.data
      // handle success
      $('#totalnormal').append(normal);
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .then(function () {
      // always executed
    });
    // var total = malicious + normal;    
    // $('#total').append(total);
</script>
@endsection