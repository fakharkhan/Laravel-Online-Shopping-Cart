@section('title', isset($heading) ? $heading : 'Page Heading')
@section('pageHeader')
<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li>
                <i class="clip-grid-6"></i>
                <a href="#">
                    System Definitions
                </a>
            </li>
            <li class="active">
                {{ isset($heading) ? $heading : 'Page Heading' }}
            </li>
            <li class="search-box">
                <form class="sidebar-search">
                    <div class="form-group">
                        <input type="text" placeholder="Start Searching...">
                        <button class="submit">
                            <i class="clip-search-3"></i>
                        </button>
                    </div>
                </form>
            </li>
        </ol>
        <div class="page-header">
            <h1> {{ isset($heading) ? $heading : 'Page Heading' }} <small>{{ isset($description) ? $description : 'description of this page' }}</small></h1>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>


<!-- start: Errors Block-->
<div class="row">
    <div class="col-sm-12">
        <!--            Client side validations-->
        <div class="errorHandler alert alert-danger no-display">
            <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
        </div>
        <div class="successHandler alert alert-success no-display">
            <i class="fa fa-ok"></i> Your form validation is successful!
        </div>
<!--            Server side validations-->
        @if ($errors->any())
        <div class="alert alert-block alert-danger fade in">
            <button data-dismiss="alert" class="close" type="button"> × </button>
            <h4 class="alert-heading"><i class="fa fa-times-circle"></i> Error!</h4>
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        </div>
        @endif

    </div>
</div>
<!-- end: Errors Block-->

<!-- end: PAGE HEADER -->
@stop