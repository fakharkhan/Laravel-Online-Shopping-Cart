@extends('layouts.layout')
@include('shared.page-header',array('heading'=>'New Category','description'=>'Enter required fields and press save button'))
@section('content')

<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: TEXT FIELDS PANEL -->
        <div class="panel panel-default">
            {{ Form::open(array('route' => 'categories.store','id'=>'form','role' => 'form','class' => 'form-horizontal')) }}
                @include('form.title',array('text' => 'Category Fields'))
            <div class="panel-body">
                @include('form.input',array('field'=> 'name','required'=>'true','label'=>'Name:','placeholder'=>'Enter category name'))
                @include('form.input',array('field'=> 'description','label'=>'Description:','placeholder'=>'Enter category description'))
                @include('form.photo',array('required'=>'true','label'=>'Picture Upload:'))
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