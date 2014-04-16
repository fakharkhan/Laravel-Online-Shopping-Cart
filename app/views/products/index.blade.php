@extends('layouts.layout')

@include('shared.page-header',array('heading'=>'Products','description'=>'List of products defined in the system'))

@section('content')
<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-group"></i> List of Products
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover table-full-width" id="products">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th >Category</th>
                        <th class="hidden-xs">Vednor</th>
                        <th class="hidden-xs"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td class="hidden-xs"> {{ link_to('categories/'.$product->category->id ,  $product->category->name ) }}</td>
                        <td class="hidden-xs">{{ link_to('vendors/'.$product->vendor->id ,  $product->vendor->name  ) }} </td>
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

@include('shared.page-footer-index',array('tableID'=>'products'))


