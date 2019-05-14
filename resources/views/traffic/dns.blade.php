@extends('layouts.app')
@section('custom-script')
  <script>
    var socket = io.connect('http://localhost:9091');
    // var socket = io();
    socket.on("dns", function (e) {
      sendDnsLog(e.dns.fullDocument);
    });
    socket.on("error", console.error.bind(console));
    socket.on("message", console.log.bind(console));

    function sendDnsLog(val) {
      console.log(val);
      var box = "<td><div class='sort-handler'><i class='fas fa-th'></i></div></td>";
      var uid = "<td>" + val.uid + "</td>";
      var orig_h = "<td>" + val.id_orig_h + "</td>";
      var resp_h = "<td>" + val.id_resp_h + "</td>";
      var query = "<td>" + val.query + "</td>";
      var detail = "<td><a href='#'' class='btn btn-secondary'>Detail</a></td>"

      var tableRow = "<tr>" + box + uid + orig_h + resp_h + query + status + detail+ "</tr>";
      $('#myTable tbody').append($(tableRow));
    }
  </script>
@endsection
@section('content')
          <div class="section-header">
            <h1>Traffic</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Traffic</a></div>
              <div class="breadcrumb-item">Realtime DNS Query Traffic</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Realtime DNS Traffic</h4>
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
                            <th>Originator Host</th>
                            <th>Responder Host</th>
                            <th>Query</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="sort-handler">
                                <i class="fas fa-th"></i>
                              </div>
                            </td>
                            <td>undefined</td>
                            <td>undefined</td>
                            <td>undefined</td>
                            <td>undefined</td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
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