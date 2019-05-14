@section('head-script')
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
</script>
@endsection

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>DNS Record</h4>
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
