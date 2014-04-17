@extends('layouts.layout')

@include('shared.page-header',array('heading'=>'Employees','description'=>'List of Employees defined in the system'))

@section('content')
<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-group"></i> List of Employees
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover table-full-width" id="Employees">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th class="hidden-xs">Courtesy</th>
                        <th class="hidden-xs">Birth Date</th>
                        <th>Title</th>
                        <th>Manager</th>
                        <th class="hidden-xs"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($employees as $employee)
                    <tr>
                        <td>{{ link_to('Employees/'.$employee->id, $employee->firstname) }} </td>
                        <td>{{ $employee->lastname }} </td>
                        <td class="hidden-xs">{{ $employee->titleofcourtesy }} </td>
                        <td class="hidden-xs">{{ $employee->birthdate }} </td>
                        <td>{{ $employee->title }} </td>
                        <td>{{ link_to('Employees/'.$employee->manager->id, $employee->manager->firstname.' '. $employee->manager->lastname) }} </td>
                        <td class="hidden-xs center" nowrap>
                            @include('shared.grid-buttons',array('editLink'=> URL::to('Employees/'.$employee->id,'edit') ,'removeLink'=>'#'))
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

@include('shared.page-footer-index',array('tableID'=>'Employees'))


