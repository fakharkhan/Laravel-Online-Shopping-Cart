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
                Vendors
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
<!-- end: PAGE HEADER -->
@stop