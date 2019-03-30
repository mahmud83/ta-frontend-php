@extends('layouts.app')
@section('head-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
@endsection
@section('content')
  <div class="section-header">
    <h1>Report</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Report</a></div>
      <div class="breadcrumb-item">DNS Report</div>
    </div>
  </div>
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
    <div class="col-lg-4 col-md-4 col-sm-12">
  <!-- start date  -->
          <!-- card wrapper -->
        <div class="card">
          <!-- card header -->
          <div class="card-header">
            <!-- card title -->
            <h4>Start</h4>
          </div>
          <!-- card body -->
          <div class="card-body">
                <!-- <div id='datetimepicker'></div> -->
          </div>
          <!-- card footer -->
          <div class="card-footer">
            12:00 9 Maret 2018
          </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <!-- end date -->
                <!-- card wrapper -->
        <div class="card">
          <!-- card header -->
          <div class="card-header">
            <!-- card title -->
            <h4>End</h4>
          </div>
          <!-- card body -->
          <div class="card-body">
                <!-- <div id='datetimepicker'></div> -->
          </div>
          <!-- card footer -->
          <div class="card-footer">
            12:00 9 Maret 2018
          </div>
        </div>
    </div>
  </div>
  <!-- Top Domain result -->
  <div class="row">
    <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4>Top Queried DNS Record</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped" id="topDomainQuery">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Count</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
    </div>
    <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4>Top Queried Returning NXDOMAIN</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>IP Address</th>
                        <th>Count</th>
                        <th>Detail</th>
                      </tr>
                      <tr>
                        <td><a href="#">203.96.78.3</a></td>
                        <td class="font-weight-600">1,000</td>
                        <td><a href="#" class="btn btn-secondary" id="toggle-modal">Detail</a></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="card">
          <div class="card-header">
            <h4>Top Origin</h4>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive table-invoice">
              <table class="table table-striped">
                <tr>
                  <th>IP Address</th>
                  <th>Count</th>
                  <th>Detail</th>
                </tr>
                <tr>
                  <td><a href="#">105.42.89.111</a></td>
                  <td class="font-weight-600">1,500</td>
                  <td><a href="#" class="btn btn-secondary" id="toggle-modal">Detail</a></td>
                </tr>
              </table>
            </div>
          </div>
      </div>
    </div>    
    <div class="col-md-6">
      <div class="card">
          <div class="card-header">
            <h4>Top Respone</h4>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive table-invoice">
              <table class="table table-striped">
                <tr>
                  <th>IP Address</th>
                  <th>Count</th>
                  <th>Detail</th>
                </tr>
                <tr>
                  <td><a href="#">105.42.89.111</a></td>
                  <td class="font-weight-600">1,500</td>
                  <td><a href="#" class="btn btn-secondary" id="toggle-modal">Detail</a></td>
                </tr>
              </table>
            </div>
          </div>
      </div>
    </div>    
  </div>

  <div class="row">
    <div class="col-md-12">
      <div id='datetimepicker'></div>
    </div>
  </div>
  
  <!-- Detailed DNS Record -->
  <div class="row">
    <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>DNS Record</h4>
                  <div class="card-header-action">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped" id="myTable">
                    <thead>
                      <tr>
                      <td>Date</td>
                      <td>Source</td>
                      <td>Destination</td>
                      <td>Query</td>
                      <td>Detail</td>
                        <!-- <th>Date</th>
                        <th>uid</th>
                        <th>orig_h </th>
                        <th>orig_p</th>
                        <th>resp_h</th>
                        <th>resp_p</th>
                        <th>proto</th>
                        <th>trans_id</th>
                        <th>query</th>
                        <th>rcode</th>
                        <th>rcode_name</th>
                        <th>AA</th>
                        <th>TC</th>
                        <th>RD</th>
                        <th>RA</th>
                        <th>Z</th>
                        <th>answers</th>
                        <th>TTLs</th>
                        <th>rejected</th> -->
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
    </div>
  </div>  
</div> 

@endsection

@section('foot-script')
<script>

  // get all dnslogs
  axios.get('http://dnsapi.abdullahainun.me/api/dnslogs')
  .then(function (response) {
    var data = response.data.data
    // handle success
    $.each(data, function (index, value) {
      //  console.log(value);       // READ THE DATA.      
       bindDnslogs(value);
    });    
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .then(function () {
    // always executed
  });

  function bindDnslogs(val) {    
      // var box = "<td><div class='sort-handler'><i class='fas fa-th'></i></div></td>";
      var ts = "<td>" + val.ts + "</td>";
      var uid = "<td>" + val.uid + "</td>";
      var orig_h  = "<td>"+ val.id_orig_h  + "</td>";
      var orig_p = "<td>"+ val.id_orig_p + "</td>";
      var resp_h = "<td>"+ val.id_resp_h + "</td>";
      var resp_p = "<td>"+ val.id_resp_p + "</td>";
      var proto = "<td>"+ val.proto + "</td>";
      var trans_id = "<td>"+ val.trans_id + "</td>";
      var query = "<td>"+ val.query + "</td>";
      var rcode = "<td>"+ val.rcode + "</td>";
      var rcode_name = "<td>"+ val.rcode_name + "</td>";
      var AA = "<td>"+ val.AA + "</td>";
      var TC = "<td>"+ val.TC + "</td>";
      var RD = "<td>"+ val.RD + "</td>";
      var RA = "<td>"+ val.RA + "</td>";
      var Z = "<td>"+ val.Z + "</td>";
      var answers = "<td>"+ val.answers + "</td>";
      var TTLs = "<td>"+ val.TTLs + "</td>";
      var rejected = "<td>"+ val.rejected + "</td>";
      var detail = "<td><a href='#' class='btn btn-primary trigger--fire-modal-1' id='toggle-modal'>Detail</a></td>"

      var headRow = "<tbody> \
                      <tr class='clickable' data-toggle='collapse' aria-expanded='false' aria-controls='group-of-rows-1'> \
                        <td>"+ val.ts +"</td> \
          	            <td>" + val.resp_h +"</td> \
                        <td>"+ val.orig_h +"</td> \
                        <td>"+ val.query +"</td> \
                        <td>+</td> \
                      </tr> \
                    </tbody>";
      var tableRow = "<tr>"  + ts + orig_h + resp_h + query + detail + "</tr>";
      var tableRow2 = headRow;
      $('#myTable tbody').append($(tableRow));
  }

// get all dnslogs
axios.get('http://dnsapi.abdullahainun.me/api/dnslogs/queries')
  .then(function (response) {
    var data = response.data.data
    // handle success
    $.each(data, function (index, value) {
      //  console.log(value);       // READ THE DATA.      
       bindQueries(value);
    });    
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .then(function () {
    // always executed
  });

  function bindQueries(val) {    
      console.log(val);
      // var box = "<td><div class='sort-handler'><i class='fas fa-th'></i></div></td>";
      var name = "<td>" + val.name + "</td>";
      var type = "<td class='font-weight-600'>" + val.rcode_name + "</td>";
      var value = "<td><div class='badge badge-warning'>" + val.value + "</div></td>";

      var tableRow = "<tr>"  + name + type + value + "</tr>";
      $('#topDomainQuery tbody').append($(tableRow));
  }


// script untuk tampilan
$('#toggle-modal').fireModal({
  title: 'My Modal',
  content: 'Hello!'
});
</script>
</script>
@endsection