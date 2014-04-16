@extends('layouts.layout')
@section('title', 'Vendors')
@section('pageHeader')
<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li>
                <i class="clip-grid-6"></i>
                <a href="#">
                    System Definitions
                </a>
            </li>
            <li class="active">
                Vendors
            </li>
            <li class="search-box">
                <form class="sidebar-search">
                    <div class="form-group">
                        <input type="text" placeholder="Start Searching...">
                        <button class="submit">
                            <i class="clip-search-3"></i>
                        </button>
                    </div>
                </form>
            </li>
        </ol>
        <div class="page-header">
            <h1>Vendors <small>List of vendors defined in the system</small></h1>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
@stop

@section('content')
<!-- start: PAGE CONTENT -->
<div class="row">
<div class="col-md-12">
<!-- start: DYNAMIC TABLE PANEL -->
<div class="panel panel-default">
<div class="panel-heading">
  <i class="fa fa-group"></i> List of Vendors
</div>
<div class="panel-body">
<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
<thead>
<tr>
    <th class="hidden-xs">Name</th>
    <th>Email</th>
    <th>Web</th>
    <th class="hidden-xs"> Telephone</th>
    <th>Postcode</th>
</tr>
</thead>
    <tbody>
        @foreach ($vendors as $vendor)
            <tr>
                <td>{{ $vendor->name }}</td>
                <td class="hidden-xs">{{ $vendor->email }}</td>
                <td>{{ $vendor->web }}</td>
                <td class="hidden-xs">{{ $vendor->telephone }}</td>
                <td>{{ $vendor->postcode }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
<!-- end: DYNAMIC TABLE PANEL -->
</div>
</div>
<!-- end: PAGE CONTENT-->
@stop

@section('pageCSS')
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css" />
<link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css" />
@stop

@section('pageJS')
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
<script src="assets/js/table-data.js"></script>
@stop

@section('pageScript')
<script>
    jQuery(document).ready(function() {
        Main.init();
        TableData.init();
    });
</script>
@stop

