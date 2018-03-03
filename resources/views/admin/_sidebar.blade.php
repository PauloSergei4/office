<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/admin" class="simple-text">
                iPanel
            </a>
        </div>
        <ul class="nav">
            @if(Auth::check())
            {{--<li class="active">--}}
                <li>
                <a href="/admin"">
                    <i class="ti-pie-chart"></i>
                    <p>Управление</p>
                </a>
            </li>
            <li>
                <a href="{{route('users.index')}}">
                    <i class="ti-user"></i>
                    <p>Пользователи</p>
                </a>
            </li>
            <li>
                <a href="{{route('panels.index')}}">
                    <i class="ti-view-list-alt"></i>
                    <p>Панели</p>
                </a>
            </li>
            @endif

        </ul>
    </div>
</div>