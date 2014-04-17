@extends('layouts.layout')

@include('shared.page-header',array('heading'=>'Territories','description'=>'List of territories defined in the system'))

@section('content')
<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-group"></i> List of territories
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover table-full-width" id="territories">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Description</th>
                        <th>Region</th>
                        <th class="hidden-xs"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($territories as $territory)
                    <tr>
                        <td>{{ link_to('territories/'.$territory->id, $territory->code) }} </td>
                        <td>{{ $territory->description }} </td>
                        <td>{{ link_to('regions/'.$territory->region->id, $territory->region->description) }}  </td>
                        <td class="hidden-xs center" nowrap>
                            @include('shared.grid-buttons',array('editLink'=> URL::to('territories/'.$territory->id,'edit') ,'removeLink'=>'#'))
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

@include('shared.page-footer-index',array('tableID'=>'territories'))


