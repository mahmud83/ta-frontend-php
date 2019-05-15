@extends('layouts.app')
@section('head-script')
<link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/jqvmap/dist/jqvmap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
@endsection
@section('content')
<div class="section-header">
  <h1>Statistic</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Report</a></div>
    <div class="breadcrumb-item">DNS Report</div>
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
@endsection

@section('foot-script')
<script>
  // get all dnslogs
  axios.get('http://68.183.177.125:9090/api/dnslogs')
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
    var orig_h = "<td>" + val.id_orig_h + "</td>";
    var orig_p = "<td>" + val.id_orig_p + "</td>";
    var resp_h = "<td>" + val.id_resp_h + "</td>";
    var resp_p = "<td>" + val.id_resp_p + "</td>";
    var proto = "<td>" + val.proto + "</td>";
    var trans_id = "<td>" + val.trans_id + "</td>";
    var query = "<td>" + val.query + "</td>";
    var rcode = "<td>" + val.rcode + "</td>";
    var rcode_name = "<td>" + val.rcode_name + "</td>";
    var AA = "<td>" + val.AA + "</td>";
    var TC = "<td>" + val.TC + "</td>";
    var RD = "<td>" + val.RD + "</td>";
    var RA = "<td>" + val.RA + "</td>";
    var Z = "<td>" + val.Z + "</td>";
    var answers = "<td>" + val.answers + "</td>";
    var TTLs = "<td>" + val.TTLs + "</td>";
    var rejected = "<td>" + val.rejected + "</td>";
    var detail = "<td><a href='#' class='btn btn-primary trigger--fire-modal-1' id='toggle-modal'>Detail</a></td>"

    var headRow = "<tbody> \
                      <tr class='clickable' data-toggle='collapse' aria-expanded='false' aria-controls='group-of-rows-1'> \
                        <td>" + val.ts + "</td> \
          	            <td>" + val.resp_h + "</td> \
                        <td>" + val.orig_h + "</td> \
                        <td>" + val.query + "</td> \
                        <td>+</td> \
                      </tr> \
                    </tbody>";
    var tableRow = "<tr>" + ts + orig_h + resp_h + query + detail + "</tr>";
    var tableRow2 = headRow;
    $('#myTable tbody').append($(tableRow));
  }

  // get all dnslogs
  axios.get('http://68.183.177.125:9090/api/dnslogs/queries')
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

    var tableRow = "<tr>" + name + type + value + "</tr>";
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