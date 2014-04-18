<div class="form-group">
    <div class="form-group">
        <label for="{{ $field }}" class="col-sm-2 control-label">
            {{ isset($label) ?  $label: '' }} {{ isset($required) ? '<span class="symbol required"></span>' : '' }}
        </label>
        <div class="col-sm-9">
            {{ Form::select($field, isset($source) ? $source : null ,'0',array('id'=>'form-field-select-3','placeholder' => isset($placeholder) ? $placeholder : 'Enter '.$field, 'class' => isset($required) ? 'form-control search-select required' : 'form-control search-select')) }}
        </div>
    </div>
</div>