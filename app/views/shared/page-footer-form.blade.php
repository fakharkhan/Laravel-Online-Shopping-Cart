
@section('pageCSS')
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/select2/select2.css">
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/datepicker/css/datepicker.css">
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/summernote/build/summernote.css">
<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
@stop



@section('pageJS')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{ URL::to('/') }}/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/select2/select2.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/summernote/build/summernote.min.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/ckeditor/ckeditor.js"></script>
<script src="{{ URL::to('/') }}/assets/plugins/ckeditor/adapters/jquery.js"></script>
<script src="{{ URL::to('/') }}/assets/js/form-elements.js"></script>

<script src="{{ URL::to('/') }}/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="{{ URL::to('/') }}/assets/js/form-validation.js"></script>

<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function() {
        FormElements.init();
        FormValidator.init();
    });
</script>

@stop
