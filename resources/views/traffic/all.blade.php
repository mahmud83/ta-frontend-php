@extends('layouts.app')
@section('head-script')
<script>
    var socket = io.connect('http://localhost:9091');
    // var socket = io();
    socket.on("classifications", function (e) {
      sendClassificationLog(e.classifications.fullDocument);
    });
    socket.on("error", console.error.bind(console));
    socket.on("message", console.log.bind(console));

    function sendClassificationLog(val) {
      console.log(val);
      var box = "<td><div class='sort-handler'><i class='fas fa-th'></i></div></td>";
      var uid = "<td>" + val.uid + "</td>";
      var orig_h = "<td>" + val.orig_h + "</td>";
      var orig_p = "<td>" + val.orig_p + "</td>";
      var resp_h = "<td>" + val.resp_h + "</td>";
      var resp_p = "<td>" + val.resp_p + "</td>";
      var label = "<td>" + val.label + "</td>";

      var tableRow = "<tr>" + box + uid + orig_h + orig_p + resp_h + resp_p + label + "</tr>";
      $('#myTable tbody').append($(tableRow));
    }
</script>
@endsection


@section('content')
          <div class="section-header">
            <h1>Traffic</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Traffic</a></div>
              <div class="breadcrumb-item">Realtime Connections Traffic on server</div>
            </div>
          </div>

          <div class="section-body">
            <p class="section-lead"></p>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Realtime Connections Traffic on server</h4>
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
                    <div class="table-responsive">
                      <table class="table table-striped" id="myTable">
                        <thead>
                          <tr>
                            <th class="text-center">
                              <i class="fas fa-th"></i>
                            </th>
                            <th>uid</th>
                            <th>Source ip</th>
                            <th>Source Port</th>
                            <th>Destionation ip</th>
                            <th>Destination Port</th>
                            <th>Prediction Label</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="sort-handler">
                                <i class="fas fa-th"></i>
                              </div>
                            </td>
                            <td>dsad</td>
                            <td>192.168.70.1</td>
                            <td>53</td>
                            <td>192.168.70.10</td>
                            <td>22</td>
                            <td>label</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

