@extends('layouts.layout')

@include('shared.page-header',array('heading'=>'Orders','description'=>'List of Orders defined in the system'))


@section('content')
<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-group"></i> List of Orders
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover table-full-width" id="Orders">
                    <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Order Date</th>
                        <th class="hidden-xs">Required Date</th>
                        <th class="hidden-xs">Employee</th>
                        <th class="hidden-xs"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orders as $order)
                    <tr>

                        <td> {{ link_to('customers/'.$order->customer->id , $order->customer->contactname ) }}</td>
                        <td> {{ $order->orderdate }}</td>
                        <td class="hidden-xs"> {{ $order->requireddate }}</td>
                        <td class="hidden-xs">{{ link_to('employees/'.$order->employee->id ,  $order->employee->firstname.' '.$order->employee->lastname  ) }} </td>
                        <td class="hidden-xs center">
                            @include('shared.grid-buttons',array('editLink'=>'new','removeLink'=>'Remove'))
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

@include('shared.page-footer-index',array('tableID'=>'Orders'))


