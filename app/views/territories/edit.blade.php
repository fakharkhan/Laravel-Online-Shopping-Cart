@extends('layouts.layout')
@include('shared.page-header',array('heading'=>'Edit Territory','description'=>'update required fields and press save button'))


@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            {{ Form::model($territory, array('method' => 'PATCH', 'route' => array('territories.update', $territory->id),'id'=>'form','role' => 'form','class' => 'form-horizontal')) }}
            @include('form.title',array('text' => 'Territory Fields'))
                <div class="panel-body">
                    @include('form.select',array('field'=> 'region_id','source'=>$regions,'label'=>'Select Region:','required'=>'true'))
                    @include('form.input',array('field'=> 'code','required'=>'true','label'=>'Code:','placeholder'=>'Enter Territory code'))
                    @include('form.input',array('field'=> 'description','required'=>'true','label'=>'Description:','placeholder'=>'Enter Territory description'))
                </div>
                <div class="panel-footer">
                    @include('form.buttons',array('submit' => 'Save','cancel'=>'Cancel'))
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop




@include('shared.page-footer-form')

