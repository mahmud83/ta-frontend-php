<?php
  $start = $_GET['startday'];
  $end = $_GET['endday'];
?>
@extends('layouts.app')
@section('head-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<link rel="stylesheet" type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#malicioustable').DataTable({
      "ajax": "http://localhost:9090/api/klasifikasimalicious/2019-05-08/2019-05-08/?pageNo=1&size=100",
      "columns": [{
          "data": "uid"
        },
        {
          "data": "orig_h"
        },
        {
          "data": "orig_p"
        },
        {
          "data": "resp_h"
        },
        {
          "data": "resp_p"
        },
        {
          "data": "dns.0.query"
        },
        {
          "data": "label"
        }
      ]
    });
  });
  $(document).ready(function () {
    $('#topDomainQuery').DataTable({
      "ajax": "http://localhost:9090/api/dnslogqueries/<?php echo $start ?>/<?php echo $end ?>",
      "columns": [{
          "data": "name"
        },
        {
          "data": "value"
        }
      ]
    });
  });
  $(document).ready(function () {
    $('#topRcode').DataTable({
      "ajax": "http://localhost:9090/api/dnslogrcodes/<?php echo $start ?>/<?php echo $end ?>",
      "columns": [{
          "data": "name"
        },
        {
          "data": "value"
        }
      ]
    });
  });
  $(document).ready(function () {
    $('#toporigin').DataTable({
      "ajax": "http://localhost:9090/api/connlogtoporigin/<?php echo $start ?>/<?php echo $end ?>",
      "columns": [{
          "data": "name"
        },
        {
          "data": "value"
        }
      ]
    });
  });
  $(document).ready(function () {
    $('#topresponder').DataTable({
      "ajax": "http://localhost:9090/api/connlogtopresp/<?php echo $start ?>/<?php echo $end ?>",
      "columns": [{
          "data": "name"
        },
        {
          "data": "value"
        }
      ]
    });
  });
  $(document).ready(function () {
    $('#dnsrecord').DataTable({
      "ajax": "http://localhost:9090/api/dnslog/<?php echo $start ?>/<?php echo $end ?>/?pageNo=1&size=100",
      "columns": [{
          "data": "ts"
        },
        {
          "data": "uid"
        },
        {
          "data": "id_orig_h"
        },
        {
          "data": "id_orig_p"
        },
        {
          "data": "id_resp_h"
        },
        {
          "data": "id_resp_p"
        },
        {
          "data": "proto"
        },
        {
          "data": "query"
        },
      ]
    });
  });
</script>
@endsection
@section('content')
<div class="section-header">
  <h1>Report</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">statistic</a></div>
    <div class="breadcrumb-item">DNS Report statistic</div>
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
        <h4>Periode</h4>
      </div>
      <!-- card body -->
      <div class="card-body">
        <div class="row">
          <form action="{{ action('ReportController@resStatistic') }}" method="get">
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
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="far fa-newspaper"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Malicious</h4>
        </div>
        <div class="card-body">
          <p id="malicious"></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-success">
        <i class="fas fa-circle"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Normal</h4>
        </div>
        <div class="card-body">
          <p id="normal"></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- start row2 -->
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Queried DNS Record</h4>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice" style="height: 700px; overflow: auto">
          <table id="topDomainQuery" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>name</th>
                <th>count</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
              <tr>
                <th>name</th>
                <th>count</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top Rcode</h4>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice" style="height: 700px; overflow: auto">
          <table id="topRcode" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>name</th>
                <th>count</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
              <tr>
                <th>name</th>
                <th>count</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end row2 -->

<!-- start row3 -->
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top Origin</h4>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice">
          <table id="toporigin" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>name</th>
                <th>count</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
              <tr>
                <th>name</th>
                <th>count</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Top Responder</h4>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice">
          <table id="topresponder" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>name</th>
                <th>count</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
              <tr>
                <th>name</th>
                <th>count</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end row3 -->

<!-- Detailed DNS Record -->
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>DNS Record</h4>
        <div class="card-header-action">
          <div class="btn-group mb-3" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-danger">20%</button>
            <button type="button" class="btn btn-warning">50%</button>
            <button type="button" class="btn btn-success">100%</button>
          </div>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice">
          <table id="dnsrecord" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>date</th>
                <th>uid</th>
                <th>source</th>
                <th>source port</th>
                <th>destination</th>
                <th>destination port</th>
                <th>proto</th>
                <th>query</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
              <tr>
                <th>date</th>
                <th>uid</th>
                <th>source</th>
                <th>source port</th>
                <th>destination</th>
                <th>destination port</th>
                <th>proto</th>
                <th>query</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- malicious table -->
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>Malicious</h4>
        <div class="card-header-action">
          <div class="btn-group mb-3" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-danger">20%</button>
            <button type="button" class="btn btn-warning">50%</button>
            <button type="button" class="btn btn-success">100%</button>
          </div>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice" style="height: 700px; overflow: auto">
          <table id="malicioustable" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>uid</th>
                <th>source</th>
                <th>source port</th>
                <th>destination</th>
                <th>destination port</th>
                <th>query</th>
                <th>label</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
              <tr>
                <th>uid</th>
                <th>source</th>
                <th>source port</th>
                <th>destination</th>
                <th>destination port</th>
                <th>query</th>
                <th>label</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('foot-script')
<script>
  // get top resp
  axios.get('http://localhost:9090/api/dnslogrcodes/<?php echo $start ?>/<?php echo $end ?>')
    .then(function (response) {
      var data = response.data.data
      // handle success
      $.each(data, function (index, value) {
        //  console.log(value);       // READ THE DATA.      
        bindTopRcode(value);
      });
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .then(function () {
      // always executed
    });

  function bindTopRcode(val) {
    var name = "<td>" + val.name + "</td>";
    var count = "<td>" + val.value + "</td>";
    var tableRow = "<tr>" + name + count + "</tr>";
    $('#topRcode tbody').append($(tableRow));
  }

  // count malicious traffic
  axios.get('http://localhost:9090/api/classification/getmaliciouscount/<?php echo $start ?>/<?php echo $end ?>')
    .then(function (response) {
      var data = response.data.data
      // handle success
      bindmaliciouscount(data);
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .then(function () {
      // always executed
    });

  function bindmaliciouscount(val) {
    $('#malicious').text(val);
    // console.log(val);
  }

  // count normal traffic
  axios.get('http://localhost:9090/api/classification/getnormalcount/<?php echo $start ?>/<?php echo $end ?>')
    .then(function (response) {
      var data = response.data.data
      bindnormalcount(data);
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .then(function () {
      // always executed
    });

  function bindnormalcount(val) {
    $('#normal').text(val);
    // console.log(val);
  }

  // total count
  axios.get('http://localhost:9090/api/connlogtotal/<?php echo $start ?>/<?php echo $end ?>')
    .then(function (response) {
      var data = response.data.data
      bindconncount(data);
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .then(function () {
      // always executed
    });

  function bindconncount(val) {
    $('#total').text(val);
    // console.log(val);
  }

  // script untuk tampilan
  $('#toggle-modal').fireModal({
    title: 'My Modal',
    content: 'Hello!'
  });
</script>
@endsection