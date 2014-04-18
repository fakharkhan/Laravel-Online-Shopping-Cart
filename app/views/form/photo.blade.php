<div class="form-group">
    <div class="col-sm-12">
        <label class="col-sm-2 control-label" for="form-field-1">
            {{ isset($label) ? $label: '' }} {{ isset($required) ? '<span class="symbol required"></span>' : '' }}
        </label>

        <div class="col-sm-9">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img
                        src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail"
                     style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                    <span class="btn btn-light-grey btn-file"><span
                            class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span
                            class="fileupload-exists"><i
                                class="fa fa-picture-o"></i> Change</span>
                        <input type="file"
                               class="{{ isset($required) ? 'required' : ''  }}">
                    </span>
                    <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                        <i class="fa fa-times"></i> Remove
                    </a>
                </div>
            </div>
        </div>

        <!--        <div class="alert alert-warning">-->
        <!--            <span class="label label-warning">NOTE!</span>-->
        <!--            <span> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead. </span>-->
        <!--        </div>-->
    </div>
</div>