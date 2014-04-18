<ul class="main-navigation-menu">
<li class="active open">
    <a href="{{ URL::to('/') }}"><i class="clip-home-3"></i>
        <span class="title"> Dashboard </span><span class="selected"></span>
    </a>
</li>
    @if (Auth::check())
        @foreach(Auth::user()->menu() as $key=>$value)
        <li>
            <a href="{{ $value['url'] }}">
                <i class="{{ $value['icon'] }}"></i>
                <span class="title">{{ $key }}  </span><i class="icon-arrow"></i>
                <span class="selected"></span>
            </a>
            <ul class="sub-menu">
                @foreach($value['actions'] as $k=>$v)
                <li>
                    <a href="{{ URL::to($v)}}">
                        <span class="title"><i class="clip-eye"></i></i> {{ $k }} </span>
                    </a>
                </li>
                @endforeach
            </ul>
        </li>
        @endforeach
    @endif
@include('layouts.theme')
</ul>