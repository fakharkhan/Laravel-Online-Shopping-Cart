@extends('layouts.layout')

@include('shared.page-header',array('heading'=>'Shippers','description'=>'List of shippers defined in the system'))

@section('content')
<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-group"></i> List of shippers
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover table-full-width" id="shippers">
                    <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Contact Name</th>
                        <th class="hidden-xs">Phone</th>
                        <th class="hidden-xs">Fax</th>
                        <th class="hidden-xs" >Email</th>
                        <th class="hidden-xs"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($shippers as $shipper)
                    <tr>
                        <td>{{ link_to('shippers/'.$shipper->id, $shipper->companyname) }} </td>
                        <td>{{ $shipper->contactname }} </td>
                        <td class="hidden-xs">{{ $shipper->phone }} </td>
                        <td class="hidden-xs">{{ $shipper->fax }} </td>
                        <td class="hidden-xs">{{ $shipper->email }} </td>

                        <td class="hidden-xs center" nowrap>
                            @include('shared.grid-buttons',array('editLink'=> URL::to('shippers/'.$shipper->id,'edit') ,'removeLink'=>'#'))
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

@include('shared.page-footer-index',array('tableID'=>'shippers'))


