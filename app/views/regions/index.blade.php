@extends('layouts.layout')

@include('shared.page-header',array('heading'=>'Regions','description'=>'List of Regions defined in the system'))

@section('content')
<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-group"></i> List of Regions
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover table-full-width" id="regions">
                    <thead>
                    <tr>
                        <th>Description</th>
                        <th class="hidden-xs"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($regions as $region)
                    <tr>
                        <td>{{ link_to('regions/'.$region->id, $region->description) }} </td>
                        <td class="hidden-xs center" nowrap>
                            @include('shared.grid-buttons',array('editLink'=> URL::to('regions/'.$region->id,'edit') ,'removeLink'=>'#'))
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

@include('shared.page-footer-index',array('tableID'=>'regions'))


