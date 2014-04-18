@extends('layouts.layout')
@include('shared.page-header',array('heading'=>'New Region','description'=>'Enter required fields and press save button'))
@section('content')

<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: TEXT FIELDS PANEL -->
        <div class="panel panel-default">
            {{ Form::open(array('route' => 'regions.store','id'=>'form','role' => 'form','class' => 'form-horizontal')) }}
            @include('form.title',array('text' => 'Region Fields'))
            <div class="panel-body">
                @include('form.input',array('field'=> 'description','required'=>'true','label'=>'Description:','placeholder'=>'Enter Region description'))
            </div>
            <div class="panel-footer">
                @include('form.buttons',array('submit' => 'Save','cancel'=>'Cancel'))
            </div>
            {{ Form::close() }}
        </div>
        <!-- end: TEXT FIELDS PANEL -->
    </div>
</div>
@stop

@include('shared.page-footer-form')