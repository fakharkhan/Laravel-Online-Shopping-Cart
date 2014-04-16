@extends('layouts.layout')

@include('shared.page-header',array('heading'=>'Vendors','description'=>'List of vendors defined in the system'))

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
                <table class="table table-striped table-bordered table-hover table-full-width" id="vendors">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="hidden-xs">Web</th>
                        <th class="hidden-xs"> Telephone</th>
                        <th class="hidden-xs">Postcode</th>
                        <th class="hidden-xs"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($vendors as $vendor)
                    <tr>
                        <td>{{ $vendor->name }}</td>
                        <td >{{ $vendor->email }}</td>
                        <td class="hidden-xs">{{ $vendor->web }}</td>
                        <td class="hidden-xs">{{ $vendor->telephone }}</td>
                        <td class="hidden-xs">{{ $vendor->postcode }}</td>
                        <td class="hidden-xs center" nowrap>
                            @include('shared.grid-buttons',array('editLink'=> URL::to('vendors/'.$vendor->id,'edit') ,'removeLink'=>'#'))
                        </td>
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

@include('shared.page-footer-index',array('tableID'=>'vendors'))


