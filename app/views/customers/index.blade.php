@extends('layouts.layout')

@include('shared.page-header',array('heading'=>'Customers','description'=>'List of Customers defined in the system'))

@section('content')
<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-group"></i> List of Customers
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover table-full-width" id="Customers">
                    <thead>
                    <tr>
                        <th>Company</th>
                        <th>Contact Name</th>
                        <th >Contact Title</th>
                        <th class="hidden-xs">City</th>
                        <th class="hidden-xs"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($customers as $customer)
                    <tr>
                        <td>{{ link_to('Customers/'.$customer->id, $customer->companyname) }} </td>
                        <td>{{ $customer->contactname }} </td>
                        <td >{{ $customer->contacttitle }} </td>
                        <td class="hidden-xs">{{ $customer->city }} </td>

                        <td class="hidden-xs center" nowrap>
                            @include('shared.grid-buttons',array('editLink'=> URL::to('Customers/'.$customer->id,'edit') ,'removeLink'=>'#'))
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

@include('shared.page-footer-index',array('tableID'=>'Customers'))


