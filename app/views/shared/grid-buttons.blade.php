<div class="visible-md visible-lg hidden-sm hidden-xs" >
    <a href="{{ isset($editLink) ? $editLink : '#' }}" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
    <a href="{{ isset($removeLink) ? $removeLink : '#' }}" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
</div>
<div class="visible-xs visible-sm hidden-md hidden-lg">
    <div class="btn-group">
        <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
            <i class="fa fa-cog"></i> <span class="caret"></span>
        </a>
        <ul role="menu" class="dropdown-menu pull-right">
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="{{ isset($editLink) ? $editLink : '#' }}">
                    <i class="fa fa-edit"></i> Edit
                </a>
            </li>
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="{{ isset($removeLink) ? $removeLink : '#' }}">
                    <i class="fa fa-times"></i> Remove
                </a>
            </li>
        </ul>
    </div>
</div>