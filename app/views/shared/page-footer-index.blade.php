<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
@section('pageCSS')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/plugins/select2/select2.css"/>
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/DataTables/media/css/DT_bootstrap.css"/>
@stop
<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@section('pageJS')
<script type="text/javascript" src="{{ URL::to('/') }}/assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
<script src="{{ URL::to('/') }}/assets/js/table-data.js"></script>

<script>
    jQuery(document).ready(function () {
        Main.init();
        TableData.init( {{ isset($tableID) ? "'$tableID'" : "'sample_1'" }} );
    });
</script>

@stop
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->