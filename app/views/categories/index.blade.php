@extends('layouts.layout')

@include('shared.page-header',array('heading'=>'Categories','description'=>'List of categories defined in the system'))

@section('content')
<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-group"></i> List of categories
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover table-full-width" id="categories">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th class="hidden-xs">Description</th>
                        <th class="hidden-xs"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ link_to('categories/'.$category->id, $category->name) }} </td>
                        <td class="hidden-xs">{{ $category->description }}</td>
                        <td class="hidden-xs center" nowrap>
                            @include('shared.grid-buttons',array('editLink'=> URL::to('categories/'.$category->id,'edit') ,'removeLink'=>'#'))
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

@include('shared.page-footer-index',array('tableID'=>'categories'))


