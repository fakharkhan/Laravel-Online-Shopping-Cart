<div class="form-group">
    <div class="form-group">
        <label for="{{ $field }}" class="col-sm-2 control-label">
            {{ isset($label) ?  $label: '' }} {{ isset($required) ? '<span class="symbol required"></span>' : '' }}
        </label>
        <div class="col-sm-9">
            {{ Form::text($field,null,array('placeholder' => isset($placeholder) ? $placeholder : 'Enter '.$field ,'class' => isset($required) ? 'form-control required' : 'form-control' )) }}
        </div>
    </div>
</div>