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
  <div class="col-lg-4 col-md-4 col-sm-12">
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
  </div>
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

@endsection
@section('foot-script')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
  var malicious = 0;
  var normal = 0
  // get all dnslogs
  axios.get('http://68.183.177.125:9090/api/classification/totalmalicious')
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

    axios.get('http://68.183.177.125:9090/api/classification/totalnormal')
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