<script type="text/javascript">
    $(document).ready(function () {
        $('#malicioustable').DataTable({
            "ajax": "http://10.8.0.2:9090/api/klasifikasimalicious/2019-05-08/2019-05-08/?pageNo=1&size=100",
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